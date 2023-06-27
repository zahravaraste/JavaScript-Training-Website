<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>دستور switch </h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش به کمک مثال های مختلف با دستور switch در جاوا اسکریپت (JavaScript) آشنا خواهید شد. دستور switch در جاوا اسکریپت برای تصمیم گیری استفاده می شود.</p>
            <p>دستور switch یک عبارت را بررسی می کند و براساس اینکه نتیجه عبارت با کدام مقدار مطابقت دارد، بلوک کد متناظر با آن را اجرا می کند.</p>
            <h1>ساختار دستور switch</h1>
            <div class="code">
                <p>switch(متغیر یا عبارت) { <br>
                
                case value1: <br>
                
                // بلوک کد ۱ <br>
                
                break; <br>
                
                case value2: <br>
                
                // بلوک کد ۲ <br>
                
                break; <br>
                
                case valueN: <br>
                
                // N بلوک کد <br>
                
                break; <br>
                
                default: <br>
                
                // بلوک کد پیشفرض <br>
                
                }</p>
            </div>
            <p>دستور switch متغیر یا عبارت درون پرانتز را بررسی می کند:</p>
            <ul><li>اگر نتیجه عبارت برابر با value1 باشد، بلوک کد مرتبط با آن (بلوک کد ۱) اجرا می شود.</li>
            <li>اگر نتیجه عبارت برابر با مقدار value2 باشد، بلوک کد مرتبط با آن (بلوک کد ۲) اجرا می شود.</li>
            <li>این روند برای همه موارد ادامه پیدا می کند. اگر هیچکدام از موارد مطابقت نداشته باشند، بلوک کد مرتبط با قسمت default (پیشفرض) اجرا می شود.</li></ul>
            <h1>نکته</h1>
            <ul><li>دستور break اختیاری است. با اجرای دستور break دستور switch به پایان می رسد.</li>
            <li>اگر از دستور break استفاده نشود، موارد بعدی نیز اجرا می شوند.</li>
            <li>قسمت پیشفرض نیز اختیاری است. می توانید آن را در شروع یا وسط بلوک دستور switch نیز به کار ببرید.</li></ul>
            <h1>فلوچارت دستور switch</h1>
            <div class="image">
            <img src="images/img10.jpg" alt=""></div>
            <p>مثال ۱: برنامه ساده با دستور switch</p>
            <div class="code">
                <p>let a = 2; <br>
                
                switch (a) { <br>
                
                case 1: <br>
                
                a = ‘one’; <br>
                
                break; <br>
                
                case 2: <br>
                
                a = ‘two’; <br>
                
                break; <br>
                
                default: <br>
                
                a = ‘not found’; <br>
                
                break; <br>
                
                } <br>
                
                console.log(`The value is ${a}`);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>The value is two.</p>
            </div>
            <p>این برنامه متغیر a را با دستور switch بررسی می کند:</p>
            <ul><li>نتیجه عبارت با مقدار ۱ مقایسه می شود که false برمی گرداند.</li>
            <li>سپس دستور switch به مورد دوم می رود. نتیجه عبارت با مقدار ۲ مطابقت دارد بنابراین کد آن اجرا و متن ” The value is two” نشان داده می شود.</li>
            <li>دستور break بلوک فعلی و کل دستور switch را تمام می کند و جریان کنترل برنامه را به خارج از دستور switch منتقل می کند.</li></ul>
            <p>مثال ۲: بررسی نوع داده با دستور switch</p>
            <div class="code">
                <p>// switch برنامه با دستور <br>
                
                let a = 1; <br>
                
                switch (a) { <br>
                
                case “1”: <br>
                
                a = 1; <br>
                
                break; <br>
                
                case 1: <br>
                
                a = ‘one’; <br>
                
                break; <br>
                
                case 2: <br>
                
                a = ‘two’; <br>
                
                break; <br>
                
                default: <br>
                
                a = ‘not found’; <br>
                
                break; <br>
                
                } <br>
                
                console.log(`The value is ${a}`);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>The value is one.</p>
            </div>
            <p>این برنامه متغیر a را با دستور switch بررسی می کند:</p>
            <ul><li>در جاوا اسکریپت، دستور switch مقدار را دقیقاً بررسی می کند. بنابراین نتیجه عبارت با مقدار “۱” مطابقت ندارد.</li>
            <li>دستور switch به مورد بعدی می رود. نتیجه عبارت با مقدار عددی ۱ مطابقت دارد بنابراین رشته The value is one نمایش داده می شود.</li>
            <li>دستور break بلوک فعلی و کل دستور switch را تمام می کند و جریان کنترل برنامه را به خارج از دستور switch منتقل می کند.</li></ul>
            <p><b>نکته:</b> در جاوا اسکریپت، دستور switch نتیجه عبارت را با مقدار هر مورد دقیقاً بررسی می کند یعنی علاوه بر مقدار باید نوع داده هم یکسان باشد. در این مثال، مقدار ۱ با “۱” مطابقت ندارد.</p>
            <p>می خواهیم با دستور switch یک برنامه ماشین حساب ساده بنویسیم.</p>
            <p>مثال ۳: ماشین حساب ساده</p>
            <div class="code">
                <p>// برنامه ماشین حساب ساده <br>
                
                let result; <br>
                
                // گرفتن نوع عملگر از کاربر <br>
                
                let operator = prompt(‘Enter operator ( either +, -, * or / ): ‘); <br>
                
                // گرفتن عملوندها از کاربر <br>
                
                let number1 = parseFloat(prompt(‘Enter first number: ‘)); <br>
                
                let number2 = parseFloat(prompt(‘Enter second number: ‘)); <br>
                
                switch(operator) { <br>
                
                case ‘+’: <br>
                
                result = number1 + number2; <br>
                
                console.log(`${number1} + ${number2} = ${result}`); <br>
                
                break; <br>
                
                case ‘-‘: <br>
                
                result = number1 – number2; <br>
                
                console.log(`${number1} – ${number2} = ${result}`); <br>
                
                break; <br>
                
                case ‘*’: <br>
                
                result = number1 * number2; <br>
                
                console.log(`${number1} * ${number2} = ${result}`); <br>
                
                break; <br>
                
                case ‘/’: <br>
                
                result = number1 / number2; <br>
                
                console.log(`${number1} / ${number2} = ${result}`); <br>
                
                break; <br>
                
                default: <br>
                
                console.log(‘Invalid operator’); <br>
                
                break; <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>Enter operator: + <br>
                
                Enter first number: 4 <br>
                
                Enter second number: 5 <br>
                
                ۴ + ۵ = ۹</p>
            </div>
            <p>در این برنامه از کاربر خواسته می شود که نوع عملگر (+، -،* یا /) و دو عملوند را وارد کند. سپس بر اساس ورودی ها یکی از موارد دستور switch اجرا می شود.</p>
            <h1>دستور switch با چند مورد</h1>
            <p>اگر در دستور switch چند مورد دارای بلوک کد مشابه باشند می توانید آنها را گروه بندی کنید.</p>
            <p>مثال ۴: switch با چند مورد</p>
            <div class="code">
                <p>// برنامه برای گروه بندی چند مورد <br>
                
                let fruit = ‘apple’; <br>
                
                switch(fruit) { <br>
                
                case ‘apple’: <br>
                
                case ‘mango’: <br>
                
                case ‘pineapple’: <br>
                
                console.log(`${fruit} is a fruit.`); <br>
                
                break; <br>
                
                default: <br>
                
                console.log(`${fruit} is not a fruit.`); <br>
                
                break; <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>apple is a fruit.</p>
            </div>
            <p>در این برنامه سه مورد با یکدیگر گروه بندی می شوند. کدهای موارد گروه بندی شده مشابه هستند. اگر مقدار متغیر fruit برابر با یکی از مقادیر mango، pineapple یا apple باشد، خروجی یکسان است.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>