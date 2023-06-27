<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>حلقه for…in</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با کمک مثال های مختلف با حلقه for…in در جاوا اسکریپت (JavaScript) آشنا خواهید شد.</p>
            <p>در آموزش های قبلی حلقه های زیر را بررسی کردیم:</p>
            <ul><li>حلقه while و do…while</li>
            <li>حلقه for</li></ul>
            <p>علاوه بر اینها حلقه های دیگری نیز در جاوا اسکریپت وجود دارد، مانند حلقه for..in که امکان تکرار همه ویژگی های یک شی را فراهم می کند.</p>
            <h1>حلقه for…in</h1>
            <p>ساختاز حلقه for…in:</p>
            <div class="code">
                <p>for (key in object) { <br>
                
                // for…in بدنه حلقه <br>
                
                }</p>
            </div>
            <p>در هر تکرار حلقه یک کلید به متغیر key اختصاص داده می شود. این حلقه همه ویژگی های شی را پیمایش می کند.</p>
            <p><b>نکته: </b>با داشتن کلیدها به راحتی می توانید به مقدار آنها نیز دسترسی پیدا کنید.</p>
            <p>مثال ۱: پیمایش یک شی</p>
            <div class="code">
                <p>let student = { <br>
                
                name: ‘Monica’, <br>
                
                class: 7, <br>
                
                age: 12 <br>
                
                } <br>
                
                // for…in استفاده از <br>
                
                for (let key in student) { <br>
                
                // نمایش ویژگی ها <br>
                
                console.log(`${key} => ${student[key]}`); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>name => Monica <br>
                
                class => 7 <br>
                
                age => 12</p>
            </div>
            <p>در این برنامه از حلقه for… in برای تکرار و پیمایش روی شی student و چاپ تمام ویژگی های آن استفاده شده است.</p>
            <ul><li>در هر تکرار کلید یک ویژگی از شی student در متغیر key ذخیره می شود.</li>
            <li>برای دسترسی به مقدار کلید ویژگی key از [student [key استفاده می شود.</li></ul>
            <p>مثال ۲: به روزرسانی مقادیر ویژگی ها</p>
            <div class="code">
                <p>let salaries= { <br>
                
                Jack : 24000, <br>
                
                Paul : 34000, <br>
                
                Monica : 55000 <br>
                
                } <br>
                
                // for…in استفاده از <br>
                
                for (let i in salaries) { <br>
                
                // $ اضافه کردن نماد دلار <br>
                
                let salary = “$” + salaries[i]; <br>
                
                // نمایش مقادیر <br>
                
                console.log(`${i} : ${salary}`); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>Jack : $24000, <br>
                
                Paul : $34000, <br>
                
                Monica : $55000</p>
            </div>
            <p>در مثال بالا از حلقه for… in برای حرکت روی ویژگی های شی salaries استفاده شده است. در ادامه نیز رشته $ به هر کدام از مقادیر شی اضافه شده سپس چاپ می شود.</p>
            <h1>for…in با رشته ها</h1>
            <p>می توانید از حلقه for…in برای پیمایش مقادیر رشته ای نیز استفاده کنید. مثال،</p>
            <div class="code">
                <p>let string = ‘code’; <br>
                
                // for…in استفاده از حلقه <br>
                
                for (let i in string) { <br>
                
                console.log(string[i]); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>c <br>
                
                o <br>
                
                d <br>
                
                e</p>
            </div>
            <h1>for…in با آرایه ها</h1>
            <p>علاوه براین می توانید از for…in همراه با آرایه ها نیز استفاده کنید. مثال،</p>
            <div class="code">
                <p>// تعریف آرایه <br>
                
                let arr = [‘hello’, 1, ‘JavaScript’]; <br>
                
                // for…in استفاده از حلقه <br>
                
                for (let x in arr) { <br>
                
                console.log(arr[x]); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>hello <br>
                
                ۱ <br>
                
                JavaScript</p>
            </div>
            <p><b>نکته:</b> زمانی که ترتیب ایندکس ها در آرایه مهم باشد نباید از حلقه for…in برای پیمایش آن استفاده کنید.</p>
            <p>یک روش خوب برای پیمایش آرایه ها استفاده از حلقه for…of است.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>