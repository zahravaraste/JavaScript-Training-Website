<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>Number</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش به کمک مثال های مختلف با اعداد و نوع عددی (Number) در جاوا اسکریپت JavaScript آشنا خواهید شد.</p>
            <p>Number یک نوع داده ابتدایی است.</p>
            <div class="code">
                <p>let a = 3; <br>
                
                let b = 3.13;</p>
            </div>
            <p>در جاوا اسکریپت برخلاف برخی از زبان های برنامه نویسی نیازی نیست که مقادیر صحیح و اعشار را با استفاده از int ، float و … به طور جداگانه تعریف کنید.</p>
            <p>می توانید از نماد نمایی e برای اعداد خیلی بزرگ یا خیلی کوچک استفاده کنید. مثال،</p>
            <div class="code">
                <p>let a1 = 5e9; <br>
                
                console.log(a1); //5000000000 <br>
                
                let a2 = 5e-5; <br>
                
                console.log(a2); // 0.00005</p>
            </div>
            <p>می توانید مقادیر هگزادسیمال را نیز تعریف کنید. مثال،</p>
            <div class="code">
                <p>let a = 0xff; <br>
                
                console.log(a); // 255 <br>
                
                let b = 0x00 ; <br>
                
                console.log(b); // 0</p>
            </div>
            <h1>عملگر + با نوع Number</h1>
            <p>استفاده از عملگر + با اعداد و نوع Number برای جمع استفاده می شود.</p>
            <div class="code">
                <p>let a = 4 + 9; <br>
                
                console.log(a); // 13</p>
            </div>
            <p>وقتی عملگر + بین نوع عددی و رشته ای قرار بگیرد، مقدار عددی را به مقدار رشته ای تبدیل کرده و آنها را به هم متصل می کند. مثال،</p>
            <div class="code">
                <p>let a = ‘4’ + 9; <br>
                
                console.log(a); // 49</p>
            </div>
            <p>هنگامی که یک رشته عددی با سایر عملگرهای ریاضی استفاده شود، رشته عددی به یک عدد تبدیل می شود (برخلاف عملگر +). مثال،</p>
            <div class="code">
                <p>let a = ‘4’ – 2; <br>
                
                console.log(a); // 2 <br>
                
                a = ‘4’ / 2; <br>
                
                console.log(a); // 2 <br>
                
                a = ‘4’ * 2; <br>
                
                console.log(a); // 8</p>
            </div>
            <h1>NaN در جاوا اسکریپت</h1>
            <p>NaN (Not a Number) یک کلمه کلیدی برای نشان دادن مقدار غیرعددی است.</p>
            <p>انجام عملیات حسابی (به جز +) برای مقادیر عددی همراه با رشته های غیرعددی برابر با NaN است. مثال،</p>
            <div class="code">
                <p>let a = 4 – ‘hello’; <br>
                
                console.log(a); // NaN</p>
            </div>
            <p>می توانید از تابع داخلی ()isNaN برای پی بردن به مقدار عددی استفاده کنید. مثال،</p>
            <div class="code">
                <p>let a = isNaN(9); <br>
                
                console.log(a); // false <br>
                
                a = isNaN(4 – ‘hello’); <br>
                
                console.log(a); // true</p>
            </div>
            <p>عملگر typeof برای مقدار NaN، number را در خروجی نشان می دهد. مثال،</p>
            <div class="code">
                <p>let a = 4 – ‘hello’; <br>
                
                console.log(a); // NaN <br>
                
                console.log(typeof a); // “number”</p>
            </div>
            <h1>Infinity در جاوا اسکریپت</h1>
            <p>جاوا اسکریپت مقدار بی نهایت (یا تقسیم بر صفر) را با Infinity برای مثبت بی نهایت و -Infinity برای منفی بی نهایت نشان میدهد. مثال،</p>
            <div class="code">
                <p>let a = 2 / 0; <br>
                
                console.log(a); // Infinity <br>
                
                let a = -2 / 0; <br>
                
                console.log(a); // -Infinity</p>
            </div>
            <h1>BigInt در جاوا اسکریپت</h1>
            <p>نوع عددی در جاوا اسکریپت فقط اعداد بین (۱ – ۲۵۳) تا (۱ – ۲۵۳)- را نشان می دهد. به همین دلیل برای کار با اعداد بزرگتر یا کوچکتر از داده BigInt استفاده می شود.</p>
            <p>عدد BigInt با اضافه کردن حرف n به انتهای یک عدد صحیح ساخته می شود. مثل،</p>
            <div class="code">
                <p>// BigInt مقدار <br>
                
                let value = 900719925124740998n; <br>
                
                // جمع دو عدد صحیح بزرگ <br>
                
                let value1 = value + 1n; <br>
                
                console.log(value1); // “900719925124740999n”</p>
            </div>
            <p><b>نکته: </b>BigInt در نسخه جدیدتر جاوا اسکریپت معرفی شد و توسط بعضی از مرورگرها پشتیبانی نمی شود</p>
            <h1>ذخیره اعداد در جاوا اسکریپت</h1>
            <p>در جاوا اسکریپت اعداد در قالب ۶۴ بیتی با استاندارد IEEE-754 ذخیره می شوند که با نام “اعداد شناور با دقت مضاعف” نیز شناخته می شود.</p>
            <p>اعداد در ۶۴ بیت ذخیره می شوند (عدد در بیت های ۰ تا ۵۱ام، نما در بیت های ۵۲ تا ۶۲ام و علامت عدد در بیت ۶۳ام ذخیره میشود)</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>علامت</th>
                    <th>نما</th>
                    <th>عدد</th>
                </tr>
                <tr>
                    <td>۱بیت (۶۳)</td>
                    <td>۱۱بیت (۵۲-۶۲)	</td>
                    <td>۵۲ بیت (۰-۵۱)</td>
                </tr>
            </table>
            <h1>مشکلات دقت اعداد</h1>
            <p>عملیات روی اعداد ممیز شناور (اعداد اعشاری) منجر به نتایج غیر منتظره ای می شود. مثال،</p>
            <div class="code">
                <p>let a = 0.1 + 0.2; <br>
                
                console.log(a); // 0.30000000000000004</p>
            </div>
            <p>نتیجه به جای مقدار ۰٫۳، مقدار ۰٫۳۰۰۰۰۰۰۰۰۰۰۰۰۰۰۰۴ می باشد. این خطا رخ می دهد چون در جاوا اسکریپت ارقام دهدهی به فرم باینری ذخیره می شوند و نمی توان اعداد اعشاری را به طور دقیق در قالب باینری نشان داد.</p>
            <p>برای حل ابن مشکل می توانید مانند زیر عمل کنید:</p>
            <div class="code">
                <p>let a = (0.1 * 10 + 0.2 * 10) / 10; <br>
                
                console.log(a); // 0.3</p>
            </div>
            <p>همچنین می توانید از متد ()toFixed استفاده کنید:</p>
            <div class="code">
                <p>let a = 0.1 + 0.2; <br>
                
                console.log(a.toFixed(2)); // 0.30</p>
            </div>
            <p>toFixed (2) عدد اعشاری را تا دو رقم اعشار گرد می کند.</p>
            <p><b>نکته: </b>دقت عدد صحیح بیش از ۱۵ رقم است.</p>
            <div class="code">
                <p>let a = 9999999999999999 <br>
                
                console.log(a); // 10000000000000000</p>
            </div>
            <h1>شی عددی</h1>
            <p>می توانید نوع عددی را با استفاده از کلمه کلیدی new نیز تعریف کنید. مثال،</p>
            <div class="code">
                <p>let a = 45; <br>
                
                // ساخت شی عددی <br>
                
                let b = new Number(45); <br>
                
                console.log(a); // 45 <br>
                
                console.log(b); // 45 <br>
                
                console.log(typeof a); // “number” <br>
                
                console.log(typeof b); // “object”</p>
            </div>
            <p><b>نکته: </b>توصیه می شود از تعریف شی عددی خودداری کنید زیرا باعث کند شدن برنامه می شود.</p>
            <h1>متدهای Number جاوا اسکریپت</h1>
            <p>در جدول زیر لیست متدهای داخلی برای داده های عددی در جاوا اسکریپت آورده شده است:</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>توضیحات</th>
                    <th>متد</th>
                </tr>
                <tr>
                    <td>تعیین می کند که آیا مقدار NaN (غیرعددی) است یا نه؟</td>
                    <td dir="ltr">isNaN()</td>
                </tr>
                <tr>
                    <td>تعیین می کند که آیا مقدار ارسالی بی نهایت است یا خیر؟</td>
                    <td dir="ltr">isFinite()</td>
                </tr>
                <tr>
                    <td>تعیین می کند که آیا مقدار ارسالی یک عدد صحیح است یا خیر؟</td>
                    <td dir="ltr">isInteger()</td>
                </tr>
                <tr>
                    <td>تعیین می کند که آیا مقدار ارسالی یک عدد صحیح در بازه امن است یا خیر؟</td>
                    <td dir="ltr">isSafeInteger()</td>
                </tr>
                <tr>
                    <td>رشته عددی اعشاری را به یک عدد اعشاری تبدیل می کند.</td>
                    <td>parseFloat(string)</td>
                </tr>
                <tr>
                    <td>رشته عددی را به عدد صحیح تبدیل می کند.</td>
                    <td>parseInt(string, [radix])</td>
                </tr>
                <tr>
                    <td>یک مقدار رشته ای برای عدد در قالب نمایی برمیگرداند.</td>
                    <td>toExponential(fractionDigits)</td>
                </tr>
                <tr>
                    <td>یک مقدار رشته ای برای عدد با ثابت کردن تعداد رقم های اعشار برمیگرداند.</td>
                    <td>toFixed(digits)</td>
                </tr>
                <tr>
                    <td>یک مقدار رشته ای برای عدد با دقت تعیین شده برمی گرداند.</td>
                    <td dir="ltr">toPrecision()</td>
                </tr>
                <tr>
                    <td>یک مقدار رشته ای در یک مبنای (پایه) تعیین شده برمیگرداند.</td>
                    <td>toString([radix])</td>
                </tr>
                <tr>
                    <td>مقدار عدد را برمیگرداند.</td>
                    <td dir="ltr">valueof()</td>
                </tr>
                <tr>
                    <td>یک رشته با نمایش حساس به زبان یک عدد را برمیگرداند.</td>
                    <td dir="ltr">toLocaleString()</td>
                </tr>
            </table>
            <p>مثال</p>
            <div class="code">
                <p>// آیا عدد صحیح است یا خیر <br>
                
                let a = 12; <br>
                
                console.log(Number.isInteger(a)); // true <br>
                
                // است یا خیرNaN آیا عدد <br>
                
                let b = NaN; <br>
                
                console.log(Number.isNaN(b)); // true <br>
                
                // نمایش تا دو رقم اعشار <br>
                
                let d = 5.1234; <br>
                
                console.log(d.toFixed(2)); // 5.12</p>
            </div>
            <h1>ویژگی های Number در جاوا اسکریپت</h1>
            <p>در جدول زیر لیست ویژگی ها برای داده های عددی در جاوا اسکریپت آورده شده است:</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>توضیحات</th>
                    <th>ویژگی</th>
                </tr>
                <tr>
                    <td>کمترین فاصله بین دو عدد قابل نمایش را برمیگرداند.</td>
                    <td>EPSILON</td>
                </tr>
                <tr>
                    <td>بزرگترین عدد صحیح در بازه امن را برمیگرداند.</td>
                    <td>MAX_SAFE_INTEGER</td>
                </tr>
                <tr>
                    <td>بزرگترین مقدار ممکن را برمیگرداند.</td>
                    <td>MAX_VALUE</td>
                </tr>
                <tr>
                    <td>کوچکترین عدد صحیح در بازه امن را برمیگرداند.</td>
                    <td>MIN_SAFE_INTEGER</td>
                </tr>
                <tr>
                    <td>کوچکترین مقدار ممکن را برمیگرداند.</td>
                    <td>MIN_VALUE</td>
                </tr>
                <tr>
                    <td>مقدار NaN یا غیر عددی را نشان می دهد.</td>
                    <td>NaN</td>
                </tr>
                <tr>
                    <td>منفی بی نهایت را نشان می دهد.</td>
                    <td>NEGATIVE_INFINITY</td>
                </tr>
                <tr>
                    <td>مثبت بی نهایت را نشان می دهد.</td>
                    <td>POSITIVE_INFINITY</td>
                </tr>
                <tr>
                    <td>امکان اضافه کردن ویژگی به اشیای عددی را فراهم می کند.</td>
                    <td>prototype</td>
                </tr>
            </table>
            <p>مثال</p>
            <div class="code">
                <p>// بزرگترین مقدار ممکن <br>
                
                let a = Number.MAX_VALUE; <br>
                
                console.log(a); // 1.7976931348623157e+308 <br>
                
                // بزرگترین عدد صحیح در بازه امن <br>
                
                a = Number.MAX_SAFE_INTEGER; <br>
                
                console.log(a); // 9007199254740991</p>
            </div>
            <h1>تابع ()Number در جاوا اسکریپت</h1>
            <p>تابع ()Number انواع داده های مختلف را به نوع عددی تبدیل می کند. مثال،</p>
            <div class="code">
                <p>let a = ’23’; // string <br>
                
                let b = true; // boolean <br>
                
                //تبدیل به عدد <br>
                
                let result1 = Number(a); <br>
                
                let result2 = Number(b); <br>
                
                console.log(result1); // 23 <br>
                
                console.log(result2); // 1</p>
            </div>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>