<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>دستور continue</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش به کمک مثال های مختلف با دستور continue در جاوا اسکریپت (JavaScript) آشنا خواهید شد.</p>
            <p>از دستور continue برای توقف و پرش از تکرار فعلی حلقه استفاده می شود و جریان کنترل برنامه به تکرار بعدی می رود.</p>
            <p>ساختار دستور continue:</p>
            <div class="code">
                <p>continue [label];</p>
            </div>
            <p><b>نکته:</b> قسمت label (یا برچسب) اختیاری است و خیلی کم استفاده می شود.</p>
            <h1>کار با دستور continue در جاوا اسکریپت</h1>
            <h1>دستور continue همراه با حلقه for</h1>
            <p>دستور continue در حلقه for تکرار فعلی را متوقف می کند سپس جریان کنترل برنامه را به قسمت عبارت به روزرسانی حلقه می برد.</p>
            <p>مثال ۱: چاپ مقدار متغیر i</p>
            <div class="code">
                <p>// iبرنامه چاپ مقدار متغیر  <br>
                
                for (let i = 1; i <= 5; i++) { <br>
                
                // continue شرط دستور <br>
                
                if (i == 3) { <br>
                
                continue; <br>
                
                } <br>
                
                console.log(i); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>۱ <br>
                
                ۲ <br>
                
                ۴ <br>
                
                ۵</p>
            </div>
            <p>در این برنامه فوق از حلقه for برای چاپ مقدار متغیر i در هر تکرار استفاده شده است.</p>
            <p>به دستور continue در داخل حلقه توجه کنید.</p>
            <div class="code">
                <p>if(i == 3) { <br>
                
                continue; <br>
                
                }</p>
            </div>
            <p>این یعنی،</p>
            <ul><li>وقتی i برابر با ۳ است با اجرای دستور continue، تکرار سوم حلقه متوقف و متغیر i به روزرسانی می شود.</li>
            <li>در ادامه عبارت شرطی حلقه بررسی می شود، چون متغیر i برابر با ۴ و شرط برقرار است پس وارد حلقه می شود. در داخل حلقه دوباره شرط برای دستور continue ارزیابی می شود.</li>
            <li>در نهایت دو مقدار ۴ و ۵ در دو تکرار بعدی چاپ می شوند.</li></ul>
            <p><b>نکته:</b> در بیشتر مواقع دستور continue در دستورات تصمیم گیری استفاده می شود. برای کسب اطلاعات بیشتر به آموزش دستور if در جاوا اسکریپت مراجعه کنید.</p>
            <p>برای کسب اطلاعات بیشتر درباره حلقه for به آموزش حلقه for در جاوا اسکریپت مراجعه کنید.</p>
            <p><b>نکته:</b> دستور break حلقه را خاتمه می دهد و کاملا از حلقه خارج می شود. در حالیکه دستور continue فقط تکرار فعلی حلقه را نادیده می گیرد.</p>
            <h1>دستور continue همراه با حلقه while</h1>
            <p>دستور continue در حلقه while تکرار فعلی را رد می کند و جریان کنترل برنامه را به قسمت عبارت شرطی حلقه while برمی گرداند.</p>
            <p>دستور continue برای حلقه های while و do…while به طور مشابه کار می کند.</p>
            <p>مثال ۲: محاسبه مجموع اعداد مثبت</p>
            <div class="code">
                <p>// برنامه محاسبه و نمایش مجموع اعداد مثبت <br>
                
                // اگر کاربر عدد منفی وارد کند، عدد در مجموع وارد نمی شود <br>
                
                // عدد منفی -> پایان حلقه <br>
                
                // کاراکتر غیرعددی -> رد شدن از تکرار فعلی <br>
                
                let sum = 0; <br>
                
                let number = 0; <br>
                
                while (number >= 0) { <br>
                
                // عدد مثبت وارد شده را به مجموع قبلی اضافه می کند <br>
                
                sum += number; <br>
                
                // دوباره عدد ورودی از کاربر گرفته می شود <br>
                
                number = parseInt(prompt(‘Enter a number: ‘)); <br>
                
                // continueشرط دستور <br>
                
                if (isNaN(number)) { <br>
                
                console.log(‘You entered a string.’); <br>
                
                number = 0; // صفر می شود number مقدار متغیر <br>
                
                continue; <br>
                
                } <br>
                
                } <br>
                
                // نمایش مجموع اعداد مثبت <br>
                
                console.log(`The sum is ${sum}.`);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>Enter a number: 1 <br>
                
                Enter a number: 2 <br>
                
                Enter a number: hello <br>
                
                You entered a string. <br>
                
                Enter a number: 5 <br>
                
                Enter a number: -2 <br>
                
                The sum is 8.</p>
            </div>
            <p>در این برنامه، کاربر مقادیر مختلفی وارد می کند اما از حلقه while فقط برای محاسبه مجموع اعداد مثبت ورودی استفاده می شود. در نهایت مجموع محاسبه شده چاپ می شود.</p>
            <p>به کاربرد دستور continue توجه کنید:</p>
            <div class="code">
                <p>if (isNaN(number)) { <br>
                
                continue; <br>
                
                }</p>
            </div>
            <ul><li>وقتی کاربر یک رشته غیر عددی وارد می کند، دستور continue تکرار فعلی را رد می کند سپس جریان کنترل برنامه به قسمت عبارت شرطی حلقه while می رود.</li>
            <li>شرط حلقه بررسی می شود. اگر کاربر عدد کوچکتر از ۰ (عدد منفی) وارد کند، حلقه تمام می شود.</li></ul>
            <p>در این برنامه عبارت ()isNaN برای بررسی مقدار ورودی استفاده می شود اینکه آیا مقدار ورودی عدد است یا نه (رشته غیرعددی).</p>
            <p>برای کسب اطلاعات بیشتر درباره حلقه while به آموزش حلقه while در جاوا اسکریپت مراجعه کنید.</p>
            <h1>دستور continue همراه با حلقه های تودرتو</h1>
            <p>وقتی continue در داخل دو حلقه تودرتو استفاده شود، تکرار فعلی حلقه داخلی را متوقف و رد می کند. مثال،</p>
            <div class="code">
                <p>// تودرتوforحلقه های <br>
                
                // حلقه اول <br>
                
                for (let i = 1; i <= 3; i++) { <br>
                
                // حلقه دوم <br>
                
                for (let j = 1; j <= 3; j++) { <br>
                
                if (j == 2) { <br>
                
                continue; <br>
                
                } <br>
                
                console.log(`i = ${i}, j = ${j}`); <br>
                
                } <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>i = 1, j = 1 <br>
                
                i = 1, j = 3 <br>
                
                i = 2, j = 1 <br>
                
                i = 2, j = 3 <br>
                
                i = 3, j = 1 <br>
                
                i = 3, j = 3</p>
            </div>
            <p>در این برنامه وقتی دستور continue اجرا می شود، تکرار فعلی را در حلقه داخلی رد می کند و جریان کنترل برنامه به قسمت عبارت به روزرسانی حلقه for داخلی می رود.</p>
            <p>به همین دلیل مقدار j = 2 هرگز در خروجی نمایش داده نمی شود.</p>
            <h1>دستور continue با label در جاوا اسکریپت</h1>
            <p>هنگام استفاده از حلقه های تودرتو می توانید از تکرار فعلی صرف نظر کرده و جریان کنترل برنامه را به یک label (برچسب) منتقل کنید.</p>
            <div class="code">
                <p>// تودرتوforحلقه های <br>
                
                // حلقه اول <br>
                
                for (let i = 1; i <= 3; i++) { <br>
                
                // حلقه دوم <br>
                
                innerloop: <br>
                
                for (let j = 1; j <= 3; j++) { <br>
                
                if (j == 2) { <br>
                
                continue innerloop; <br>
                
                } <br>
                
                console.log(`i = ${i}, j = ${j}`); <br>
                
                } <br>
                
                }</p>
            </div>
            <p>خروجی این مثال مشابه مثال بالا است. :innerloop یک دستور label است که برای حلقه داخلی یک برچسب تعریف می کند. با دستور ;continue innerloop اجرای تکرار فعلی حلقه شکسته می شود و به برچسب با نام innerloop پرش می کند.</p>
            <p>دستور continue با label خیلی کم در جاوا اسکریپت استفاده می شود چون خوانایی و فهم کد را سخت می کند.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>