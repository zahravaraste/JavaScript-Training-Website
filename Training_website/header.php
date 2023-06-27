<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION["id"];
    $result=mysqli_query($conn,"SELECT * FROM tb_users WHERE id=$id");
    $row=mysqli_fetch_assoc($result);
}
else{
    $_SESSION['url']=$_SERVER['REQUEST_URI'];
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    
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
            if(!empty($_SESSION["id"])){
               echo "<a href=logout.php>خروج</a>";
            }
            else{
               echo "<a href=login.php>ورود|ثبت نام</a>";
            }
            ?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>