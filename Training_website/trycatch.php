<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>دستور try…catch…finally </h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با دستور try…catch…finally برای مدیریت موارد استثنا در جاوا اسکریپت (JavaScript) به کمک مثال های مختلف آشنا خواهید شد.</p>
            <p>بلوک های try، catch و finally برای کنترل موارد استثنا (نوعی خطا) استفاده می شوند. قبل از یادگیری آنها باید انواع خطا در برنامه نویسی را بشناسید.</p>
            <h1>انواع خطا</h1>
            <p>در برنامه نویسی دو نوع خطا وجود دارد:</p>
            <ul><li>خطای نحوی (Syntax): خطا در نحو (سینتکس یا گرامر کد). به عنوان مثال استفاده از کد consol.log(‘your result’); در برنامه منجر به خطای نحوی می شود چونکه املای کلمه console در این کد اشتباه است.</li>
            <li>خطای زمان اجرا (Runtime): این نوع خطا در هنگام اجرای برنامه رخ می دهد. مثل فراخوانی یک تابع یا یک متغیر نامعتبر.</li></ul>
            <p>به خطاهای زمان اجرا “استثنا” گفته می شود و در اینجا مدیریت این موارد استثنا را توضیح خواهیم داد.</p>
            <h1>دستور try…catch در جاوا اسکریپت</h1>
            <p>از دستور try…catch برای کنترل و مدیریت موارد استثنا استفاده می شود.</p>
            <p>ساختار دستور try … catch:</p>
            <div class="code">
                <p>try { <br>
                
                // try بدنه <br>
                
                } <br>
                
                catch(خطا) { <br>
                
                // catch بدنه <br>
                
                }</p>
            </div>
            <p>کد اصلی در داخل بلوک try است. اگر هنگام اجرای بلوک try خطایی رخ دهد برنامه به بلوک catch می رود. بلوک catch خطاهای رخ داده را دریافت می کند و می توانید آنها را مدیریت کنید.</p>
            <p>اگر خطایی رخ ندهد کد داخل بلوک try اجرا خواهد شد و بلوک catch نادیده گرفته می شود.</p>
            <h1>مثال ۱: نمایش متغیر تعریف نشده</h1>
            <div class="code">
                <p>// در برنامهtry…catch <br>
                
                const numerator= 100, denominator = ‘a’; <br>
                
                try { <br>
                
                console.log(numerator/denominator); <br>
                
                // تعریف نشده استa متغیر <br>
                
                console.log(a); <br>
                
                } <br>
                
                catch(error) { <br>
                
                console.log(‘An error caught’); <br>
                
                console.log(‘Error message: ‘ + error); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>NaN <br>
                
                An error caught <br>
                
                Error message: ReferenceError: a is not defined</p>
            </div>
            <p>در این برنامه متغیر a تعریف نشده است و وقتی برنامه به دستور چاپ این متغیر می رسد خطا رخ می دهد. این خطا در بلوک catch دریافت و متن خطا نمایش داده شده است.</p>
            <h1>دستور try…catch…finally</h1>
            <p>از دستور try…catch…finally نیز برای کنترل و بررسی موارد استثنا استفاده می شود. بلوک finally در هر دو حالت اجرا خواهد شد، چه کد خطا داشته باشه چه نداشته باشه.</p>
            <p>ساختار دستور try…catch…finally:</p>
            <div class="code">
                <p>try { <br>
                
                // try بلوک <br>
                
                } <br>
                
                catch(error) { <br>
                
                // catch بلوک <br>
                
                } <br>
                
                finally() { <br>
                
                // در هر صورت کدهای این بلوک اجرا می شود <br>
                
                }</p>
            </div>
            <p>مثال ۲: دستور try…catch…finally</p>
            <div class="code">
                <p>const numerator= 100, denominator = ‘a’; <br>
                
                try { <br>
                
                console.log(numerator/denominator); <br>
                
                console.log(a); <br>
                
                } <br>
                
                catch(error) { <br>
                
                console.log(‘An error caught’); <br>
                
                console.log(‘Error message: ‘ + error); <br>
                
                } <br>
                
                finally { <br>
                
                console.log(‘Finally will execute every time’); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>
                NaN <br>
                
                An error caught <br>
                
                Error message: ReferenceError: a is not defined <br>
                
                Finally will execute every time</p>
            </div>
            <p>در این برنامه خطایی رخ داده که توسط بلوک catch دریافت و کدهای این بلوک اجرا شده اند. سپس وارد بلوک finally شده است. در هر شرایطی کدهای این بلوک اجرا می شوند، چه برنامه موفق باشد و چه خطا رخ دهد.</p>
            <p><b>نکته:</b> بعد از دستور try باید از دستور catch یا finally استفاده کنید. در غیر اینصورت برنامه خطای زیر را نمایش خواهد داد:</p>
            <div class="code">
                <p>Uncaught SyntaxError: Missing catch or finally after try.</p>
            </div>
            <h1>try…catch در setTimeout</h1>
            <p>اگر مورد استثنایی در کدهای زمان بندی شده رخ دهد try…catch نمی تواند آن را دریافت کند. مانند ()setTimeout.</p>
            <div class="code">
                <p>try { <br>
                
                setTimeout(function() { <br>
                
                // خطا در کد <br>
                
                }, ۳۰۰۰); <br>
                
                } catch (e) { <br>
                
                console.log( “won’t work” ); <br>
                
                }</p>
            </div>
            <p>try…catch در کد بالا کار نمی کند چون ابتدا از ساختار try…catch خارج شده سپس تابع اجرا می شود.</p>
            <p>بلوک try…catch باید درون تابع باشد تا بتواند استثنا را در تابع زمان بندی شده گیر بیندازد.</p>
            <div class="code">
                <p>setTimeout(function() { <br>
                
                try { <br>
                
                // خطا در کد <br>
                
                } catch { <br>
                
                console.log( “error is caught” ); <br>
                
                } <br>
                
                }, ۳۰۰۰);</p>
            </div>
            <p>برای تعریف استثناهای موردنظرتان می توانید از دستور throw همراه با دستور try…catch استفاده کنید. در واقع این دستور به برنامه نویس امکان می دهد تا خطاهای سفارشی تعریف کند. به عنوان مثال یک عدد خاص بر ۰ تقسیم می شود حالا اگر می خواهید Infinity در برنامه به عنوان یک خطا در نظر گرفته شود می توانید با استفاده از دستور throw یک استثنا برای مدیریت آن تعریف کنید.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>