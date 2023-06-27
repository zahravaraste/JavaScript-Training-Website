<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>عملگرها</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با عملگرهای (Operators) مختلف در جاوا اسکریپت (JavaScript) آشتا خواهید شد و شیوه استفاده از آنها را به کمک مثال های مختلف یاد خواهید گرفت.</p>
            <h1>عملگر چیست؟</h1>
            <p>در جاوا اسکریپت یک عملگر نماد خاصی است که برای اجرای عملیات روی عملوندها (مقادیر و متغیرها) استفاده می شود. مثال،</p>
            <div class="code">
                <p>۲ + ۳; // ۵</p>
            </div>
            <p>در اینجا + یک عملگر است که عمل جمع را انجام می دهد و اعداد ۲ و ۳ نیز عملوند هستند.</p>
            <h1>انواع عملگر در جاوا اسکریپت</h1>
            <p>عملگرهای مختلف در جاوا اسکریپت عبارتند از:</p>
            <ul><li>عملگرهای انتساب</li>
            <li>عملگرهای حسابی</li>
            <li>عملگرهای مقایسه ای</li>
            <li>عملگرهای منطقی</li>
            <li>عملگرهای بیتی</li>
            <li>عملگرهای رشته ای</li>
            <li>سایر عملگرها</li></ul>
            <h1>عملگرهای انتساب</h1>
            <p>عملگرهای انتساب برای اختصاص مقادیر به متغیرها استفاده می شوند. مثال،</p>
            <div class="code">
                <p>let x = 5;</p>
            </div>
            <p>در اینجا از عملگر = برای اختصاص مقدار ۵ به متغیر x استفاده شده است.</p>
            <p>جدول زیر عملگرهای انتساب در جاوا اسکریپت را نشان می دهد:</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>مثال</th>
                    <th>نام عملگر</th>
                    <th>عملگر</th>
                </tr>
                <tr>
                    <td>a = 7; // 7</td>
                    <td>انتساب</td>
                    <td>=</td>
                </tr>
                <tr>
                    <td>a += 5; // a = a + 5</td>
                    <td>جمع – انتساب</td>
                    <td dir="ltr">+=</td>
                </tr>
                <tr>
                    <td>a -= 2; // a = a – 2</td>
                    <td>تفریق – انتساب</td>
                    <td dir="ltr">-=</td>
                </tr>
                <tr>
                    <td>a *= 3; // a = a * 3</td>
                    <td>ضرب – انتساب</td>
                    <td dir="ltr">*=</td>
                </tr>
                <tr>
                    <td>a /= 2; // a = a / 5</td>
                    <td>تقسیم – انتساب</td>
                    <td dir="ltr">/=</td>
                </tr>
                <tr>
                    <td>a %= 2; // a = a % 2</td>
                    <td>باقیمانده – انتساب</td>
                    <td dir="ltr">%=</td>
                </tr>
                <tr>
                    <td>a **= 2; // a = a^2</td>
                    <td>توان – انتساب</td>
                    <td dir="ltr">**=</td>
                </tr>
            </table>
            <p><b>نکته:</b> وقتی که عملگرهای حسابی را یاد بگیرید، عملگرهای انتساب مانند +=، -=، *= و … را بهتر درک خواهید کرد.</p>
            <h1>عملگرهای حسابی</h1>
            <p>از عملگرهای حسابی برای انجام محاسبات ریاضی استفاده می شود. مثال،</p>
            <div class="code">
                <p>let number = 3 + 5; // 8</p>
            </div>
            <p>در اینجا از عملگر + برای جمع دو عملوند ۳ و ۵ استفاده شده است.</p>
            <p>جدول زیر عملگرهای حسابی در جاوا اسکریپت را نشان می دهد:</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>مثال</th>
                    <th>نام عملگر</th>
                    <th>عملگر</th>
                </tr>
                <tr>
                    <td>x + y</td>
                    <td>جمع</td>
                    <td>+</td>
                </tr>
                <tr>
                    <td>x – y</td>
                    <td>تفریق</td>
                    <td>–</td>
                </tr>
                <tr>
                    <td>x * y</td>
                    <td>ضرب</td>
                    <td>*</td>
                </tr>
                <tr>
                    <td>x / y</td>
                    <td>تقسیم</td>
                    <td>/</td>
                </tr>
                <tr>
                    <td>x % y</td>
                    <td>باقیمانده</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>++x or x++</td>
                    <td>افزایشی (یک واحد افزایش)</td>
                    <td>++</td>
                </tr>
                <tr>
                    <td>–x or x–</td>
                    <td>    کاهشی (یک واحد کاهش)</td>
                    <td>—</td>
                </tr>
                <tr>
                    <td>x ** y</td>
                    <td>توان (نمایی)</td>
                    <td>**</td>
                </tr>
            </table>
            <p>مثال ۱: عملگرهای حسابی</p>
            <div class="code">
                <p>let x = 5; <br>
                
                let y = 3; <br>
                
                // جمع <br>
                
                console.log(‘x + y = ‘, x + y); <br>
                
                // تفریق <br>
                
                console.log(‘x – y = ‘, x – y); <br>
                
                // ضرب <br>
                
                console.log(‘x * y = ‘, x * y); <br>
                
                // تقسیم <br>
                
                console.log(‘x / y = ‘, x / y); <br>
                
                // باقیمانده <br>
                
                console.log(‘x % y = ‘, x % y); <br>
                
                // افزایشی <br>
                
                console.log(‘++x = ‘, ++x); // یک واحد افزایش می یابد و برابر با ۶ می شودx متغیر <br>
                
                console.log(‘x++ = ‘, x++); // مقدار ۶ را برمی گرداند سپس یک واحد افزایش می یابد و برابر با ۷ می شود x ابتدا متغیر <br>
                
                console.log(‘x = ‘, x); // برابر با ۷ می باشد x متغیر <br>
                
                // کاهشی <br>
                
                console.log(‘–x = ‘, –x); // یک واحد کاهش می یابد و برابر با ۶ می شودxمتغیر <br>
                
                console.log(‘x– = ‘, x–); // مقدار ۶ را برمی گرداند سپس یک واحد کاهش می یابد و برابر با ۵ می شود x ابتدا متغیر <br>
                
                console.log(‘x = ‘, x); // برابر با ۵ می باشد x متغیر <br>
                
                // توان <br>
                
                console.log(‘x ** y =’, x ** y);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>x + y = 8 <br>
                
                x – y = 2 <br>
                
                x * y = 15 <br>
                
                x / y = 1.6666666666666667 <br>
                
                x % y = 2 <br>
                
                ++x = 6 <br>
                
                x++ = 6 <br>
                
                x = 7 <br>
                
                –x = 6 <br>
                
                x– = 6 <br>
                
                x = 5 <br>
                
                x ** y = 125</p>
            </div>
            <p><b>نکته:</b> عملگر ** در EcmaScript 2016 معرفی شده است و ممکنه بعضی از مرورگرها از آن پشتیبانی نکنند.</p>
            <h1>عملگرهای مقایسه ای</h1>
            <p>عملگرهای مقایسه ای برای مقایسه دو مقدار استفاده می شود و یک مقدار بولین، یا true یا false برمی گردانند. مثال،</p>
            <div class="code">
                <p>let a = 3, b = 2; <br>
                
                console.log(a > b); // true</p>
            </div>
            <p>در اینجا، از عملگر مقایسه ای < برای مقایسه بزرگتری استفاده شده است، آیا a از b بزرگتر است یا نه؟</p>
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
                    <td>تساوی کامل: اگر عملوندها برابر باشند و نوع آنها نیز یکی باشد، true برمی گرداند.</td>
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
            <p>مثال ۲: عملگرهای مقایسه ای</p>
            <div class="code">
                <p>// عملگر تساوی <br>
                
                console.log(2 == 2); // true <br>
                
                console.log(2 == ‘2’); // true <br>
                
                // عملگر نامساوی <br>
                
                console.log(3 != 2); // true <br>
                
                console.log(‘hello’ != ‘Hello’); // true <br>
                
                // عملگر تساوی کامل <br>
                
                console.log(2 === 2); // true <br>
                
                console.log(2 === ‘2’); // false <br>
                
                // عملگر نامساوی کامل <br>
                
                console.log(2 !== 2); // false <br>
                
                console.log(2 !== ‘2’); // true</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>true <br>
                
                true <br>
                
                true <br>
                
                true <br>
                
                true <br>
                
                false <br>
                
                false <br>
                
                true</p>
            </div>
            <p>از عملگرهای مقایسه ای در تصمیم گیری ها و حلقه ها استفاده می شود.</p>
            <h1>عملگرهای منطقی</h1>
            <p>از عملگرهای منطقی برای انجام عملیات منطقی استفاده می شود و یک مقدار بولین، یا true یا false برمی گردانند. مثال،</p>
            <div class="code">
                <p>let x = 5, y = 3; <br>
                
                (x < 6) && (y < 5); // true</p>
            </div>
            <p>در اینجا، && عملگر منطقی AND است. چون هر دو عبارت x < 6 و y < 5 درست یا true می باشد، نتیجه نیز true است.</p>
            <p>جدول زیر عملگرهای منطقی در جاوا اسکریپت را نشان می دهد:</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>مثال</th>
                    <th>توضیحات</th>
                    <th>عملگر</th>
                </tr>
                <tr>
                    <td>x && y</td>
                    <td>AND منطقی (و): اگر هر دو عملوند true باشد، true برمی گرداند و در غیر اینصورت false.</td>
                    <td>&&</td>
                </tr>
                <tr>
                    <td>x || y	</td>
                    <td>|| منطقی (یا): اگر هر کدام از عملوندها true باشد، true برمی گرداند و اگر هر دو false باشند، false برمی گرداند.</td>
                    <td>||</td>
                </tr>
                <tr>
                    <td>!x</td>
                    <td>NOT منطقی (نه): اگر عملوند false باشد، true برمی گرداند و برعکس.</td>
                    <td>!</td>
                </tr>
            </table>
            <p>مثال ۳: عملگرهای منطقی</p>
            <div class="code">
                <p>// AND <br>
                
                console.log(true && true); // true <br>
                
                console.log(true && false); // false <br>
                
                // OR <br>
                
                console.log(true || false); // true <br>
                
                console.log(false || false); // false <br>
                
                // NOT <br>
                
                console.log(!true); // false</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>true <br>
                
                false <br>
                
                true <br>
                
                false <br>
                
                false</p>
            </div>
            <p>از عملگرهای منطقی در تصمیم گیری ها و حلقه ها استفاده می شود.</p>
            <h1>عملگرهای بیتی</h1>
            <p>عملگرهای بیتی روی نمایش باینری اعداد اجرا می شوند.</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>توضیحات</th>
                    <th>عملگر</th>
                </tr>
                <tr>
                    <td>AND بیتی</td>
                    <td>&</td>
                </tr>
                <tr>
                    <td>OR بیتی</td>
                    <td>|</td>
                </tr>
                <tr>
                    <td>XOR بیتی</td>
                    <td>^</td>
                </tr>
                <tr>
                    <td>NOT بیتی</td>
                    <td>~</td>
                </tr>
                <tr>
                    <td>شیفت به چپ با ورود صفر</td>
                    <td dir="ltr"><<</td>
                </tr>
                <tr>
                    <td>شیفت به راست با ورود چپ ترین بیت از سمت چپ (علامت دار)</td>
                    <td dir="ltr">>></td>
                </tr>
                <tr>
                    <td>شیفت به راست با ورود صفر (بدون علامت)</td>
                    <td dir="ltr">>>></td>
                </tr>
            </table>
            <p>معمولا در برنامه نویسی از عملگرهای بیتی خیلی کم استفاده می شود.</p>
            <h1>عملگرهای رشته ای</h1>
            <p>در جاوا اسکریپت از عملگر + برای اتصال (الحاق) دو یا چند رشته استفاده می شود.</p>
            <p>مثال ۴: عملگرهای رشته ای</p>
            <div class="code">
                <p>// عملگر الحاق <br>
                
                console.log(‘hello’ + ‘world’); <br>
                
                let a = ‘JavaScript’; <br>
                
                a += ‘ tutorial’; // a = a + ‘ tutorial’; <br>
                
                console.log(a);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>helloworld <br>
                
                JavaScript tutorial</p>
            </div>
            <p><b>نکته:</b> عملگر + در رشته ها برای اتصال آنها استفاده می شود در حالی که هنگام کار با اعداد، عملیات جمع را انجام می دهد.</p>
            <h1>سایر عملگرها</h1>
            <p>برای نکمیل معرفی عملگرها، در اینجا لیستی از سایر عملگرهای موجود در جاوا اسکریپت را آورده ایم. در آموزش های بعدی با هر کدام از این عملگرها به طور کامل آشنا خواهید شد.</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>مثال</th>
                    <th>توضیحات</th>
                    <th>عملگر</th>
                </tr>
                <tr>
                    <td>let a = (1, 3 , 4); // 4</td>
                    <td>چند عملوند را ارزیابی می کند و مقدار آخرین عملوند را برمی گرداند.</td>
                    <td>,</td>
                </tr>
                <tr>
                    <td dir="ltr">(۵ > 3) ? ‘success’ : ‘error’; // “success”</td>
                    <td>مقدار را بر اساس شرط برمی گرداند. اگر شرط درست باشد مقدار اول و در غیر اینصورت مقدار دوم را برمی گرداند.</td>
                    <td>?:</td>
                </tr>
                <tr>
                    <td>delete x</td>
                    <td>ویژگی یک شی و یا یک عنصر از آرایه را حذف می کند.	</td>
                    <td>delete</td>
                </tr>
                <tr>
                    <td dir="ltr">typeof 3; // “number”</td>
                    <td>نوع داده را به صورت یک رشته برمی گرداند.</td>
                    <td>typeof</td>
                </tr>
                <tr>
                    <td>void(x)</td>
                    <td>مقدار برگشتی یک عبارت را بی اعتبار می کند.</td>
                    <td>void</td>
                </tr>
                <tr>
                    <td>prop in object</td>
                    <td>اگر یک ویژگی خاص در یک شی وجود داشته باشد، true برمی گرداند.</td>
                    <td>in</td>
                </tr>
                <tr>
                    <td>object instanceof object_type</td>
                    <td>اگر یک شی نمونه از نوع شی خاصی باشد، true برمی گرداند.</td>
                    <td>instanceof</td>
                </tr>
            </table>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>