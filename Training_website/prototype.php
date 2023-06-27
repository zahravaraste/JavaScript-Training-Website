<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>Prototype</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش به کمک مثال های مختلف با مفهوم Prototype در جاوا اسکریپت (JavaScript) آشنا خواهید شد.</p>
            <p>قبل از یادگیری Prototype (پروتوتایپ یا نمونه اولیه) حتما آموزش های زیر را مرور کنید:</p>
            <ul><li>اشیا در جاوا اسکریپت</li>
            <li>تابع سازنده در جاوا اسکریپت</li></ul>
            <p>با استفاده از تابع سازنده می توانید یک شی در جاوا اسکریپت بسازید. مثال،</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘John’, <br>
                
                this.age = 23 <br>
                
                } <br>
                
                // ساخت شی <br>
                
                let person1 = new Person(); <br>
                
                let person2 = new Person();</p>
            </div>
            <p>در این مثال function Person() یک تابع سازنده شی است و از آن دو شی person1 و person2 ساخته شده است.</p>
            <h1>Prototype جاوا اسکریپت</h1>
            <p>در جاوا اسکریپت به طور پیشفرض هر شی و تابع سازنده یک ویژگی به نام prototype یا نمونه اولیه دارد.</p>
            <div class="code">
                <p>function Person () { <br>
                
                this.name = ‘John’, <br>
                
                this.age = 23 <br>
                
                } <br>
                
                let person = new Person(); <br>
                
                console.log(Person.prototype); // { … }</p>
            </div>
            <p>در مثال بالا سعی کردیم تا به نمونه اولیه تابع سازنده Person دسترسی پیدا کنیم اما به دلیل اینکه هنوز مقداری نگرفته است پس یک شی خالی را نشان می دهد { … }.</p>
            <h1>ارث بری Prototype</h1>
            <p>می توان از نمونه اولیه برای اضافه کردن ویژگی ها و متدها به تابع سازنده استفاده کرد. هر شی نیز ویژگی ها و متدهای نمونه اولیه را به ارث می برد. مثال،</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘John’, <br>
                
                this.age = 23 <br>
                
                } <br>
                
                // ساخت شی <br>
                
                let person1 = new Person(); <br>
                
                let person2 = new Person(); <br>
                
                // اضافه کردن ویژگی به تابع سازنده <br>
                
                Person.prototype.gender = ‘male’; <br>
                
                // Person مقدار نمونه اولیه <br>
                
                console.log(Person.prototype); <br>
                
                // ارث بری ویژگی از نمونه اولیه <br>
                
                console.log(person1.gender); <br>
                
                console.log(person2.gender);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>{ gender: “male” } <br>
                
                male <br>
                
                male</p>
            </div>
            <p>در برنامه بالا توسط نمونه اولیه و با استفاده از دستور</p>
            <p dir="ltr">Person.prototype.gender = ‘male’;</p>
            <p>ویژگی جدید gender به تایع سازنده Person اضافه شده است.</p>
            <p>بنابراین اشیای person1 و person2 نیز ویژگی gender را از نمونه اولیه تابع سازنده Person به ارث می برند، در نتیجه هر دو شی می توانند به ویژگی gender دسترسی داشته باشند.</p>
            <p><b>نکته: </b>ساختار اضافه کردن یک ویژگی جدید به تابع سازنده شی توسط نمونه اولیه به صورت زیر است:</p>
            <div class="code">
                <p>objectConstructorName.prototype.key = ‘value’;</p>
            </div>
            <p>در سمت چپ تساوی ابتدا نام تابع سازنده سپس کلمه prototype و در نهایت نام کلید ویژگی مورد نظر نوشته می شود. در سمت راست میز مقدار ویژگی قرار می گیرد.</p>
            <p>از prototype یا نمونه اولیه برای ارائه ویژگی جدید به تمام اشیای ساخته شده از تابع سازنده استفاده می شود.</p>
            <h1>اضافه کردن متد به تابع سازنده با استفاده از Prototype</h1>
            <p>علاوه بر ویژگی ها می توانید متدهای جدید را نیز با استفاده از نمونه اولیه به تابع سازنده اضافه کنید. مثال،</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘John’, <br>
                
                this.age = 23 <br>
                
                } <br>
                
                // ساخت شی <br>
                
                let person1 = new Person(); <br>
                
                let person2 = new Person(); <br>
                
                // اضافه کردن متد به تابع سازنده <br>
                
                Person.prototype.greet = function() { <br>
                
                console.log(‘hello’ + ‘ ‘ + this.name); <br>
                
                } <br>
                
                person1.greet(); // hello John <br>
                
                person2.greet(); // hello John</p>
            </div>
            <p>در این برنامه، متد جدید greet با استفاده از نمونه اولیه به تابع سازنده Person اضافه شده است.</p>
            <h1>تغییر Prototype</h1>
            <p>اگر مقدار ویژگی در نمونه اولیه تغییر کند، مقدار ویژگی اشیای جدید نیز تغییر خواهد کرد اما اشیای ساخته شده قبلی همان مقدار قبلی را خواهند داشت. مثال،</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person() { <br>
                
                this.name = ‘John’ <br>
                
                } <br>
                
                // اضاف کردن ویژگی <br>
                
                Person.prototype.age = 20; <br>
                
                // ساخت شی <br>
                
                let person1 = new Person(); <br>
                
                console.log(person1.age); // 20 <br>
                
                // تغییر مقدار ویژگی نمونه اولیه <br>
                
                Person.prototype = { age: 50 } <br>
                
                // ساخت شی جدید <br>
                
                let person3 = new Person(); <br>
                
                console.log(person3.age); // 50 <br>
                
                console.log(person1.age); // 20</p>
            </div>
            <p><b>نکته:</b> نباید نمونه های اولیه ی اشیای داخلی جاوا اسکریپت مانند رشته ها، آرایه ها و … را تغییر دهید.</p>
            <h1>زنجیره Prototype در جاوا اسکریپت</h1>
            <p>اگر یک شی سعی کند به یک ویژگی مشابه در تابع سازنده و نمونه اولیه دسترسی پیدا کند، مقدار ویژگی از تابع سازنده گرفته میشود. مثال،</p>
            <div class="code">
                <p>function Person() { <br>
                
                this.name = ‘John’ <br>
                
                } <br>
                
                // اضافه کردن ویژگی <br>
                
                Person.prototype.name = ‘Peter’; <br>
                
                Person.prototype.age = 23 <br>
                
                let person1 = new Person(); <br>
                
                console.log(person1.name); // John <br>
                
                console.log(person1.age); // 23</p>
            </div>
            <p>در برنامه بالا ویژگی name هم در تابع سازنده و هم در نمونه اولیه تابع سازنده تعریف شده است.</p>
            <p>در زمان اجرای برنامه person1.name ابتدا تابع سازنده را پیدا کردن ویژگی name جستجو می کند و چون تابع سازنده حاوی این ویژگی با مقدار ‘John’ است در نتیجه شی این ویژگی را از تابع سازنده می گیرد.</p>
            <p>در مورد person1.age نیز ابتدا تابع سازنده برای ویژگی age بررسی می شود و چون این ویژگی در تابع سازنده وجود ندارد پس وارد نمونه اولیه می شود. در نهایت شی این ویژگی را از نمونه اولیه به ارث می برد (البته در صورت وجود ویژگی).</p>
            <p><b>نکته: </b>می توانید از طریق شی به نمونه اولیه تابع سازنده دسترسی پیدا کنید.</p>
            <div class="code">
                <p>function Person () { <br>
                
                this.name = ‘John’, <br>
                
                } <br>
                
                // اضافه کردن ویژگی <br>
                
                Person.prototype.age = 24; <br>
                
                // ساخت شی <br>
                
                let person = new Person(); <br>
                
                // دسترسی به نمونه اولیه <br>
                
                console.log(person.__proto__); // { age: 24 }</p>
            </div>
            <p>در این مثال با استفاده از __proto__ از طریق شی person به نمونه اولیه prototype دسترسی پیدا شده است. با این حال __proto__ منسوخ شده و باید از استفاده آن خودداری کنید.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>