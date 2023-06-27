<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    session_start();
    if (isset($_SESSION['url'])) {
        header("Location: " . $_SESSION['url']);
    }
}

if (isset($_POST["register"])) {
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_users WHERE email='$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> alert('Email has already taken'); </script>";
    } else {
        if ($password == $repassword) {
            $query = "INSERT INTO tb_users VALUES(Null,'$email','$phone','$password')";

            if (mysqli_query($conn, $query)) {
                $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE email='$email'");
                $row = mysqli_fetch_assoc($result);
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("Location: headlines.php");
            } else {
                echo
                "<script> alert('Something went wrong'); </script>";
            }
        } else {
            echo
            "<script> alert('Password does not match'); </script>";
        }
    }
}

if (isset($_POST["submit"])) {
    $login_email = $_POST["login-email"];
    $login_password = $_POST["login-password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE email='$login_email'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($login_password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: " . $_SESSION['url']);
        } else {
            echo
            "<script> alert('Wrong password'); </script>";
        }
    } else {
        echo
        "<script> alert('User not registered'); </script>";
    }
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header -->

    <section class="header">

        <a href="home.php" class="logo">آموزش جاوا اسکریپت</a>

        <nav class="navbar">
            <a href="home.php">صفحه اصلی</a>
            <a href="headlines.php">سرفصل ها</a>
            <a href="tests.php">آزمون ها</a>
            <a href="about.php">درباره ما</a>
            <?php
            if (!empty($_SESSION["id"])) {
                echo "<a href=logout.php>خروج</a>";
            } else {
                echo "<a href=login.php>ورود|ثبت نام</a>";
            }
            ?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header -->
    <section class="contentt">
        <p>برای دسترسی به مطالب آموزشی وارد حساب کاربری خود شوید و در صورت عدم داشتن حساب کاربری، ثبت نام کنید.</p>
    </section>

    <div class="container">
        <input type="checkbox" name="" id="check">
        <div class="login form">
            <header>ورود</header>
            <form method="post">
                <input required type="text" placeholder="ایمیل" id="login-email" name="login-email">
                <input required type="password" placeholder="گذرواژه" id="login-password" name="login-password">
                <input type="submit" name="submit" class="button" value="ورود">
            </form>
            <div class="signup">
                <span class="signup"> حساب کاربری ندارید؟
                    <label for="check">ثبت نام</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>ثبت نام</header>
            <form method="post">
                <input required type="text" placeholder="ایمیل" id="email" name="email">
                <input required type="text" placeholder="شماره تلفن" id="phone" name="phone">
                <input required type="password" placeholder="گذرواژه" id="password" name="password">
                <input required type="password" placeholder="تکرار گذرواژه" id="repassword" name="repassword">
                <input type="submit" name="register" class="button" value="ثبت نام">
            </form>
            <div class="signup">
                <span class="signup">قبلا ثبت نام کرده اید؟
                    <label for="check">ورود</label>
                </span>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>