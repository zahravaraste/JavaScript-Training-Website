<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>عملگرهای مقایسه ای و منطقی</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با عملگرهای مقایسه ای و منطقی در جاوا اسکریپت (JavaScript) آشنا خواهید شد و شیوه استفاده از آنها را به کمک مثال های مختلف یاد خواهید گرفت.</p>
            <h1>عملگر چیست؟</h1>
            <p>در جاوا اسکریپت یک عملگر نماد خاصی است که برای اجرای عملیات روی عملوندها (مقادیر و متغیرها) استفاده می شود. مثال،</p>
            <div class="code">
                <p>۲ + ۳; // ۵</p>
            </div>
            <p>در اینجا + یک عملگر است که عمل جمع را انجام می دهد و اعداد ۲ و ۳ نیز عملوند هستند.</p>
            <h1>عملگرهای مقایسه ای در جاوا اسکریپت</h1>
            <p>عملگرهای مقایسه ای برای مقایسه دو مقدار استفاده می شوند و در نتیجه یک مقدار بولین، یا true یا false برمی گردانند. از عملگرهای مقایسه ای در تصمیم گیری ها و حلقه ها استفاده می شود.</p>
            <p>مثال،</p>
            <div class="code">
                <p>let a = 3, b = 2; <br>

console.log(a > b); // true</p>
            </div>
            <p>در اینجا از عملگر مقایسه ای < برای مقایسه بزرگتری استفاده شده است، آیا a از b بزرگتر است یا نه؟</p>
            <p>جدول زیر عملگرهای مقایسه ای در جاوا اسکریپت را نشان می دهد:</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>مثال</th>
                    <th>توضیحات</th>
                    <th>عملگر</th>
                </tr>
                <tr>
                    <td>x == y</td>
                    <td>تساوی: اگر عملوندها با یکدیگر برابر باشند، true برمی گرداند.</td>
                    <td>==</td>
                </tr>
                <tr>
                    <td>x != y</td>
                    <td>نامساوی: اگر عملوندها با یکدیگر برابر نباشند، true برمی گرداند.</td>
                    <td dir="ltr">!=</td>
                </tr>
                <tr>
                    <td>x === y</td>
                    <td>تساوی کامل: اگر عملوندها برابر باشند و نوع آن ها نیز یکی باشد، true برمی گرداند.</td>
                    <td>===</td>
                </tr>
                <tr>
                    <td>x !== y</td>
                    <td>نامساوی کامل: اگر عملوندها برابر اما از دو نوع مختلف باشند و یا اصلاً برابر نباشند، true برمی گرداند.</td>
                    <td dir="ltr">!==</td>
                </tr>
                <tr>
                    <td>x > y</td>
                    <td>بزرگتر از: اگر عملوند چپ بزرگتر از عملوند راست باشد، true برمی گرداند.</td>
                    <td dir="ltr">></td>
                </tr>
                <tr>
                    <td>x >= y</td>
                    <td>بزرگتر یا مساوی با: اگر عملوند چپ بزرگتر یا مساوی با عملوند راست باشد، true برمی گرداند.</td>
                    <td dir="ltr">>=</td>
                </tr>
                <tr>
                    <td>x < y</td>
                    <td>کوچکتر از: اگر عملوند چپ کوچکتر از عملوند راست باشد، true برمی گرداند.</td>
                    <td dir="ltr"><</td>
                </tr>
                <tr>
                    <td>x <= y</td>
                    <td>کوچکتر یا مساوی با: اگر عملوند چپ کوچکتر یا مساوی با عملوند راست باشد، true برمی گرداند.</td>
                    <td dir="ltr"><=</td>
                </tr>
            </table>
            <p>مثال ۱: عملگر تساوی</p>
            <div class="code">
                <p>let a = 5, b = 2, c = ‘hello’; <br>

console.log(a == 5); // true <br>

console.log(b == ‘2’); // true <br>

console.log(c == ‘Hello’); // false</p>
            </div>
            <p><b>نکته</b>:
            عملگر == یک عملگر مقایسه ای است در حالی که عملگر = یک عملگر انتساب است. اگر به اشتباه از = به جای == استفاده کنید، عملیات انتساب اجرا می شود و نتیجه تغییر می کند.</p>
            <p>مثال ۲: عملگر نامساوی</p>
            <div class="code">
                <p>let a = 5, b = 2, c = ‘hello’; <br>

console.log(a != 2); // true <br>

console.log(b != 2); // false <br>

console.log(c != ‘Hello’); // true</p>
            </div>
            <p>مثال ۳: عملگر تساوی کامل</p>
            <div class="code">
                <p>let a = 2; <br>
                
                console.log(a === 2); // true <br>
                
                console.log(a === ‘2’); // false</p>
            </div>
            <p>اگر عملوندها برابر و از یک نوع باشند، عملگر === مقدار true برمی گرداند. در اینجا ۲ و ‘۲’ یک عدد را نشان می دهند اما نوع داده ها متفاوت است در نتیجه مقدار false برمی گرداند. عملگر === علاوه بر مقدار، نوع داده را نیز بررسی می کند در حالیکه عملگر == تنها مقدار را ارزیابی می کند.</p>
            <p>مثال ۴: عملگر نامساوی کامل</p>
            <div class="code">
                <p>let a = 2, b = ‘hello’; <br>
                
                console.log(a !== 2); // false <br>
                
                console.log(a !== ‘2’); // true <br>
                
                console.log(b !== ‘Hello’); // true</p>
            </div>
            <p>اگر عملوندها کاملاً برابر نباشند، عملگر ==! مقدار true برمی گرداند! کاملاً برعکس عملگر === است.</p>
            <p>در مثال بالا</p>
            <p>‘۲’ ==! ۲</p>
            <p>مقادیر عملوندها یکسانند ولی چون نوع آنها متفاوت است، مقدار true برمی گرداند.</p>
            <p>مثال ۵: عملگر بزرگتر از</p>
            <div class="code">
                <p>let a = 3; <br>
                
                console.log(a > 2); // true <br>
                
                console.log(a > 5); // false</p>
            </div>
            <p>مثال ۶: عملگر بزرگتر یا مساوی با</p>
            <div class="code">
                <p>let a = 3; <br>
                
                console.log(a >= 3); //true <br>
                
                console.log(a > 2); // true <br>
                
                console.log(a > 5); // false</p>
            </div>
            <p>مثال ۷: عملگر کوچکتر از</p>
            <div class="code">
                <p>let a = 3, b = 2; <br>
                
                console.log(a < 2); // false <br>
                
                console.log(b < 3); // true</p>
            </div>
            <p>مثال ۸: عملگر کوچکتر یا مساوی با</p>
            <div class="code">
                <p>let a = 2; <br>
                
                console.log(a <= 3) // true <br>
                
                console.log(a <= 2); // true <br>
                
                console.log(a < 1); // false</p>
            </div>
            <h1>عملگرهای منطقی در جاوا اسکریپت</h1>
            <p>از عملگرهای منطقی برای انجام عملیات منطقی استفاده می شود و در نتیجه یک مقدار بولین، یا true یا false برمی گردانند. از عملگرهای منطقی در تصمیم گیری ها و حلقه ها استفاده می شود.</p>
            <p>مثال،</p>
            <div class="code">
                <p>let x = 5, y = 3; <br>
                
                (x < 6) && (y < 5); // true</p>
            </div>
            <p>در اینجا، && عملگر منطقی AND است. چون هر دو عبارت x < 6 و y < 5 درست یا true می باشند پس نتیجه نیز true است.</p>
            <p>جدول زیر عملگرهای منطقی در جاوا اسکریپت را نشان می دهد:</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>مثال ۲</th>
                    <th>مثال ۱</th>
                    <th>توضیحات</th>
                    <th>عملگر</th>
                </tr>
                <tr>
                    <td>true && false; // false</td>
                    <td>x && y	</td>
                    <td>AND منطقی (و): اگر هر دو عملوند true باشد، true برمی گرداند و در غیر اینصورت false.</td>
                    <td>&&</td>
                </tr>
                <tr>
                    <td>true || false; // true</td>
                    <td>x || y</td>
                    <td>|| منطقی (یا): اگر هر کدام از عملوندها true باشد، true برمی گرداند و اگر هر دو false باشند، false برمی گرداند.	</td>
                    <td>||</td>
                </tr>
                <tr>
                    <td dir="ltr">!true; // false</td>
                    <td>!x</td>
                    <td>NOT منطقی (نه): اگر عملوند false باشد، true برمی گرداند و برعکس.	</td>
                    <td>!</td>
                </tr>
                </tr>
            </table>
            <p>مثال ۹: عملگر AND منطقی</p>
            <div class="code">
                <p>let a = true, b = false; <br>
                
                let c = 4; <br>
                
                console.log(a && a); // true <br>
                
                console.log(a && b); // false <br>
                
                console.log((c > 2) && (c < 2)); // false</p>
            </div>
            <p><b>نکته:</b> می توانید از عملگرهای منطقی همراه با اعداد نیز استفاده کنید. در جاوا اسکریپت، عدد ۰ معادل false است و تمام مقادیر غیر صفر true هستند.</p>
            <p>مثال ۱۰: عملگر || منطقی</p>
            <div class="code">
                <p> let a = true, b = false, c = 4; <br>
                
                console.log(a || b); // true <br>
                
                console.log(b || b); // false <br>

                console.log((c>2) || (c<2)); // true </p>
            </div>
            <p>مثال ۱۱: عملگر NOT منطقی</p>
            <div class="code">
                <p>let a = true, b = false; <br>
                
                console.log(!a); // false <br>
                
                console.log(!b); // true</p>
            </div>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>