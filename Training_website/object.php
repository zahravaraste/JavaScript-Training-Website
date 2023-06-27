<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>Object</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با مفهوم Object یا شی در جاوا اسکریپت (JavaScript) به کمک مثال های مختلف آشنا خواهید شد. در مبحث نوع داده در جاوا اسکریپت انواع مختلف داده ابتدایی را معرفی کردیم. اینجا درباره نوع داده شی (Object) بحث خواهیم کرد.</p>
            <p>شی یک نوعی داده غیر ابتدایی است که امکان ذخیره مجموعه ای از داده ها را فراهم می کند در حالیکه نوع داده ابتدایی تنها قادر به ذخیره یک مقدار واحد است.</p>
            <p><b>نکته:</b> اشیا در جاوا اسکریپت کمی متفاوت تر از دیگر زبان های برنامه نویسی هستند و برای ایجاد شی نیازی به ساخت کلاس نیست.</p>
            <p>مثال،</p>
            <div class="code">
                <p>// شی <br>
                
                let student = { <br>
                
                firstName: ‘ram’, <br>
                
                class: 10 <br>
                
                };</p>
            </div>
            <p>در اینجا student یک شی است که دو مقدار رشته ای و عددی را در خود ذخیره می کند.</p>
            <h1>تعریف شی در جاوا اسکریپت</h1>
            <p>ساختار تعریف یک شی:</p>
            <div class="code">
                <p>let object_name = { <br>
                
                key1: value1, <br>
                
                key2: value2 <br>
                
                }</p>
            </div>
            <p>در این ساختار object_name نام شی است. هر عضوی از شی به صورت جفت مقدار :کلید (key: value) می باشد که با کاما از یکدیگر جدا شده اند و در {}قرار گرفته اند. مثال،</p>
            <div class="code">
                <p>// ساخت شی <br>
                
                let person = { <br>
                
                name: ‘John’, <br>
                
                age: 20 <br>
                
                }; <br>
                
                console.log(typeof person); // object</p>
            </div>
            <p>می توانید شی را در یک خط نیز تعریف کنید:</p>
            <div class="code">
                <p>let person = { name: ‘John’, age: 20 };</p>
            </div>
            <p>در مثال بالا name و age کلیدهای شی person می باشند که John و ۲۰ به ترتیب مقادیر این کلیدها هستند.</p>
            <p>روش های دیگری نیز برای اعلام شی در جاوا اسکریپت وجود دارد.</p>
            <h1>خصوصیات شی در جاوا اسکریپت</h1>
            <p>در جاوا اسکریپت به جفت “مقدار :کلید” ویژگی یا خاصیت (property) گفته می شود.</p>
            <div class="code">
                <p>let person = { <br>
                
                name: ‘John’, <br>
                
                age: 20 <br>
                
                };</p>
            </div>
            <p>در اینجا ‘name: ‘John و age: 20 ویژگی های شی person هستند.</p>
            <h1>دسترسی به خصوصیات شی</h1>
            <p>با استفاده از کلید هر ویژگی می توانید به مقدار آن دسترسی پیدا کنید.</p>
            <h1>۱- استفاده از علامت گذاری نقطه</h1>
            <p>ساختار علامت گذاری نقطه:</p>
            <div class="code">
                <p>objectName.key</p>
            </div>
            <p>مثال،</p>
            <div class="code">
                <p>let person = { <br>
                
                name: ‘John’, <br>
                
                age: 20, <br>
                
                }; <br>
                
                // دسترسی به ویژگی <br>
                
                console.log(person.name); // John</p>
            </div>
            <h1>۲- استفاده از علامت گذاری براکت</h1>
            <p>ساختار علامت گذاری براکت:</p>
            <div class="code">
                <p>objectName[“propertyName”]</p>
            </div>
            <p>مثال،</p>
            <div class="code">
                <p>let person = { <br>
                
                name: ‘John’, <br>
                
                age: 20, <br>
                
                }; <br>
                
                // دسترسی به ویژگی <br>
                
                console.log(person[“name”]); // John</p>
            </div>
            <h1>اشیای تودرتو در جاوا اسکریپت</h1>
            <p>یک شی می تواند حاوی شی دیگری نیز باشد. مثال،</p>
            <div class="code">
                <p>// شی تودرتو <br>
                
                let student = { <br>
                
                name: ‘John’, <br>
                
                age: 20, <br>
                
                marks: { <br>
                
                science: 70, <br>
                
                math: 75 <br>
                
                } <br>
                
                } <br>
                
                // student دسترسی به ویژگی شی <br>
                
                console.log(student.marks); // {science: 70, math: 75} <br>
                
                // marks دسترسی به ویژگی شی <br>
                
                console.log(student.marks.science); // 70</p>
            </div>
            <p>در مثال بالا شی marks به عنوان یک ویژگی درون شی student قرار گرفته است.</p>
            <h1>متدهای شی در جاوا اسکریپت</h1>
            <p>یک شی می تواند تابع نیز داشته باشد. مثال،</p>
            <div class="code">
                <p>let person = { <br>
                
                name: ‘Sam’, <br>
                
                age: 30, <br>
                
                // استفاده از تابع به عنوان مقدار <br>
                
                greet: function() { console.log(‘hello’) } <br>
                
                } <br>
                
                person.greet(); // hello</p>
            </div>
            <p>در این مثال یک تابع به عنوان مقدار کلید greet استفاده شده است. به همین دلیل برای فراخوانی این تابع درون شی باید از ()person.greet به جای person.greet استفاده کنید.</p>
            <p>متد جاوا اسکریپت (JavaScript) یک ویژگی از شی است که مقدار آن برابر با تعریف یک تابع می باشد. در آموزش بعدی با جزئیات متدها در جاوا اسکریپت آشنا خواهید شد.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>