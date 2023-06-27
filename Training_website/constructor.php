<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>سازنده</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با تابع سازنده یا Constructor در جاوا اسکریپت (JavaScript) به کمک مثال های مختلف آشنا خواهید شد.</p>
            <p>از تابع سازنده برای ساخت شی استفاده می شود. مثال،</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘John’, <br>
                
                this.age = 23 <br>
                
                } <br>
                
                // ساخت شی <br>
                
                let person = new Person();</p>
            </div>
            <p>در این مثال function Person() یک تابع سازنده شی است.</p>
            <p>برای ساخت یک شی از تابع سازنده از کلمه کلیدی new استفاده می شود.</p>
            <p><b>نکته:</b> بهتر است که حرف اول تابع سازنده را با حروف بزرگ بنویسید.</p>
            <h1>ساخت چند شی با تابع سازنده</h1>
            <p>در جاوا اسکریپت می توانید چند شی از یک تابع سازنده بسازید. مثال،</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘John’, <br>
                
                this.age = 23, <br>
                
                this.greet = function () { <br>
                
                console.log(‘hello’); <br>
                
                } <br>
                
                } <br>
                
                // ساخت چند شی <br>
                
                let person1 = new Person(); <br>
                
                let person2 = new Person(); <br>
                
                // دسترسی به ویژگی ها <br>
                
                console.log(person1.name); // John <br>
                
                console.log(person2.name); // John</p>
            </div>
            <p>در این برنامه دو شی person1 و person2 با استفاده از تابع سازنده Person ساخته شده اند.</p>
            <h1>کلمه کلیدی this در جاوا اسکریپت</h1>
            <p>کلمه کلیدی this در تابع سازنده به شی در حال ساخت اشاره می کند.</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘John’; <br>
                
                } <br>
                
                // ساخت شی <br>
                
                let person1 = new Person(); <br>
                
                // دسترسی به ویژگی ها <br>
                
                console.log(person1.name); // John</p>
            </div>
            <p>بنابراین می توان به طور مستقیم با person1.name به ویژگی شی دسترسی پیدا کرد.</p>
            <h1>پارامترهای تابع سازنده در جاوا اسکریپت</h1>
            <p>تابع سازنده می تواند پارامترهای ورودی داشته باشد. مثال،</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person (person_name, person_age, person_gender) { <br>
                
                // تخصیص مقدار پارامترها با فراخوانی شی <br>
                
                this.name = person_name, <br>
                
                this.age = person_age, <br>
                
                this.gender = person_gender, <br>
                
                this.greet = function () { <br>
                
                return (‘Hi’ + ‘ ‘ + this.name); <br>
                
                } <br>
                
                } <br>
                
                // ساخت شی <br>
                
                let person1 = new Person(‘John’, 23, ‘male’); <br>
                
                let person2 = new Person(‘Sam’, 25, ‘female’); <br>
                
                // دسترسی به ویژگی ها <br>
                
                console.log(person1.name); // “John” <br>
                
                console.log(person2.name); // “Sam” <br>
                
                در این مثال در هنگام ساخت شی چند آرگومان به تابع سازنده ارسال می شود: <br>
                
                let person1 = new Person(‘John’, 23, ‘male’); <br>
                
                let person2 = new Person(‘Sam’, 25, ‘male’);</p>
            </div>
            <p>این باعث می شود تا هر شی ویژگی های خود را داشته باشد. همانطور که در بالا نشان داده شده،</p>
            <p dir="ltr">console.log(person1.name);</p>
            <p>مقدار John را چاپ می کند و</p>
            <p dir="ltr">console.log(person2.name);</p>
            <p>مقدار Sam را چاپ می کند.</p>
            <h1>ساخت شی: مقایسه تابع سازنده با Object Literal</h1>
            <p>به طور کلی شی لیترال یا لفظی (Object Literal) برای ساخت یک شی استفاده می شود در حالیکه تابع سازنده برای ساخت چند شی مفید است.</p>
            <div class="code">
                <p>// object literal استفاده از <br>
                
                let person = { <br>
                
                name: ‘Sam’ <br>
                
                } <br>
                
                // استفاده از تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘Sam’ <br>
                
                } <br>
                
                let person1 = new Person(); <br>
                
                let person2 = new Person();</p>
            </div>
            <p>هر شی ساخته شده از تابع سازنده یک شی منحصر به فرد است. برای یک شی می توانید علاوه بر ویژگی های تابع سازنده، ویژگی های خاصی نیز به آن اضافه کنید. مثال،</p>
            <div class="code">
                <p>// استفاده از تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘Sam’ <br>
                
                } <br>
                
                let person1 = new Person(); <br>
                
                let person2 = new Person(); <br>
                
                // person1 اضافه کردن یک ویژگی جدید به شی <br>
                
                person1.age = 20;</p>
            </div>
            <p>ویژگی age فقط برای شی person1 است و برای شی person2 در دسترس نیست.</p>
            <p>اگر یک شی به صورت لیترال ساخته شود و اگر متغیری تعریف شود که مقدار آن برابر با شی باشد، هرگونه تغییر در مقدار متغیر روی مقدار شی نیز اثر می گذارد و شی اصلی را هم تغییر می دهد. مثال،</p>
            <div class="code">
                <p>// object lateral ساخت شی با استفاده از <br>
                
                let person = { <br>
                
                name: ‘Sam’ <br>
                
                } <br>
                
                console.log(person.name); // Sam <br>
                
                let student = person; <br>
                
                // تغییر مقدار ویژگی شی متغیر <br>
                
                student.name = ‘John’; <br>
                
                // ویژگی شی اصلی هم تغییر کرده است <br>
                
                console.log(person.name); // John</p>
            </div>
            <p>در اینجا مقدار متغیر student برابر با شی person است. تغییر در ویژگی name در شی student روی شی person نیز اثر میگذارد و مقدار آن را تغییر می دهد. (این می تواند برعکس هم باشد یعنی هر تغییر در ویژگی با شی person روی شی student نیز تاثیر میگذارد.)</p>
            <p>هنگامی که یک شی با object literal به عنوان شی اصلی ساخته شود، هر متغیر شی مشتق شده از آن مانند یک هم نوع یا کپی از شی اصلی عمل می کند. بنابراین هر تغییری در هر کدام از اشیا رخ دهد روی شی دیگر نیز اثر خواهد گذاشت.</p>
            <h1>اضافه کردن ویژگی ها و متدها در یک شی</h1>
            <p>می توانید چند ویژگی یا متد جدید را در یک شی مشابه مثال زیر اضافه کنید:</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘John’, <br>
                
                this.age = 23 <br>
                
                } <br>
                
                // ساخت شی <br>
                
                let person1 = new Person(); <br>
                
                let person2 = new Person(); <br>
                
                // person1 اضافه کردن ویژگی به شی <br>
                
                person1.gender = ‘male’; <br>
                
                // person1 اضافه کردن متد به شی <br>
                
                person1.greet = function () { <br>
                
                console.log(‘hello’); <br>
                
                } <br>
                
                person1.greet(); // hello <br>
                
                // خطا <br>
                
                // را ندارد greet() متد person2 شی <br>
                
                person2.greet();</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>hello <br>
                
                Uncaught TypeError: person2.greet is not a function</p>
            </div>
            <p>در این مثال، ویژگی جدید gender و متد جدید ()greet به شی person1 اضافه می شود.</p>
            <p>این ویژگی و متد جدید فقط به شی person1 اضافه شده و با شی person2 نمی توانید به gender یا ()greet دسترسی پیدا کنید. در نتیجه برنامه هنگام تلاش برای دسترسی به ()person2.greet خطا می دهد.</p>
            <h1>Prototype در جاوا اسکریپت</h1>
            <p>همچنین می توانید با استفاده از Prototype ویژگی ها و متدهای جدید به تابع سازنده اضافه کنید. مثال،</p>
            <div class="code">
                <p>// تابع سازنده <br>
                
                function Person () { <br>
                
                this.name = ‘John’, <br>
                
                this.age = 23 <br>
                
                } <br>
                
                // ساخت شی <br>
                
                let person1 = new Person(); <br>
                
                let person2 = new Person(); <br>
                
                // اضافه کردن ویژگی جدید به تابع سازنده <br>
                
                Person.prototype.gender = ‘Male’; <br>
                
                console.log(person1.gender); // Male <br>
                
                console.log(person2.gender); // Male</p>
            </div>
            <h1>سازنده های داخلی در جاوا اسکریپت</h1>
            <p>جاوا اسکریپت (JavaScript) خودش هم دارای سازنده های داخلی است. بعضی از آنها:</p>
            <div class="code">
                <p>let a = new Object(); // جدید Object یک شی <br>
                
                let b = new String(); // جدید String یک شی <br>
                
                let c = new Number(); // جدید Number یک شی <br>
                
                let d = new Boolean(); // جدید Boolean یک شی</p>
            </div>
            <p>در جاوا اسکریپت رشته ها می توانند مثل یک شی ساخته شوند:</p>
            <div class="code">
                <p>let name = new String (‘John’); <br>
                
                console.log(name); // “John”</p>
            </div>
            <p>در جاوا اسکریپت اعداد می توانند مثل یک شی ساخته شوند:</p>
            <div class="code">
                <p>let number = new Number (57); <br>
                
                console.log(number); // 57</p>
            </div>
            <p>در جاوا اسکریپت مقادیر بولین می توانند مثل یک شی ساخته شوند:</p>
            <div class="code">
                <p>let count = new Boolean(true); <br>
                
                console.log(count); // true</p>
            </div>
            <p><b>نکته: </b>توصیه می شود انواع داده های ابتدایی را با روش معمولی بسازید و تعریف کنید، مانند:</p>
            <div class="code">
                <p>let name = ‘John’; let number = 57; let count = true;</p>
            </div>
            <p>نباید متغیرهای رشته ای، عددی و بولین را به عنوان شی تعریف کنید چونکه آنها سرعت برنامه را کم می کنند.</p>
            <p><b>نکته:</b> کلمه کلیدی class در ES6 (ES2015) معرفی شده است که امکان ساخت اشیا را نیز فراهم می کند. کلاس ها (class) مانند توابع سازنده در جاوا اسکریپت هستند.
            
            </p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>