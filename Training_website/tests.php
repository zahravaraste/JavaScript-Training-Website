<?php include 'header.php'; ?>

<div class="heading" style="background-image: url(images/test.png)" ;>
    <h1>آزمون های آنلاین جاوا اسکریپت</h1>
</div>


<!-- test section -->

<section class="main-content">
    <div class="test-content">
        <p>این آزمون صرفا برای به چالش کشیدن میزان دانش شما نسبت به زبان جاوا اسکریپت می باشد، پیشنهاد میکنم اول زبان جاوا اسکریپت را در وبسایت ما بصورت کاملا رایگان و بطور کامل یاد بگیرید سپس به این صفحه مراجعه و آزمون را انجام دهید.</p>
        <p>آزمون های ما یک راه خوب برای سنجش میزان یادگیری شما در مورد جاوا اسکریپت هستند.</p>
        <p>این آزمون ها محدودیت زمانی نداشته و صرفا جهت آزمایش خودتان هستند.</p>
        <p>اگر با زبان جاوا اسکریپت هیچ آشنایی ندارید، پیشنهاد میکنم آموزش های قدم به قدم زبان جاوا اسکریپت را دنبال نمایید.</p>
        <p>به ازای هر پاسخ صحیح 1 امتیاز دریافت خواهید کرد. در پایان آزمون، نمره کل شما نمایش داده می شود. حداکثر امتیاز 10 امتیاز است.</p>
        <div class="test">
            <p>آزمون اول</p>
            <button onclick="start()" class="btn-test">شروع</button>
            <script>
                function start() {
                    if (confirm("Are you sure you want to start the test?")) {
                        window.location.href = 'test1.php';
                    }
                }
            </script>
        </div>
    </div>
</section>

<!-- test section -->

<?php include 'footer.php'; ?>