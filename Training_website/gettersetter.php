<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>Getter و Setter</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش به کمک مثال های مختلف با متدهای Getter و Setter در جاوا اسکریپت (JavaScript) آشنا خواهید شد.</p>
            <p>در جاوا اسکریپت دو نوع ویژگی (property یا خصوصیت) برای شی وجود دارد:</p>
            <ul><li>ویژگی های داده ای (Data properties)</li>
            <li>ویژگی های دستیاب (Accessor properties)</li></ul>
            <h1>ویژگی داده ای</h1>
            <p>در مثال زیر یک ویژگی داده ای تعریف شده است، در آموزش های قبلی از این نوع ویژگی زیاد استفاده کردیم.</p>
            <div class="code">
                <p>let student = { <br>
                
                // ویژگی داده ای <br>
                
                firstName: ‘Monica’ <br>
                
                };</p>
            </div>
            <h1>ویژگی دستیاب</h1>
            <p>در جاوا اسکریپت ویژگی های accessor (اکسسور) یا دستیاب متدهایی هستند که مقدار یک شی را دریافت یا تنظیم می کنند. برای این کار از دو کلمه کلیدی استفاده می شود:</p>
            <ul><li>get- تعریف متد دریافت کننده (getter) برای بدست آوردن مقدار ویژگی</li>
            <li>set- تعریف متد تنظیم کننده (setter) برای تعیین مقدار ویژگی</li></ul>
            <h1>Getter در جاوا اسکریپت</h1>
            <p>در جاوا اسکریپت از متدهای Getter برای دسترسی به ویژگی های یک شی استفاده می شود. مثال،</p>
            <div class="code">
                <p>let student = { <br>
                
                // ویژگی داده ای <br>
                
                firstName: ‘Monica’, <br>
                
                //accessor ویژگی (getter) <br>
                
                get getName() { <br>
                
                return this.firstName; <br>
                
                } <br>
                
                }; <br>
                
                // دسترسی به ویژگی داده ای <br>
                
                console.log(student.firstName); // Monica <br>
                
                // getter دسترسی به متد <br>
                
                console.log(student.getName); // Monica <br>
                
                // دسترس به صورت متد <br>
                
                console.log(student.getName()); // error <br>
                
                در این برنامه یک متد getter به نام getName() برای دسترسی به ویژگی firstName ساخته شده است. <br>
                
                get getName() { <br>
                
                return this.firstName; <br>
                
                }</p>
            </div>
            <p><b>نکته: </b>برای ساخت یک متد getter از کلمه کلیدی get استفاده می شود. برای دسترسی نیز آن را مانند یک ویژگی می نویسیم نه مثل تابع (یا متد).</p>
            <div class="code">
                <p>student.getName;</p>
            </div>
            <p>اگر به مقدار آن به صورت یک متد دسترسی پیدا کنید، خطا رخ می دهد.</p>
            <div class="code">
                <p>console.log(student.getName()); // error</p>
            </div>
            <h1>Setter در جاوا اسکریپت</h1>
            <p>متدهای Setter در جاوا اسکریپت برای تغییر مقادیر ویژگی های شی استفاده می شود. مثال،</p>
            <div class="code">
                <p>let student = { <br>
                
                firstName: ‘Monica’, <br>
                
                //accessor ویژگی(setter) <br>
                
                set changeName(newName) { <br>
                
                this.firstName = newName; <br>
                
                } <br>
                
                }; <br>
                
                console.log(student.firstName); // Monica <br>
                
                // setter تغییر (تنظیم) مقدار یک شی با استفاده از <br>
                
                student.changeName = ‘Sarah’; <br>
                
                console.log(student.firstName); // Sarah</p>
            </div>
            <p>در مثال بالا از متد setter برای تغییر مقدار یک شی استفاده شده است.</p>
            <div class="code">
                <p>set changeName(newName) { <br>
                
                this.firstName = newName; <br>
                
                }</p>
            </div>
            <p><b>نکته: </b>برای ساخت یک متد setter از کلمه کلیدی set استفاده می شود.</p>
            <p>همانطور که در برنامه بالا می بینیم، ابتدا مقدار firstName برابر با Monica است سپس مقدار آن به Sarah تغییر داده می شود.</p>
            <div class="code">
                <p>student.changeName = ‘Sarah’;</p>
            </div>
            <p><b>نکته: </b>Setter باید دقیقاً یک پارامتر داشته باشد.</p>
            <h1>()Object.defineProperty در جاوا اسکریپت</h1>
            <p>در JavaScript می توانید از متد ()Object.defineProperty برای اضافه کردن متدهای getter و setter استفاده کنید. مثال،</p>
            <div class="code">
                <p>let student = { <br>
                
                firstName: ‘Monica’ <br>
                
                } <br>
                
                // getter ویژگی دریافت کننده <br>
                
                Object.defineProperty(student, “getName”, { <br>
                
                get : function () { <br>
                
                return this.firstName; <br>
                
                } <br>
                
                }); <br>
                
                // setter ویژگی تنظیم کننده <br>
                
                Object.defineProperty(student, “changeName”, { <br>
                
                set : function (value) { <br>
                
                this.firstName = value; <br>
                
                } <br>
                
                }); <br>
                
                console.log(student.firstName); // Monica <br>
                
                // تغییر مقدار ویژگی <br>
                
                student.changeName = ‘Sarah’; <br>
                
                console.log(student.firstName); // Sarah</p>
            </div>
            <p>در مثال بالا از ()Object.defineProperty برای دسترسی و تغییر ویژگی یک شی استفاده شده است. ساختار استفاده از آن به صورت زیر است:</p>
            <div class="code">
                <p>Object.defineProperty(obj, prop, descriptor)</p>
            </div>
            <p>متد ()Object.defineProperty سه آرگومان دارد:</p>
            <ul><li>obj، اسم شی است.</li>
            <li>prop، اسم ویژگی موردنطر است.</li>
            <li>Descriptor یک شی است که ویژگی را توصیف می کند.</li></ul>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>