<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $message = $_POST["message"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $star = $_POST['mydata'];
    if (empty($star)) {
        echo
        "<script> alert('لطفا امتیاز خود را ثبت کنید.'); </script>";
    } else {
        $query = "INSERT INTO comment VALUES(Null,'$message','$name','$email','$star')";
        if (mysqli_query($conn, $query)) {
            echo
            "<script> alert('نظر شما ثبت شد'); </script>";
        } else {
            echo
            "<script> alert('Something went wrong'); </script>";
        }
    }
}
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link type="text/css" rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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

    <div class="heading" style="background-image: url(images/img3.png)" ;>
        <h1>درباره ما</h1>
    </div>

    <!-- about section -->

    <section class="about">
        <div class="image">
            <img src="images/img4.jpg" alt="">
        </div>

        <div class="content">
            <h3>هدف ما</h3>
            <p>در وبسایت ما همواره دغدغه ما بر این بوده که اکثر برنامه نویسان فارسی زبان عزیز ایرانی به دلیل ضعف در زبان انگلیسی نمی توانند از کتاب ها و ویدئوهای برنامه نویسی که به زبان انگلیسی منتشر می شوند استفاده کنند. از همین جهت ممکن است سرعت پیشرفتشان در برنامه نویسی به کندی پیش برود. هدف ما از راه اندازی این وبسایت کمک کردن به برنامه نویسان و توسعه دهندگان نرم افزار برای ارتقا دادن سطح مهارت های خود در این حوزه و انتقال مطالبی است که اکثراً در کتاب های تخصصی و ویدئوهایی منتشر می شوند که به زبان انگلیسی اند. باور ما بر این است که جامعه ی برنامه نویسی ایران نیازمند تلاش روز افزون برای رسیدن به بالاترین سطح جهانی در حوزه ی توسعه ی نرم افزار است.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fa fa-question"></i>
                    <span>تست های متنوع</span>
                </div>
                <div class="icons">
                    <i class="fa fa-refresh"></i>
                    <span>مطالب به روز</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>دسترسی 24 ساعته</span>
                </div>
            </div>
        </div>
    </section>

    <!-- about section -->

    <!-- comment section-->
    <section class="comment">
        <div class="comment-box">
            <h1>نظر شما چیست؟</h1>
            <form method="post">
                <div class="rating-box">
                    <p>امتیاز شما</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <textarea required name="message" placeholder="نظرتان را بنویسید" cols="30" rows="5"></textarea>
                <input required type="text" placeholder="نام" id="name" name="name">
                <input required type="text" placeholder="ایمیل" id="email" name="email">
                <input type="submit" name="submit" class="button" value="فرستادن دیدگاه">
                <input type="hidden" id="mydata" name="mydata">
            </form>
        </div>
    </section>


    <!-- comment section-->

    <!-- reviews section -->

    <section class="reviews">

        <h1 class="heading-title">نظرات کاربران</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <?php
                $sql = "SELECT message,name,star FROM comment ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="swiper-slide slide">
                            <div class="stars">
                                <?php
                                $j = 0;
                                while ($row['star'] > $j) {
                                ?>
                                    <i class="fas fa-star"></i>
                                <?php $j++;
                                } ?>
                            </div>
                            <p><?php echo $row['message']; ?></p>
                            <h3><?php echo $row['name']; ?></h3>
                            <img src="images/user.png" alt="">
                        </div>
                <?php }
                } ?>

            </div>
        </div>
    </section>

    <!-- reviews section -->

    <script>
        const stars = document.querySelectorAll(".stars i");
        stars.forEach((star, index1) => {
            star.addEventListener("click", () => {
                stars.forEach((star, index2) => {
                    index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");

                });
                var myvalue = (index1 + 1);
                $("#mydata").val(myvalue);
            });
        });
    </script>

    <?php include 'footer.php'; ?>