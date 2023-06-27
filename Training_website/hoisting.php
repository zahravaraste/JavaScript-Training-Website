<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>Hoisting</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش به کمک مثال های مختلف با Hoisting در جاوا اسکریپت (JavaScript) آشنا خواهید شد.</p>
            <p>hoisting به معنای بالا بردن است و رفتاری است که می توان یک تابع یا یک متغیر را قبل از تعریف استفاده کرد. مثال،</p>
            <div class="code">
                <p>// قبل از تعریف آنtest استفاده از متغیر  <br>
                
                console.log(test); // undefined <br>
                
                var test;</p>
            </div>
            <p>این برنامه بدون خطا کار می کند و مقدار undefined را در خروجی نمایش می دهد. مانند کد زیر عمل می کند:</p>
            <div class="code">
                <p>var test; <br>
                
                // بعد از تعریف آن test استفاده از متغیر <br>
                
                console.log(test); // undefined</p>
            </div>
            <p>چون متغیر test فقط تعریف شده و مقداردهی نشده، مقدار آن برابر با undefined می شود.</p>
            <p>اگر می خواهید درباره متغیرها بیشتر بدانید به آموزش متغیرها در جاوا اسکریپت مراجعه کنید.</p>
            <p><b>نکته:</b> در Hoisting به نظر می رسد تعریف به سمت بالا در برنامه حرکت می کند اما آنچه که اتفاق می افتد این است که تعریف توابع و متغیرها در مرحله کامپایل به حافظه اضافه می شوند. به عنوان مثال دستور </p>
            <p dir="ltr">var x = 5;</p>
            <p>در زمان کامپایل به دو قسمت بامعنای var x و x = 5 شکسته می شود، قسمت var x یعنی تعریف متغیر در هنگام کامپایل اعمال می شود ولی قسمت x=5 برای مقداردهی در هنگام اجرای کد اعمال می شود.</p>
            <h1>Hoisting متغیر</h1>
            <p>برای متغیرها و ثابت ها کلمه کلیدی var خاصیت Hoisting (بالا بردن) دارد و let و const این ویژگی را ندارند.</p>
            <div class="code">
                <p>// برنامه نمایش مقدار <br>
                
                a = 5; <br>
                
                console.log(a); <br>
                
                var a; // 5</p>
            </div>
            <p>در مثال بالا متغیر a قبل از تعریف استفاده شده و برنامه کار می کند و مقدار ۵ را در خروجی نمایش می دهد. مشابه برنامه زیر رفتار می کند:</p>
            <div class="code">
                <p>// برنامه نمایش مقدار <br>
                
                var a; <br>
                
                a = 5; <br>
                
                console.log(a); // 5</p>
            </div>
            <p>اما در جاوا اسکریپت مقداردهی اولیه بالا نمی رود (hoisting). مثال،</p>
            <div class="code">
                <p>// برنامه نمایش مقدار <br>
                
                console.log(a); <br>
                
                var a = 5;</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>var a; <br>
                
                console.log(a); <br>
                
                a = 5;</p>
            </div>
            <p>در مرحله کامپایل فقط قسمت تعریف به حافظه منتقل می شود. بنابراین مقدار متغیر a برابر با undefined است چون بدون مقداردهی اولیه چاپ می شود.</p>
            <p>علاوه بر این استفاده از متغیر در داخل تابع فقط در خود تابع بالا برده می شود و خارج از تابع وجود ندارد.</p>
            <div class="code">
            <p>var a = 4; <br>
            
            function greet() { <br>
            
            b = ‘hello’; <br>
            
            console.log(b); // hello <br>
            
            var b; <br>
            
            } <br>
            
            greet(); // hello <br>
            
            console.log(b);</p>
            </div>
            
            <p>خروجی</p>
            <div class="code">
                <p>hello <br>
                
                Uncaught ReferenceError: b is not defined</p>
            </div>
            <p>در این مثال با تعریف var b; متغیر b در تابع greet بالا برده و به یک متغیر محلی تبدیل می شود. در نتیجه متغیر b فقط در داخل تابع قابل دسترسی است و یک متغیر سراسری نیست.</p>
            <p>برای کسب اطلاعات بیشتر در مورد متغیرهای محلی و سراسری به آموزش محدوده متغیرها در جاوا اسکریپت مراجعه کنید.</p>
            <p><b>نکته:</b> از آنجا که تعریف متغیر تنها با var در عمل hoisting یا بالا بردن اعمال می شود پس در نتیجه محدوده دسترسی متغیر تابعی است.</p>
            <p>اگر متغیر با کلمه کلیدی let تعریف شود آن متغیر بالا برده نمی شود.</p>
            <div class="code">
                <p>a = 5; <br>
                
                console.log(a); <br>
                
                let a; // خطا</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>Uncaught ReferenceError: Cannot access ‘a’ before initialization</p>
            </div>
            <p>هنگام استفاده از let باید ابتدا متغیر تعریف شود.</p>
            <h1>عملکرد Hoisting</h1>
            <p>می توان قبل از تعریف یک تابع آن را فراخوانی کرد.</p>
            <div class="code">
                <p>// برنامه نمایش متن <br>
                
                greet(); <br>
                
                function greet() { <br>
                
                console.log(‘Hi, there.’); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>Hi, there.</p>
            </div>
            <p>تابع greet در این برنامه قبل از تعریف فراخوانی می شود، تابع اجرا و در خروجی متن “Hi, there.” را نمایش می دهد. این به دلیل ویژگی بالا بردن یا hoisting است.</p>
            <p>با این حال در عبارت های تابعی خطا رخ می دهد چون فقط تعریف متغیر بالا برده می شود. (مقدار متغیر در زمان اجرا مشخص می شود.)</p>
            <div class="code">
                <p>greet(); <br>
                
                var greet = function() { <br>
                
                console.log(‘Hi, there.’); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>Uncaught TypeError: greet is not a function</p>
            </div>
            <p>اگر از let در برنامه بالا استفاده شود، متن خطا به صورت زیر است:</p>
            <div class="code">
                <p>Uncaught ReferenceError: greet is not defined</p>
            </div>
            <p><b>نکته:</b> hoisting در دیگر زبان های برنامه نویسی مانندPython ، C، C ++ و Java وجود ندارد.</p>
            <p>hoisting می تواند نتایج ناخواسته ای در برنامه ایجاد کند پس بهتر است قبل از استفاده از متغیرها و توابع آنها را تعریف کنید و از بالابردن آنها خودداری کنید.</p>
            <p>در مورد متغیرها بهتر است به جای var از let استفاده کنید.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>