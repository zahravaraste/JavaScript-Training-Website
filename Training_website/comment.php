<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>کامنت ها (توضیحات)</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با توضیحات در جاوا اسکریپت (JavaScript)، دلیل استفاده و کاربرد آنها آشنا خواهید شد. توضیحات یا کامنت ها در برنامه نویسی نکاتی هستند که هر برنامه نویس برای درک بهتر و خوانایی بیشتر به برنامه اضافه می کند. موتورهای جاوا اسکریپت این توضیحات را کاملاً نادیده می گیرند و از آنها رد می شوند.</p>
            <p>دو روش برای افزودن توضیحات وجود دارد:</p>
            <ul><li>// برای توضیحات تک خطی</li>
            <li>/ * */ برای توضیحات چند خطی</li></ul>
            <div class="image">
            <img src="images/comment.PNG" alt=""></div>
            <h1>توضیحات تک خطی</h1>
            <p>در جاوا اسکریپت هر خطی که با // شروع شود، نشان دهنده یک توضیح تک خطی است. مثال،</p>
            <div class="code">
                <p>name = “Jack”;<br>

// را چاپ می کند name مقدار متغیر <br>

console.log(“Hello ” + name);</p>
            </div>
            <p>در اینجا خط “مقدار متغیر name را چاپ می کند// ” یک توضیح است.</p>
            <p>همچنین می توانید توضیح تک خطی را به شکل زیر نیز استفاده کنید:</p>
            <div class="code">
                <p>name = “Jack”;<br>

console.log(“Hello ” + name); // را چاپ می کند name مقدار متغیر</p>
            </div>
            <h1>توضیحات چند خطی</h1>
            <p>توضیحات بیشتر از یک خط بین /* و */ قرار می گیرند. مثال،</p>
            <div class="code">
                <p>/* The following program contains the source code for a game called Baghchal <br>

Baghchal is a popular board game in Nepal where two players choose either sheep or tiger. It is played on a 5×5 grid.<br>

For the player controlling the tiger to win, they must capture all the sheep. There are altogether 4 tigers on the board.<br>

For the sheep to win, all tigers must be surrounded and cornered so that they cannot move. The player controlling the sheep has 20 sheep at his disposal.

*/</p>
            </div>
            <p>مثال بالا یک برنامه بازی است که قوانین بازی برای درک بهتر در چند خط توضیح داده شده است.</p>
            <h1>استفاده از توضیحات برای اشکال زدایی</h1>
            <p>از توضیحات می توان در فرآیند اشکال زدایی برای غیرفعال کردن قسمتی از کد برای جلوگیری از اجرای آن استفاده کرد. مثال،</p>
            <div class="code">
                <p>console.log(“some code”); <br>

console.log(“Error code”); <br>

console.log(“other code”);</p>
            </div>
            <p>اگر هنگام اجرای برنامه خطایی رخ دهد می توانید به جای حذف کد منبع خطا، با استفاده از توضیحات اجرای آن قسمت را غیرفعال کنید. این یک ابزار اشکال زدایی با ارزش است.</p>
            <div class="code">
                <p>console.log(“some code”); <br>

// console.log(“Error code”); <br>

console.log(“other code”);</p>
            </div>
            <p><b>نکته</b>:
                کلیدهای میانبر برای استفاده از توضیحات را به یاد داشته باشید. در بیشتر ویرایشگرها برای ویندوز کلید های Ctrl + / و برای مک Cmd + / می باشد.</p>
       
        <h1>درک کد را آسان کنید</h1>
        <p>به عنوان یک توسعه دهنده جاوا اسکریپت علاوه بر نوشتن کد خودتان ممکنه مجبور شوید کد نوشته شده توسط توسعه دهندگان دیگر را نیز تغییر دهید.</p>
        <p>اگر در کدنویسی خود از توضیحات استفاده کنید، خواندن و درک آن را به خصوص در زمان های بعدی آسان تر خواهید کرد و همچنین سایر توسعه دهندگان نیز راحت تر می توانند کد شما را بفهمند.</p>
        <p>به عنوان یک قانون کلی از توضیحات برای توضیح اینکه چرا کاری را انجام داده اید به جای اینکه چطور آن را انجام داده اید، استفاده کنید.</p>
    </div>
    </section>

    <!-- comment section -->


<?php include 'footer.php';?>













