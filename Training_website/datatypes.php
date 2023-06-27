<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>انواع داده ها</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با انواع داده در جاوا اسکریپت (JavaScript) همراه با مثال های مختلف آشنا خواهید شد.</p>
            <div class="code">
                <p>let x = 5; <br>

let y = “Hello”;</p>
            </div>
            <p>در اینجا،</p>
            <ul><li>۵ یک داده عددی صحیح است.</li>
            <li>“Hello” یک داده رشته ای است.</li></ul>
            <h1>انواع داده در جاوا اسکریپت</h1> <br>
            <div class="image">
            <img src="images/img5.jpg" alt=""></div>
            <p>در جاوا اسکریپت، ۸ نوع داده اصلی وجود دارد.</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>مثال</th>
                    <th>توضیحات</th>
                    <th>نوع داده</th>
                </tr>
                <tr>
                    <td dir="ltr">‘hello’, “hello world!”</td>
                    <td>نوع داده رشته ای برای مقادیر متنی</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td dir="ltr">۳, ۳٫۲۳۴, ۳e-2</td>
                    <td>نوع داده عددی برای اعداد صحیح یا اعشاری	</td>
                    <td>Number</td>
                </tr>
                <tr>
                    <td dir="ltr">۹۰۰۷۱۹۹۲۵۱۲۴۷۴۰۹۹۹n, 1n</td>
                    <td>نوع داده عددی برای اعداد صحیح با دقت دلخواه</td>
                    <td>BigInt</td>
                </tr>
                <tr>
                    <td dir="ltr">true و false</td>
                    <td>نوع داده بولین (یا منطقی) برای مقادیر دو حالته مثل درست یا غلط</td>
                    <td>Boolean</td>
                </tr>
                <tr>
                    <td dir="ltr">let a;</td>
                    <td>نوع داده برای متغیری که مقداردهی اولیه نشده</td>
                    <td>undefined</td>
                </tr>
                <tr>
                    <td dir="ltr">let a = null;</td>
                    <td>کلمه کلیدی برای مقدار نال یا تهی</td>
                    <td>null</td>
                </tr>
                <tr>
                    <td dir="ltr">let value = Symbol(‘hello’);</td>
                    <td>نوع داده برای نمونه های منحصر به فرد و تغییرناپذیر</td>
                    <td>Symbol</td>
                </tr>
                <tr>
                    <td dir="ltr">let student = { };</td>
                    <td>نوع داده شی به صورت جفت های کلید-مقدار	</td>
                    <td>Object</td>
                </tr>
            </table>
            <p>در اینجا همه انواع داده به جز Object انواع داده اولیه هستند در حالی که Objectها غیر اولیه هستند.</p>
            <p><b>نکته</b>:
            نوع داده Object (نوع غیر اولیه) می تواند مجموعه ای از داده ها را ذخیره کند در حالی که نوع داده اولیه فقط می تواند یک داده تنها را ذخیره کند.</p>
            <h1>String</h1>
            <p>نوع داده String یا رشته ای برای ذخیره مقدار متنی استفاده می شود. در جاوا اسکریپت، متن ها یا همان رشته ها بین دو علامت نقل قول (کوتیشن) قرار می گیرند:</p>
            <ul><li>نقل قول تکی یا سینگل کوتیشن: ‘Hello’</li>
            <li>نقل قول دوتایی یا دابل کوتیشن: “Hello”</li>
            <li>نقل قول وارونه: `Hello`</li></ul>
            <p>مثال:</p>
            <div class="code">
                <p>// مقادیر رشته ای<br>

                let name = ‘ram’;<br>

                let name1 = “hari”; <br>
                
                let result = `The names are ${name} and ${name1}`;</p>
            </div>
            <p>سینگل کوتیشن ها و دابل کوتیشن ها مشابه هم هستند و می توانید هر کدام را به دلخواه استفاده کنید.</p>
            <p>نقل قول های وارونه یا Backticks معمولاً زمانی استفاده می شوند که رشته شامل متغیر یا عبارت باشد. همانطور که در مثال بالا مشاهده می کنید، یک متغیر یا عبارت به صورت {متغیر یا عبارت}$ در داخل رشته نوشته شده است.</p>
            <h1>Number</h1>
            <p>نوع داده Number یا عددی برای اعداد صحیح و اعشاری (اعشار و نمایی) استفاده می شود. مثال،</p>
            <div class="code">
                <p>let number1 = 3;<br>
                let number2 = 3.433; <br>
                let number3 = 3e5; // 3 * 10^5</p>
            </div>
            <p>در جاوا اسکریپت یک نوع عددی می تواند مثبت بی نهایت (infinity)، منفی بی نهایت (infinity-) و یا NaN باشد (نه یک عدد). مثال،</p>
            <div class="code">
                <p>let number1 = 3/0; <br>

console.log(number1); // Infinity <br>

let number2 = -3/0; <br>

console.log(number2); // -Infinity</p>
            </div>
            <p>// مقدار رشته ای را نمی توان بر مقدار عددی تقسیم کرد</p>
            <div class="code">
                <p>let number3 = “abc”/3; <br>

console.log(number3); // NaN</p>
            </div>
            <h1>BigInt</h1>
            <p>نوع داده Number تنها می تواند اعداد بین (۱- ۲۵۳)- تا (۱- ۲۵۳) را نشان دهد. برای کار با اعداد بزرگتر یا کوچکتر می توانید از نوع داده BigInt استفاده کنید.</p>
            <p>نوع عدد BigInt با اضافه کردن حرف n به انتهای یک عدد صحیح ساخته می شود. به طور مثال،</p>
            <div class="code">
                <p>// BigInt <br>

let value = 900719925124740998n; <br>

// BitInt جمع دو مقدار با نوع <br>

let value1 = value + 1n; <br>

console.log(value1); // “900719925124740999n” <br>

value = 900719925124740998n; <br>

// را نمی توان با هم جمع کرد BitInt و numberخطا! دو نوع <br>

value1 = value + 1; <br>

console.log(value1);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>۹۰۰۷۱۹۹۲۵۱۲۴۷۴۰۹۹۹ <br>

Uncaught TypeError: Cannot mix BigInt and other types</p>
            </div>
            <p>خطا در خروجی بیان می کند که نوع داده BigInt را با نمی توان انواع دیگر داده ترکیب کرد.</p>
            <p><b>نکته</b>:
            نوع داده BigInt در نسخه های جدیدتر JavaScript معرفی شده است و در بسیاری از مرورگرها از جمله Safari پشتیبانی نمی شود.</p>
            <h1>Boolean</h1>
            <p>این نوع داده یک نوع منطقی را نشان می دهد. نوع داده Boolean یا بولین یکی از دو مقدار true (درست) یا false (نادرست) را نشان می دهد. در واقع تنها دو مقدار می تواند بگیرد و بین این دو مقدار جابه جا می شود. مثال،</p>
            <div class="code">
                <p>let dataChecked = true; <br>

let valueCounted = false;</p>
            </div>
            <h1>undefined</h1>
            <p>نوع داده undefined یا تعریف نشده، مقدار تخصیص داده نشده را نشان دهنده است. یعنی اگر متغیری تعریف شود اما مقداری در آن ذخیره نشود آنگاه مقدار آن متغیر undefined تعیین می شود. مثال،</p>
            <div class="code">
                <p>let name; <br>

console.log(name); // undefined</p>
            </div>
            <p>همچنین می توان به طور مستقیم مقدار یک متغیر را undefined تعریف کرد. مثال،</p>
            <div class="code">
                <p>let name = undefined; <br>

console.log(name); // undefined</p>
            </div>
            <p><b>نکته</b>:
            مقداردهی مستقیم undefined توصیه نمی شود. معمولاً برای مقادیر “ناشناخته” یا “خالی” از کلمه کلیدی null استفاده می شود.</p>
       
        <h1>null</h1>
        <p>null در جاوا اسکریپت یک مقدار خاص است که مقدار خالی یا ناشناخته را نشان می دهد. مثال،</p>
        <div class="code">
            <p>let number = null;</p>
        </div>
        <p>کد بالا نشان می دهد که متغیر number یک متغیر خالی است.</p>
        <p><b>نکته</b>:
        null را نمیتوان به صورت NULL یا Null نوشت.</p>
        <h1>Symbol</h1>
        <p>این نوع داده در نسخه جدید جاوا اسکریپت (از ES2015) معرفی شده است.</p>
        <p>یک مقدار با نوع داده Symbol می تواند به یک نماد (symbol) اشاره می کند. Symbol یک نوع داده اولیه تغییرناپذیر و منحصر به فرد است. در واقع symbol یک نوع داده اولیه شبیه number، string و … هست ولی یک شناسه دارد.</p>
        <p>هر بار با نوشتن ()Symbol یک نماد جدید و منحصر به فرد ساخته می شود که تضمین می کند هیچ متغیر دیگری این شناسه را ندارد و با سایر نمادها متفاوت است. مثال:</p>
        <div class="code">
            <p>// ‘hello’دو نوع نماد متمایز با تعریف های مشابه <br>

let value1 = Symbol(‘hello’); <br>

let value2 = Symbol(‘hello’);</p>
        </div>
        <p>گرچه مقدار هر دو متغیر value1 و value2 مثل هم به نظر می رسند و دارای مقدار ‘hello’ هستند اما چون نوع آنها از نوع Symbol است، با یکدیگر تفاوت دارند.</p>
        <h1>Object</h1>
        <p>Object یک نوع داده پیچیده است که امکان ذخیره سازی مجموعه ای از داده ها را فراهم می کند. مثال،</p>
        <div class="code">
            <p>let student = { <br>

firstName: ‘ram’, <br>

lastName: null, <br>

class: 10 <br>

};</p>
        </div>
        <h1>نوع داده در جاوا اسکریپت</h1>
        <p>در زبان جاوا اسکریپت، نوع داده به صورت پویا تعیین می شود. یعنی با مقداردهی به یک متغیر،به طور خودکار نوع داده آن نیز مشخص خواهد شد.

همچنین نوع داده متغیر می تواند در طول برنامه نیز تغییر کند. مثال:</p>
        <div class="code">
            <p>// داده از نوع تعریف نشده است <br>

let data; <br>

// داده از نوع عددی است <br>

data = 5; <br>

// داده از نوع رشته ای است <br>

data = “JavaScript Programming”;</p>
        </div>
        <h1>typeof در جاوا اسکریپت</h1>
        <p>برای تشخیص نوع داده متغیر می توانید از عملگر typeof استفاده کنید. مثال:</p>
        <div class="code">
            <p>let name = ‘ram’; <br>

typeof(name); // “string” <br>

let number = 4; <br>

typeof(number); // “number” <br>

let valueChecked = true; <br>

typeof(valueChecked); // “boolean”  <br>

let a = null; <br>

typeof(a); // “object”</p>
        </div>
        <p>دقت کنید که عملگر typeof برای مقدار null نوع داده “object” را برمی گرداند. این به عنوان یک مشکل در جاوا اسکریپت شناخته می شود.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>