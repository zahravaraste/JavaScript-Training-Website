<?php
require 'config.php';
$_SESSION['url']=$_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headlines</title>

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
    
    <!-- header -->

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>سرفصل ها</h1>
    </div>

    <!-- packages section -->
    
    <section class="packages">
    
        <div class="box-container">

            <div class="box"><a href="comment.php">
                <div class="content">
                    <h3>کامنت ها (توضیحات)</h3>
                </div></a>
            </div>

            <div class="box"><a href="variable.php">
                <div class="content">
                    <h3>متغیرها و ثابت ها</h3>
                </div></a>
            </div>

            <div class="box"><a href="datatypes.php">
                <div class="content">
                    <h3>انواع داده ها</h3>
                </div></a>
            </div>

            <div class="box"><a href="operators.php">
                <div class="content">
                    <h3>عملگرها</h3>
                </div></a>
            </div>

            <div class="box"><a href="typeconversion.php">
                <div class="content">
                    <h3>تبدیل نوع</h3>
                </div></a>
            </div>

            <div class="box"><a href="logicaloperator.php">
                <div class="content">
                    <h3>مقایسه عملگرها</h3>
                </div></a>
            </div>

            <div class="box"><a href="ifelse.php">
                <div class="content">
                    <h3>دستور if else</h3>
                </div></a>
            </div>

            <div class="box"><a href="for.php">
                <div class="content">
                    <h3>حلقه for</h3>
                </div></a>
            </div>

            <div class="box"><a href="while.php">
                <div class="content">
                    <h3>حلقه while و do while</h3>
                </div></a>
            </div>

            <div class="box"><a href="break.php">
                <div class="content">
                    <h3> دستور break</h3>
                </div></a>
            </div>

            <div class="box"><a href="continue.php">
                <div class="content">
                    <h3>دستور continue</h3>
                </div></a>
            </div>

            <div class="box"><a href="switch.php">
                <div class="content">
                    <h3>دستور switch</h3>
                </div></a>
            </div>

            <div class="box"><a href="trycatch.php">
                <div class="content">
                    <h3>دستور try catch finally</h3>
                </div></a>
            </div>

            <div class="box"><a href="function.php">
                <div class="content">
                    <h3> تابع جاوا اسکریپت</h3>
                </div></a>
            </div>

            <div class="box"><a href="scope.php">
                <div class="content">
                    <h3>دامنه متغیرها</h3>
                </div></a>
            </div>

            <div class="box"><a href="hoisting.php">
                <div class="content">
                    <h3>hoisting</h3>
                </div></a>
            </div>

            <div class="box"><a href="recursion.php">
                <div class="content">
                    <h3>توابع بازگشتی</h3>
                </div></a>
            </div>

            <div class="box"><a href="object.php">
                <div class="content">
                    <h3>آبجکت</h3>
                </div></a>
            </div>

            <div class="box"><a href="methods.php">
                <div class="content">
                    <h3>متدها و this</h3>
                </div></a>
            </div>

            <div class="box"><a href="constructor.php">
                <div class="content">
                    <h3>سازنده</h3>
                </div></a>
            </div>

            <div class="box"><a href="prototype.php">
                <div class="content">
                    <h3>پروتوتایپ</h3>
                </div></a>
            </div>

            <div class="box"><a href="gettersetter.php">
                <div class="content">
                    <h3>getter و setter</h3>
                </div></a>
            </div>

            <div class="box"><a href="forin.php">
                <div class="content">
                    <h3> حلقه for…in</h3>
                </div></a>
            </div>

            <div class="box"><a href="number.php">
                <div class="content">
                    <h3>Number</h3>
                </div></a>
            </div>

            <div class="box"><a href="string.php">
                <div class="content">
                    <h3>string</h3>
                </div></a>
            </div>

            <div class="box"><a href="arrays.php">
                <div class="content">
                    <h3>آرایه ها</h3>
                </div></a>
            </div>

            <div class="box"><a href="symbol.php">
                <div class="content">
                    <h3>سمبل ها (آخرین درس پایه ای)</h3>
                </div></a>
            </div>
        </div>

        <div class="load-more"><span class="btn">load more</span></div>
    </section>

    <!-- packages section -->

    <script>
        let menu=document.querySelector('#menu-btn');
        let navbar=document.querySelector('.header .navbar');

        menu.onclick = () =>{
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        };

        window.onscroll = () =>{
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
        };

        let loadMoreBtn = document.querySelector('.packages .load-more .btn');
        let currentItem = 9;
        let boxes = [...document.querySelectorAll('.packages .box-container .box')];
        for (var i=1; i<9; i++){
            boxes[i].style.display = 'inline-block';
        };
        loadMoreBtn.onclick = () =>{
        for (var i=currentItem; i<currentItem+3; i++){
            boxes[i].style.display = 'inline-block';
        };
        currentItem +=3;
        if(currentItem >= boxes.length){
            loadMoreBtn.style.display = 'none'
        }
        };
    </script>
<?php include 'footer.php';?>