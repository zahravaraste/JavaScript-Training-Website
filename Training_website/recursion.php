<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>توابع بازگشتی</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش درباره توابع بازگشتی در جاوا اسکریپت (JavaScript) همراه با مثال توضیح خواهیم داد.</p>
            <p>فرآیند بازگشت یعنی فراخوانی خود و تابعی که خود را فراخوانی کند، تابع بازگشتی (recursion function) نامیده می شود.</p>
            <p>ساختار تابع بازگشتی:</p>
            <div class="code">
                <p>function recurse() { <br>
                
                // کد تابع <br>
                
                recurse(); <br>
                
                // ادامه کد تابع <br>
                
                } <br>
                
                recurse();</p>
            </div>
            <p>تابع ()recurse یک تابع بازگشتی است که خودش را درون کد تابع فراخوانی می کند.</p>
            <h1>عملکرد تابع بازگشتی در جاوا اسکریپت</h1>
            <p>تابع بازگشتی باید شرطی برای توقف داشته باشد که دیگه خودش را فراخوانی نکند. در غیر اینصورت تابع به طور نامحدود خود را فراخوانی می کند و گیر می افتد.</p>
            <p>پس از برقراری شرط توقف، تابع فراخوانی خود را متوقف می کند.</p>
            <p>برای جلوگیری از بازگشت بی نهایت تابع می توانید از دستور if … else (یا روش مشابه) استفاده کنید که در آن یک مسیر برای بازگشت تابع است و مسیر دیگر بازگشت ندارد.</p>
            <p>بنابراین به طور کلی ساختار تابع بازگشتی مشابه کد زیر به نظر می رسد:</p>
            <div class="code">
                <p>function recurse() { <br>
                
                if(شرط) { <br>
                
                recurse(); <br>
                
                } <br>
                
                else { <br>
                
                // توقف فراخوانی تابع <br>
                
                } <br>
                
                } <br>
                
                recurse();</p>
            </div>
            <p>شمارش معکوس از عدد n به ۱، یک مثال ساده برای تابع بازگشتی است.</p>
            <p>مثال ۱: چاپ اعداد طبیعی به صورت نزولی</p>
            <div class="code">
                <p>// تا ۱n نمایش اعداد طبیعی از <br>
                
                function countDown(number) { <br>
                
                // نمایش عدد <br>
                
                console.log(number); <br>
                
                // کاهش مقدار <br>
                
                let newNumber = number – 1; <br>
                
                // شرط توقف <br>
                
                if (newNumber > 0) { <br>
                
                countDown(newNumber); <br>
                
                } <br>
                
                } <br>

                
                countDown(4);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>۴ <br>
                
                ۳ <br>
                
                ۲ <br>
                
                ۱</p>
            </div>
            <p>در این برنامه با فراخوانی تابع countdown(number) یک عدد به عنوان آرگومان ارسال می شود.</p>
            <p>در هر تکرار یک واحد از عدد ورودی کم می شود، تابع countDown تا زمانیکه عدد مثبت باشد، خود را فراخوانی می کند. در اینجا newNumber > 0 شرط توقف برای فراخوانی بازگشت تابع است.</p>
            <p>این فراخوانی بازگشتی را می توان در مراحل زیر توضیح داد:</p>
            <ul><li>countDown(4) مقدار ۴ چاپ می کند و تابع countDown(3) را فراخوانی می کند.</li>
            <li>countDown(3) مقدار ۳ چاپ می کند و تابع countDown(2) را فراخوانی می کند.</li>
            <li>countDown(2) مقدار ۲ چاپ می کند و تابع countDown(1) را فراخوانی می کند.</li>
            <li>countDown(1) مقدار ۱ چاپ می کند و تابع countDown(0) را فراخوانی می کند.</li></ul>
            <p>وقتی آرگومان ورودی تابع به مقدار ۰ برسد آنگاه شرط توقف برقرار می شود و فراخوانی تابع متوقف خواهد شد.</p>
            <p>مثال ۲: محاسبه فاکتوریل یک عدد</p>
            <div class="code">
                <p>// برنامه محاسبه مقدار فاکتوریل یک عدد <br>
                
                function factorial(x) { <br>
                
                // اگر عدد ۰ باشد <br>
                
                if (x === 0) { <br>
                
                return 1; <br>
                
                } <br>
                
                // اگر عدد مثبت باشد <br>
                
                else { <br>
                
                return x * factorial(x – 1); <br>
                
                } <br>
                
                } <br>
                
                let num = 3; <br>
                
                // فراخوانی تابع اگر عدد منفی نباشد <br>
                
                if (num > 0) { <br>
                
                let result = factorial(num); <br>
                
                console.log(`The factorial of ${num} is ${result}`); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>The factorial of 3 is 6</p>
            </div>
            <p>در این مثال تابع factorial(x) با یک عدد صحیح مثبت فراخوانی می شود. تابع به صورت بازگشتی و با یک واحد کاهش در مقدار آرگومان دوباره خود را فراخوانی می کند.</p>
            <p>این روند تا رسیدن آرگومان به عدد ۱ ادامه می یابد سپس با رسیدن به عدد ۰ مقدار ۱ برگشت داده می شود.</p>
            <p>مراحل محاسبه فاکتوریل عدد در جاوا اسکریپت:</p>
            <div class="image">
            <img src="images/img10.jpg" alt=""></div>
            <p>این فراخوانی بازگشتی را می توان در مراحل زیر توضیح داد:</p>
            <ul><li>factorial(3) مقدار ۳* factorial(3) را برمیگرداند.</li>
            <li>factorial(2) مقدار ۳*۲* factorial(1) را برمیگرداند.</li>
            <li>factorial(1) مقدار ۳*۲*۱* factorial(0) را برمیگرداند.</li>
            <li>factorial(0) مقدار ۳*۲*۱*۱ را برمیگرداند.</li></ul>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>