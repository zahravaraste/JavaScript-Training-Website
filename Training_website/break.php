<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>دستور break </h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با استفاده از مثال های مختلف روش استفاده از دستور break در جاوا اسکریپت (JavaScript) را یاد خواهید گرفت. اجرای دستور break درحلقه بلافاصه آن را متوقف می کند. با توقف حلقه، کنترل جریان برنامه به دستورات بعد از حلقه می رود.</p>
            <p>توقف حلقه به معنای شکست حلقه نیز می باشد.</p>
            <p>ساختار دستور break:</p>
            <div class="code">
                <p>break [label];</p>
            </div>
            <p><b>نکته:</b> label یا برچسب اختیاری است و خیلی کم استفاده می شود.</p>
            <h1>کار با دستور break در جاوا اسکریپت</h1>
            <p>مثال ۱: دستور break با حلقه for</p>
            <div class="code">
                <p>// i برنامه برای چاپ مقدار متغیر  <br>
                
                for (let i = 1; i <= 5; i++) { <br>
                
                // break شرط <br>
                
                if (i == 3) { <br>
                
                break; <br>
                
                } <br>
                
                console.log(i); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>۱ <br>
                
                ۲</p>
            </div>
            <p>در این برنامه از حلقه for برای چاپ مقدار متغیر i استفاده می شود. دستور break به صورت زیر استفاده می شود:</p>
            <div class="code">
                <p>if(i == 3) { <br>
                
                break; <br>
                
                }</p>
            </div>
            <p>یعنی اینکه وقتی متغیر i برابر با ۳ شد، دستور break اجرای حلقه را تمام می کند. بنابراین مقادیر بزرگتر یا مساوی ۳ در خروجی چاپ نمی شود.</p>
            <p><b>نکته:</b> در بیشتر مواقع از دستور break همراه با دستورات تصمیم گیری استفاده می شود. برای کسب اطلاعات بیشتر به قسمت آموزش دستور if در جاوا اسکریپت مراجعه کنید.</p>
            <p>برای آشنایی بیشتر با حلقه for به آموزش حلقه for در جاوا اسکریپت مراجعه کنید.</p>
            <p>مثال ۲: دستور break با حلقه while</p>
            <div class="code">
                <p>// برنامه محاسبه و نمایش مجموع اعداد مثبت <br>
                
                // اگر کاربر عدد منفی وارد کند، حلقه پایان می یابد <br>
                
                // عدد منفی وارد شده به مقدار مجموع اضافه نمی شود <br>
                
                let sum = 0; <br>
                
                while(true) { <br>
                
                // عدد ورودی از کاربر گرفته می شود <br>
                
                number = parseInt(prompt(‘Enter a number: ‘)); <br>
                
                // break شرط دستور <br>
                
                if(number < 0) { <br>
                
                break; <br>
                
                } <br>
                
                // مجموع همه اعداد مثبت ورودی <br>
                
                sum += number; <br>
                
                } <br>
                
                // نمایش مجموع اعداد مثبت <br>
                
                console.log(`The sum is ${sum}.`);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>Enter a number: 1 <br>
                
                Enter a number: 2 <br>
                
                Enter a number: 3 <br>
                
                Enter a number: -5 <br>
                
                The sum is 6.</p>
            </div>
            <p>در این برنامه از کاربر خواسته می شود که مقدار عددی وارد کند. حلقه while برای محاسبه مجموع اعداد مثبت وارد شده توسط کاربر استفاده می شود.</p>
            <p>در اینجا دستور break به صورت زیر نوشته شده است:</p>
            <div class="code">
                <p>if(number < 0) { <br>
                
                break; <br>
                
                }</p>
            </div>
            <p>وقتی کاربر یک عدد منفی وارد کند (در اینجا ۵-)، دستور break حلقه را متوقف و کنترل جریان برنامه را به خارج از حلقه منقل می کند.</p>
            <p>حلقه while تکرار می شود تا اینکه کاربر عدد منفی وارد کند.</p>
            <p>برای حلقه while می توانید به قسمت آموزش حلقه while در جاوا اسکریپت مراجعه کنید.</p>
            <p>مثال ۳: دستور break با حلقه های تودرتو</p>
            <p>هنگامی که دستور break در داخل دو حلقه تودرتو استفاده شود، break حلقه داخلی را خاتمه می دهد. مثال،</p>
            <div class="code">
                <p>// برای حلقه های تودرتوbreak <br>
                
                // حلقه اول <br>
                
                for (let i = 1; i <= 3; i++) { <br>
                
                // حلقه دوم <br>
                
                for (let j = 1; j <= 3; j++) { <br>
                
                if (i == 2) { <br>
                
                break; <br>
                
                } <br>
                
                console.log(`i = ${i}, j = ${j}`); <br>
                
                } <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>i = 1, j = 1 <br>
                
                i = 1, j = 2 <br>
                
                i = 1, j = 3 <br>
                
                i = 3, j = 1 <br>
                
                i = 3, j = 2 <br>
                
                i = 3, j = 3</p>
            </div>
            <p>در این برنامه وقتی i == 2 شود، دستور break اجرا و از حلقه for داخلی خارج می شود سپس برنامه به ادامه کدهای بعدی حلقه for خارجی می رود.</p>
            <p>بنابراین مقدار i = 2 هرگز در خروجی نمایش داده نمی شود.</p>
            <p>مثال ۴: دستور break با label در جاوا اسکریپت</p>
            <p>با دستور label می توانید قسمت های مختلف برنامه را برچسب گذاری کنید و با استفاده از دستور break به این قسمت ها پرش کنید.</p>
            <div class="code">
                <p>labelname: <br>
                
                break labelname;</p>
            </div>
            <p>مثال،</p>
            <div class="code">
                <p>// برای حلقه های تودرتوbreak <br>
                
                // حلقه اول <br>
                
                for (let i = 1; i <= 3; i++) { <br>
                
                // حلقه دوم <br>
                
                innerloop: <br>
                
                for (let j = 1; j <= 3; j++) { <br>
                
                if (i == 2) { <br>
                
                break innerloop; <br>
                
                } <br>
                
                console.log(`i = ${i}, j = ${j}`); <br>
                
                } <br>
                
                }</p>
            </div>
            <p>خروجی این مثال مشابه مثال بالا است. :innerloop یک دستور label است که برای حلقه داخلی یک برچسب تعریف می کند. با دستور ;break innerloop حلقه شکسته می شود و به برچسب با نام innerloop پرش می کند.</p>
            <p>هنگام استفاده از حلقه های تودرتو می توانید حلقه بیرونی را نیز با استفاده از دستور label پایان دهید.</p>
            <div class="code">
                <p>outerLoop: <br>

                for (var i = 1; i <= 3; i++) { <br>

                for (var j = 1; j <= 3; j++) { <br>

                if (i === 2){ <br>

                break outerLoop; <br>

                } <br>

                console.log(`i = ${i}, j = ${j}`); <br>

                } <br>

                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>
                i = 1, j = 1 <br>
                
                i = 1, j = 2 <br>
                
                i = 1, j = 3</p>
            </div>
            <p>در این مثال دستور ;break outerLoop به برچسب outerLoop پرش می کند و علاوه بر حلقه داخلی، حلقه بیرونی را نیز متوقف می کند.</p>
            <p>از break همراه با label بسیار کم در جاوا اسکریپت استفاده می شود چون خوانایی و درک کد را سخت می کند.</p>
            <p>از دستور break با دستور switch نیز استفاده می شود.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>