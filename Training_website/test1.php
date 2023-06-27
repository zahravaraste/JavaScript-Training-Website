<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
} else {
    $_SESSION['url'] = $_SERVER['REQUEST_URI'];
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Quiz</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

    <style>

    </style>
</head>

<body>

    <div class="app">
        <div class="box1">
            <h1>آزمون اول جاوا اسکریپت</h1>
            <a href="tests.php"><button id="back">بازگشت به آزمون ها</button></a>
        </div>
        <div class="quiz">
            <h2 id="question">question goes here</h2>
            <div id="answer-buttons">
                <button class="btn2">answer 1</button>
                <button class="btn2">answer 2</button>
                <button class="btn2">answer 3</button>
                <button class="btn2">answer 4</button>
            </div>
            <div class="box2">
                <button id="next-btn">next</button>
            </div>
        </div>
    </div>
    
    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="js/testscript.js"></script>

</body>

</html>