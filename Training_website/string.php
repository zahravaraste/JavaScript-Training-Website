<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>String</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با نوع داده string یا رشته ای در جاوا اسکریپت (JavaScript) به کمک مثال های مختلف آشنا خواهید شد.</p>
            <p>string یک نوع داده ابتدایی است که برای کار با متن استفاده می شود. مثال،</p>
            <div class="code">
                <p>let name = ‘John’;</p>
            </div>
            <h1>ساخت String در جاوا اسکریپت</h1>
            <p>هر رشته در جاوا اسکریپت با قرار گرقتن در علامت های کوتیشن یا نقل قول ایجاد می شود. سه نوع نقل قول وجود دارد:</p>
            <ul><li>نقل قول تکی یا سینگل کوتیشن: ‘Hello’</li>
            <li>نقل قول دوتایی یا دابل کوتیشن: “Hello”</li>
            <li>نقل قول وارونه: `Hello`</li></ul>
            <p>مثال:</p>
            <div class="code">
                <p>//مثال از رشته ها  <br>
                
                let name = ‘Peter’; <br>
                
                let name1 = “Jack”; <br>
                
                let result = `The names are ${name} and ${name1}`;</p>
            </div>
            <p>نقل قول تکی (تک کوتیشن) و نقل قول دوتایی (دابل کوتیشن) مشابه هم عمل می کنند و می توانید از هر کدام به دلخواه استفاده کنید.</p>
            <p>نقل قول وارونه (Backtick) هنگامی استفاده می شود که متغیر یا عبارت در رشته وجود داشته باشد مثل {متغیر یا عبارت}$، همانطور که در مثال بالا نشان داده شده است {name}$ و {name1}$.</p>
            <p>می توانید یک نقل قول را در داخل نقل قول دیگر بنویسید. مثال،</p>
            <div class="code">
                <p>let name = ‘My name is “Peter”.’;</p>
            </div>
            <p>اما نباید نوع نقل قول ها مثل هم باشد. مثال،</p>
            <div class="code">
                <p>let name = ‘My name is ‘Peter’.’; // error</p>
            </div>
            <h1>دسترسی به کاراکترهای رشته</h1>
            <p>با دو روش می توانید به کاراکترهای یک رشته دسترسی پیدا کنید.</p>
            <p>راه اول: رشته را به عنوان یک آرایه در نظر بگیرید. مثال،</p>
            <div class="code">
                <p>let a = ‘hello’; <br>
                
                console.log(a[1]); // “e” <br>
                
                راه دوم: استفاده از متد charAt(). مثال، <br>
                
                let a = ‘hello’; <br>
                
                console.log(a.charAt(1)); // “e”</p>
            </div>
            <h1>تغییرناپذیری رشته ها در جاوا اسکریپت</h1>
            <p>در جاوا اسکریپت رشته ها غیرقابل تغییر هستند یعنی کاراکترهای یک رشته را نمی توان تغییر داد. مثال،</p>
            <div class="code">
                <p>let a = ‘hello’; <br>
                
                a[0] = ‘H’; <br>
                
                console.log(a); // “hello”</p>
            </div>
            <p>اما می توانید یک رشته جدید را به متغیر اختصاص دهید. مثال،</p>
            <div class="code">
                <p>let a = ‘hello’; <br>
                
                a = ‘Hello’; <br>
                
                console.log(a); // “Hello”</p>
            </div>
            <h1>حساسیت به حروف در جاوا اسکریپت</h1>
            <p>جاوا اسکریپت به حروف کوچک و بزرگ حساس است (case-sensitive). یعنی حروف کوچک و بزرگ مشابه نیستند. مثال،</p>
            <div class="code">
                <p>let a = ‘a’; <br>
                
                let b = ‘A’ <br>
                
                console.log(a === b); // false</p>
            </div>
            <p>حروف a و A دو مقدار مختلف هستند.</p>
            <h1>رشته های چند خطی در جاوا اسکریپت</h1>
            <p>برای ایجاد یک رشته چند خطی می توانید از عملگر + یا عملگر \ استفاده کنید. مثال،</p>
            <div class="code">
                <p>// استفاده از عملگر + <br>
                
                let message1 = ‘This is a long message ‘ + <br>
                
                ‘that spans across multiple lines’ + <br>
                
                ‘in the code.’ <br>
                
                // \ استفاده از عملگر <br>
                
                let message2 = ‘This is a long message \ <br>
                
                that spans across multiple lines \ <br>
                
                in the code.’</p>
            </div>
            <h1>طول رشته در جاوا اسکریپت</h1>
            <p>برای پیدا کردن طول یک رشته (تعداد کاراکترهای رشته) می توانید از ویژگی داخلی length استفاده کنید. مثال،</p>
            <div class="code">
                <p>let a = ‘hello’; <br>
                
                console.log(a.length); // 5</p>
            </div>
            <h1>اشیای String در جاوا اسکریپت</h1>
            <p>می توانید یک شی رشته ای یا String را با استفاده از کلمه کلیدی new بسازید. مثال،</p>
            <div class="code">
                <p>let a = ‘hello’; <br>
                
                let b = new String(‘hello’); <br>
                
                console.log(a); // “hello” <br>
                
                console.log(b); // “hello” <br>
                
                console.log(typeof a); // “string” <br>
                
                console.log(typeof b); // “object”</p>
            </div>
            <p><b>نکته:</b> توصیه می شود از ساخت شی رشته ای خودداری کنید زیرا سرعت برنامه را کم می کند.</p>
            <h1>متدهای String در جاوا اسکریپت</h1>
            <p>در جدول زیر متدهای رایج String در جاوا اسکریپت آورده شده است.</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>توضیحات</th>
                    <th>متد</th>
                </tr>
                <tr>
                    <td>کاراکتر موجود در ایندکس مشخص شده را برمیگرداند.</td>
                    <td>charAt(index)</td>
                </tr>
                <tr>
                    <td>دو یا چند رشته را به هم متصل می کند.</td>
                    <td dir="ltr">concat()</td>
                </tr>
                <tr>
                    <td>یک رشته را جایگزین یک رشته دیگر می کند.</td>
                    <td dir="ltr">replace()</td>
                </tr>
                <tr>
                    <td>رشته را به آرایه ای از چند رشته تقسیم می کند.</td>
                    <td dir="ltr">split()</td>
                </tr>
                <tr>
                    <td>بخشی از رشته را برمیگرداند.</td>
                    <td>substr(start, length)</td>
                </tr>
                <tr>
                    <td>بخشی از رشته را برمیگرداند.</td>
                    <td>substring(start,end)</td>
                </tr>
                <tr>
                    <td>بخشی از رشته را برمی گرداند</td>
                    <td>slice(start, end)</td>
                </tr>
                <tr>
                    <td>کاراکترهای رشته ارسالی را به حروف کوچک تبدیل می کند.</td>
                    <td dir="ltr">toLowerCase()</td>
                </tr>
                <tr>
                    <td>کاراکترهای رشته ارسالی را به حروف بزرگ تبدیل می کند.</td>
                    <td dir="ltr">toUpperCase()</td>
                </tr>
                <tr>
                    <td>فضاهای خالی (فاصله های) ابتدا و انتهای رشته را حذف می کند.</td>
                    <td dir="ltr">trim()</td>
                </tr>
                <tr>
                    <td>یک رشته خاص را در رشته جستجو می کند و یک مقدار بولین را برمیگرداند.</td>
                    <td dir="ltr">includes()</td>
                </tr>
                <tr>
                    <td>یک رشته خاص را در رشته جستجو می کند و موقعیت آن را برمیگرداند.</td>
                    <td dir="ltr">search()</td>
                </tr>
            </table>
            <p>مثال: متدهای رشته ای در جاوا اسکریپت</p>
            <div class="code">
                <p>let text1 = ‘hello’; <br>
                
                let text2 = ‘world’; <br>
                
                let text3 = ‘ JavaScript ‘; <br>
                
                // اتصال چند رشته <br>
                
                let result1 = text1.concat(‘ ‘, text2); <br>
                
                console.log(result1); // “hello world” <br>
                
                // تبدیل به حروف بزرگ <br>
                
                let result2 = text1.toUpperCase(); <br>
                
                console.log(result2); // HELLO <br>
                
                // حذف فاصله ار ابتدا و انتهای رشته <br>
                
                let result3 = text3.trim(); <br>
                
                console.log(result3); // JavaScript <br>
                
                // تبدیل یک رشته به یک آرایه <br>
                
                let result4 = text1.split(); <br>
                
                console.log(result4); // [“hello”] <br>
                
                // به دست آوردن بخشی از رشته <br>
                
                let result5= text1.slice(1, 3); <br>
                
                console.log(result5); // “el”</p>
            </div>
            <h1>تابع ()String در جاوا اسکریپت</h1>
            <p>تابع ()String انواع داده های مختلف را به رشته تبدیل می کند. مثال،</p>
            <div class="code">
                <p>let a = 225; // string <br>
                
                let b = true; // boolean <br>
                
                //converting to number <br>
                
                let result1 = String(a); <br>
                
                let result2 = String(b); <br>
                
                console.log(result1); // “225” <br>
                
                console.log(result2); // “true”</p>
            </div>
            <p>برای اطلاعات بیشتر درباره تبدیل رشته ای به آموزش تبدیل نوع در جاوا اسکریپت مراجعه کنید.</p>
            <h1>کاراکتر Escape</h1>
            <p>برای escape می توانید از کاراکتر بک اسلش \ برای قرار دادن کاراکترهای خاص در یک رشته استفاده کنید. کاراکترهای escape باعث می شوند تا رشته به صورت متنی حفظ شود و از تبدیل رشته به کد شناسایی و نفوذ جلوگیری می کند. مثال،</p>
            <div class="code">
                <p>let name = ‘My name is \’Peter\’.’; <br>
                
                console.log(name);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>My name is ‘Peter’.</p>
            </div>
            <p>در مثال بالا علامت نقل قول ‘ (که مشابه نقل قول رشته است) در \ قرار گرفته است.</p>
            <p>از \ می توانید در روش های زیر نیز استفاده کنید:</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>خروجی</th>
                    <th dir="ltr">کد</th>
                </tr>
                <tr>
                    <td>برای نقل قول مضاعف</td>
                    <td dir="ltr">\”</td>
                </tr>
                <tr>
                    <td>برای یک بک اسلش \</td>
                    <td dir="ltr">\</td>
                </tr>
                <tr>
                    <td>برای خط جدید</td>
                    <td dir="ltr">\n</td>
                </tr>
                <tr>
                    <td>برای رفتن سر خط</td>
                    <td dir="ltr">\r</td>
                </tr>
                <tr>
                    <td>تب عمودی</td>
                    <td dir="ltr">\v</td>
                </tr>
                <tr>
                    <td>تب افقی</td>
                    <td dir="ltr">\t</td>
                </tr>
                <tr>
                    <td>بازگشت به عقب (backspace)</td>
                    <td dir="ltr">\b</td>
                </tr>
                <tr>
                    <td>form feed</td>
                    <td dir="ltr">\f</td>
                </tr>
            </table>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>