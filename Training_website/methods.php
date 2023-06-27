<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>متدها و this</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش به کمک مثال های مختلف با متدهای شی و کلمه کلیدی this در جاوا اسکریپت (JavaScript) آشنا خواهید شد.</p>
            <p>می توان برای اشیا در جاوا اسکریپت تابع تعریف کرد.</p>
            <div class="code">
                <p>// متد برای شی <br>
                
                let person = { <br>
                
                name: ‘John’, <br>
                
                greet: function() { console.log(‘hello’); } <br>
                
                };</p>
            </div>
            <p>در اینجا شی person دارای دو ویژگی با کلیدهای name و greet با مقدار رشته ای و مقدار تابع است.</p>
            <p>به طور کلی متد در جاوا اسکریپت یک ویژگی از شی است که مقدار آن یک تابع است.</p>
            <h1>دسترسی به متدهای شی</h1>
            <p>با استفاده از علامت گذاری نقطه می توانید به متد شی دسترسی پیدا کنید. ساختار:</p>
            <div class="code">
                <p>objectName.methodKey()</p>
            </div>
            <p>با فراخوانی نام شی و کلید مرتبط با متد همراه با () می توانید به آن متد دسترسی پیدا کنید در حالیکه برای دسترسی به دیگر ویژگی های شی فقط نام شی را همراه با کلید به کار می برید.</p>
            <div class="code">
                <p>// دسترسی به متد و ویژگی شی <br>
                
                let person = { <br>
                
                name: ‘John’, <br>
                
                greet: function() { console.log(‘hello’); } <br>
                
                }; <br>
                
                // دسترسی به ویژگی <br>
                
                person.name; // John <br>
                
                // دسترسی به متد <br>
                
                person.greet(); // hello</p>
            </div>
            <p>برای دسترسی به متد greet به جای person.greet از ()person.greet استفاده می شود.</p>
            <p>اگر person.greet به کار ببرید تعریف تابع را به شما می دهد.</p>
            <div class="code">
                <p>person.greet; // function() { console.log(‘hello’); }</p>
            </div>
            <h1>متدهای داخلی در جاوا اسکریپت</h1>
            <p>جاوا اسکریپت متدهای داخلی زیادی دارد. مثال،</p>
            <div class="code">
                <p>let number = ‘23.32’; <br>
                
                let result = parseInt(number); <br>
                
                console.log(result); // 23</p>
            </div>
            <p>متد ()parseInt یکی از متدهای شی Number است که اینجا متغیر number را به عنوان آرگومان دریافت کرده و رشته عددی را به عدد صحیح تبدیل می کند.</p>
            <p>شیء Number امکان کار با اعداد را فراهم می کند و دارای متدهای مختلفی مانند متد()parseInt است.</p>
            <h1>اضافه کردن یک متد به یک شی در جاوا اسکریپت</h1>
            <p>می توانید متدها و ویژگی های شی را بعد از تعریف آن اضافه کنید. مثال،</p>
            <div class="code">
                <p>// ساخت شی <br>
                
                let student = { }; <br>
                
                // اضافه کردن ویژگی <br>
                
                student.name = ‘John’; <br>
                
                // اضافه کردن متد <br>
                
                student.greet = function() { <br>
                
                console.log(‘hello’); <br>
                
                } <br>
                
                // دسترسی به متد <br>
                
                student.greet(); // hello</p>
            </div>
            <p>در مثال بالا، ابتدا شی خالی student ساخته شده و سپس ویژگی name به آن اضافه می شود. به همین ترتیب متد greet نیز به شی اضافه شده است.</p>
            <h1>کلمه کلیدی this در جاوا اسکریپت</h1>
            <p>برای دسترسی به ویژگی های شی در متدهای همان شی باید از کلمه کلیدی this استفاده کنید. مثال زیر را در نظر بگیرید:</p>
            <div class="code">
                <p>let person = { <br>
                
                name: ‘John’, <br>
                
                age: 30, <br>
                
                // this.name با استفاده از name دسترسی به ویژگی <br>
                
                greet: function() { console.log(‘The name is’ + ‘ ‘ + this.name); } <br>
                
                }; <br>
                
                person.greet();</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>The name is John</p>
            </div>
            <p>در این مثال شی person دارای ویژگی های name و age و متد greet است.</p>
            <p>برای دسترسی به ویژگی name از شی در متد greet از کلمه کلیدی this استفاده شده است. کلمه کلیدی this همراه با نقطه (.) و کلید ویژگی آورده می شود.</p>
            <p><b>نکته:</b> در جاوا اسکریپت زمانیکه کلمه کلیدی this با متد شی استفاده شود به شی اشاره می کند. this به شی محدود می شود.</p>
            <p>تابع داخل شی نیز می تواند متغیرهای خودش را داشته باشد مانند هر تابع طبیعی. در مثال زیر متغیر surname، متغیر تابع greet در شی است.</p>
            <div class="code">
                <p>let person = { <br>
                
                name: ‘John’, <br>
                
                age: 30, <br>
                
                greet: function() { <br>
                
                let surname = ‘Doe’; <br>
                
                console.log(‘The name is’ + ‘ ‘ + this.name + ‘ ‘ + surname); } <br>
                
                }; <br>
                
                person.greet();</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>The name is John Doe</p>
            </div>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>