<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>تبدیل نوع</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با تبدیل نوع در جاوا اسکریپت (JavaScript) همراه با مثال های مختلف آشنا خواهید شد. فرآیند تبدیل یک نوع داده به نوع دیگر داده را تبدیل نوع می گویند. در جاوا اسکریپت دو ​​نمونه تبدیل نوع وجود دارد:</p>
            <ul><li>تبدیل ضمنی</li>
            <li>تبدیل صریح</li></ul>
            <h1>تبدیل ضمنی</h1>
            <p>جاوا اسکریپت در شرایط خاص به طور خودکار یک نوع داده را به نوع دیگری (به نوع مناسب) تبدیل می کند، این تبدیل ضمنی است.</p>
            <p>مثال ۱: تبدیل ضمنی به رشته</p>
            <div class="code">
                <p>// استفاده رشته عددی با عملگر + نوع رشته ای را برمی گرداند <br>

let result; <br>

result = ‘3’ + 2; <br>

console.log(result) // “32” <br>

result = ‘3’ + true; <br>

console.log(result); // “3true” <br>

result = ‘3’ + undefined; <br>

console.log(result); // “3undefined” <br>

result = ‘3’ + null; <br>

console.log(result); // “3null”</p>
            </div>
            <p><b>نکته</b>:
            وقتی یک عدد با یک رشته جمع (عملگر +) شود، جاوا اسکریپت قبل از الحاق، عدد را به رشته تبدیل می کند.</p>
            <p>مثال ۲: تبدیل ضمنی به عدد</p>
            <div class="code">
                <p>// استفاده رشته عددی همراه با عملگرهای -، / و * نوع عددی را برمی گرداند <br>

let result; <br>

result = ‘4’ – 2; <br>

console.log(result); // 2 <br>

result = ‘4’ * 2; <br>

console.log(result); // 8<br>

result = ‘4’ / 2; <br>

console.log(result); // 2</p>
            </div>
            <p>مثال ۳: رشته غیر عددی NaN برمی گرداند</p>
            <div class="code">
                <p>// را برمی گرداندNaNاستفاده از رشته غیر عددی همراه با عملگرهای -، / و * مقدار <br>

let result; <br>

result = ‘hello’ – ‘world’; <br>

console.log(result); // NaN <br>

result = ‘4’ – ‘hello’; <br>

console.log(result); // NaN</p>
            </div>
            <p>مثال ۴: تبدیل ضمنی بولین به عدد</p>
            <div class="code">
                <p>// مقدار ۰ را برمی گرداندfalse مقدار ۱ و true اگر از نوع بولین استفاده شود، <br>

let result; <br>

result = ‘4’ – true; <br>

console.log(result); // 3 <br>

result = 4 + true; <br>

console.log(result); // 5 <br>

result = 4 + false; <br>

console.log(result); // 4</p>
            </div>
            <p><b>نکته</b>:
            در جاوا اسکریپت عدد ۰ معادل false و اعداد غیر صفر معادل با true در نظر گرفته می شوند. همچنین تبدیل true به عدد، مقدار ۱ را برمی گرداند.</p>
            <p>مثال ۵: تبدیل null به عدد</p>
            <div class="code">
                <p>// همراه با مقادیر عددی برابر با ۰ می شودnull <br>

let result; <br>

result = 4 + null; <br>

console.log(result); // 4  <br>

result = 4 – null; <br>

console.log(result); // 4 <br>

result = 4 * null; <br>

console.log(result); // 0</p>
            </div>
            <p>مثال ۶: نوع تعریف نشده با نوع عددی، بولین یا صفر</p>
            <div class="code">
                <p>// برمی گرداند NaN، مقدار nullعملیات حسابی نوع تعریف نشده با نوع عددی، بولین یا <br>

let result; <br>

result = 4 + undefined; <br>

console.log(result); // NaN <br>

result = 4 – undefined; <br>

console.log(result); // NaN <br>

result = true + undefined; <br>

console.log(result); // NaN <br>

result = null + undefined; <br>

console.log(result); // NaN</p>
            </div>
            <h1>تبدیل صریح</h1>
            <p>می توانید یک نوع داده را بر حسب نیاز به نوع دیگری تبدیل کنید. این نوع تبدیل دستی را تبدیل صریح می گویند.

در جاوا اسکریپت تبدیل نوع صریح با استفاده از روش های داخلی انجام می شود.</p>
            <p>در ادامه انواع تبدیل های صریح آورده شده است:</p>
            <p>مثال ۱- تبدیل صریح به عدد</p>
            <p>برای تبدیل رشته های عددی و مقادیر بولین به مقادیر عددی از ()Number استفاده می شود. مثال:</p>
            <div class="code">
                <p>let result; <br>

// تبدیل رشته به عدد <br>

result = Number(‘324’); <br>

console.log(result); // 324 <br>

result = Number(‘324e-1’) <br>

console.log(result); // 32.4 <br>

// تبدیل بولین به عدد <br>

result = Number(true); <br>

console.log(result); // 1 <br>

result = Number(false); <br>

console.log(result); // 0</p>
            </div>
            <p>در جاوا اسکریپت رشته های خالی و null، مقدار ۰ برمی گردانند.</p>
            <div class="code">
                <p>let result; <br>

result = Number(null); <br>

console.log(result); // 0 <br>

let result = Number(‘ ‘); <br>

console.log(result); // 0</p>
            </div>
            <p>اگر رشته عددی نباشد، NaN برمی گرداند.</p>
            <div class="code">
                <p>let result; <br>

result = Number(‘hello’); <br>

console.log(result); // NaN <br>

result = Number(undefined); <br>

console.log(result); // NaN <br>

result = Number(NaN); <br>

console.log(result); // NaN</p>
            </div>
            <p><b>نکته:</b>
            همچنین با استفاده از ()parseInt()، parseFloat، عملگر یگانی + و ()Math.floor نیز می توانید رشته را به عدد تبدیل کنید.</p>
            <div class="code">
                <p>let result; <br>

result = parseInt(‘20.01’); <br>

console.log(result); // 20 <br>

result = parseFloat(‘20.01’); <br>

console.log(result); // 20.01 <br>

// عملگر یگانی + <br>

result = +’20.01′; <br>

console.log(result); // 20.01 <br>

result = Math.floor(‘20.01’); <br>

console.log(result); // 20</p>
            </div>
            <p>مثال ۲- تبدیل صریح به رشته</p>
            <p>برای تبدیل انواع دیگر داده به رشته ها از ()String یا ()toString استفاده می شود.</p>
            <div class="code">
                <p>// تبدیل عدد به رشته <br>

let result; <br>

result = String(324); <br>

console.log(result); // “324” <br>

result = String(2 + 4); <br>

console.log(result); // “6” <br>

// تبدیل انواع دیگر به رشته <br>

result = String(null); <br>

console.log(result); // “null” <br>

result = String(undefined); <br>

console.log(result); // “undefined” <br>

result = String(NaN); <br>

console.log(result); // “NaN” <br>

result = String(true); <br>

console.log(result); // “true” <br>

result = String(false); <br>

console.log(result); // “false” <br>

// toString()استفاده از <br>

result = (324).toString(); <br>

console.log(result); // “324” <br>

result = true.toString(); <br>

console.log(result); // “true”</p>
            </div>
            <p>مثال ۳- تبدیل صریح به بولین</p>
            <p>برای تبدیل سایر انواع داده به نوع بولین از ()Boolean استفاده می شود.</p>
            <p>در جاوا اسکریپت undefined، null، ۰، NaN و “” به مقدار false تبدیل می شوند.</p>
            <div class="code">
                <p>let result; <br>

result = Boolean(”); <br>

console.log(result); // false  <br>

result = Boolean(0); <br>

console.log(result); // false <br>

result = Boolean(undefined); <br>

console.log(result); // false <br>

result = Boolean(null); <br>

console.log(result); // false <br>

result = Boolean(NaN); <br>

console.log(result); // false <br>

بقیه مقادیر true هستند. <br>

result = Boolean(324); <br>

console.log(result); // true <br>

result = Boolean(‘hello’); <br>

console.log(result); // true <br>

result = Boolean(‘ ‘); <br>

console.log(result); // true</p>
            </div>
            <h1>جدول تبدیل نوع در جاوا اسکریپت</h1>
            <p>جدول زیر تبدیل مقادیر مختلف به انواع رشته ای، عددی و بولین را در جاوا اسکریپت نشان می دهد.</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>مقدار</th>
                    <th>تبدیل رشته ای</th>
                    <th>تبدیل عددی</th>
                    <th>تبدیل بولین</th>
                </tr>
                <tr>
                    <td>۱</td>
                    <td>“۱”</td>
                    <td>۱</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>۰</td>
                    <td>“۰”</td>
                    <td>۰</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>“۱”</td>
                    <td>“۱”</td>
                    <td>۱</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>“۰”</td>
                    <td>“۰”</td>
                    <td>۰</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>“ten”</td>
                    <td>“ten”</td>
                    <td>NaN</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>true</td>
                    <td>“true”</td>
                    <td>۱</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>false</td>
                    <td>“false”</td>
                    <td>۰</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>null</td>
                    <td>“null”</td>
                    <td>۰</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>undefined</td>
                    <td>“undefined”	</td>
                    <td>NaN</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>“”</td>
                    <td>“”</td>
                    <td>۰</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>” “	</td>
                    <td>” “</td>
                    <td>۰</td>
                    <td>true</td>
                </tr>
            </table>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>