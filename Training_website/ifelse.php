<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>دستور if else</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش با دستورات if و if … else در جاوا اسکریپت (JavaScript) به کمک مثال های مختلف آشنا خواهید شد.</p>
            <p>در برنامه نویسی ممکنه براساس شرایط چند مسیر مختلف در برنامه به وجود بیاد، در اینصورت باید تصمیم بگیرید که برنامه از کدام مسیر پیش برود. به عنوان مثال زمانیکه رتبه یک دانش آموز را برحسب نمراتش با A، B یا C تعیین می کنید.</p>
            <p>در چنین شرایطی که برنامه حاوی تصمیم گیری است از دستورات if یا if … else استفاده می شود.</p>
            <p>در جاوا اسکریپت سه حالت برای دستور if وجود دارد:</p>
            <p>۱- دستور if</p>
            <p>۲- دستور if…else</p>
            <p>۳- دستور if…else if…else</p>
            <h1>دستور if در جاوا اسکریپت</h1>
            <p>ساختار دستور if:</p>
            <div class="code">
                <p>if (شرط){ <br>
                
                // if بدنه دستور <br>
                
                }</p>
            </div>
            <p>دستور if شرط داخل پرانتز را بررسی می کند:</p>
            <p>۱- اگر شرط برقرار یا درست باشد، مقدار true را برمی گرداند و کد بدنه دستور if اجرا می شود.</p>
            <p>۲- اگر شرط نادرست باشد، مقدار false را برمی گرداند و کد بدنه دستور if نادیده گرفته می شود. برنامه نیز از دستور بعد از آکلاد بسته } ادامه می یابد.</p>
            <p><b>نکته:</b> کد داخل {} بدنه دستور if است.</p>
            <p>مثال ۱: دستور if</p>
            <div class="code">
                <p>//بررسی مثبت بودن عدد <br>
                
                let number = prompt(“Enter a number: “); <br>
                
                // بررسی می کند آیا عدد از صفر بزرگتر است <br>
                
                if (number > 0) { <br>
                
                // if بدنه دستور <br>
                
                console.log(“The number is positive”); <br>
                
                } <br>
                
                console.log(“The if statement is easy”);</p>
            </div>
            <p>خروجی ۱</p>
            <div class="code">
                <p>Enter a number: 2 <br>
                
                The number is positive <br>
                
                The if statement is easy</p>
            </div>
            <p>در مثال بالا فرض کنید کاربر عدد ۲ را وارد کند، در اینصورت عبارت شرطی number > 0 برقرار است و مقدار true را برمی گرداند. در نتیجه دستورات بدنه if اجرا می شو</p>
            <p>خروجی ۲</p>
            <div class="code">
                <p>Enter a number: -1 <br>
                
                The if statement is easy</p>
            </div>
            <p>فرض کنید کاربر عدد ۱- را وارد کند، در این حالت عبارت شرطی number > 0 برقرار نیست و مقدار false را برمی گرداند. در نتیجه دستورات بدنه if نادیده گرفته می شوند و برنامه از بعد دستور if (بعد از آکلاد بسته }) ادامه پیدا می کند.</p>
            <p>دستور</p>
            <p dir="ltr">console.log(“The if statement is easy”);</p>
            <p>بعد از بدنه دستور if اجرا می شود.</p>
            <p>عملگرهای مقایسه ای و منطقی برای ساخت عبارت های شرطی (در قسمت شرط) استفاده می شوند. برای کسب اطلاعات بیشتر درباره عملگرهای مقایسه ای و منطقی می توانید به آموزش عملگرهای مقایسه ای و منطقی در جاوا اسکریپت مراجعه کنید.</p>
            <h1>دستور if…else در جاوا اسکریپت</h1>
            <p>دستور if می تواند با قسمت else (اختیاری) نوشته شود. ساختار دستور if…else:</p>
            <div class="code">
                <p>if (شرط) { <br>
                
                // بلوک کد در صورت درست بودن شرط <br>
                
                } else { <br>
                
                // بلوک کد در صورت نادرست بودن شرط <br>
                
                }</p>
            </div>
            <p>دستور if…else شرط داخل پرانتز را بررسی می کند:</p>
            <p>اگر شرط برقرار یا درست باشد، مقدار true را برمی گرداند. سپس،</p>
            <p>۱- کد داخل بدنه دستور if اجرا می شود.</p>
            <p>۲- کد داخل بدنه دستور else نادیده گرفته می شود و اجرا نمی شود.</p>
            <p>اگر شرط نادرست باشد، مقدار false را برمی گرداند. سپس،</p>
            <p>۱- کد داخل بدنه دستور if نادیده گرفته می شود و اجرا نمی شود.</p>
            <p>۲- کد داخل بدنه دستور else اجرا می شود.</p>
            <p>مثال ۲: دستور if…else</p>
            <div class="code">
                <p>// بررسی می کند آیا عدد مثبت یا منفی/صفر است <br>
                
                let number = prompt(“Enter a number: “); <br>
                
                // بررسی می کند آیا عدد از صفر بزرگتر است <br>
                
                if (number > 0) { <br>
                
                console.log(“The number is positive”); <br>
                
                } <br>
                
                // اگر عدد بزرگتر از صفر نباشد <br>
                
                else { <br>
                
                console.log(“The number is either a negative number or 0”); <br>
                
                } <br>
                
                console.log(“The if…else statement is easy”);</p>
            </div>
            <p>خروجی ۱</p>
            <div class="code">
                <p>Enter a number: 2 <br>
                
                The number is positive <br>
                
                The if…else statement is easy</p>
            </div>
            <p>فرض کنید کاربر عدد ۲ را وارد کند. در این حالت عبارت شرطی number > 0 برقرار است و مقدار true را برمی گرداند. در نتیجه کد بدنه دستور if اجرا می شود و کد بدنه دستور else نادیده گرفته می شود.</p>
            <p>خروجی ۲</p>
            <div class="code">
                <p>Enter a number: -1
                
                The number is either a negative number or 0
                
                The if…else statement is easy</p>
            </div>
            <p>فرض کنید کاربر عدد ۱- را وارد کند. در این حالت عبارت شرطی number > 0 برقرار نیست و مقدار falseرا برمی گرداند. در نتیجه کد بدنه دستور if نادیده گرفته می شود و کد بدنه دستور else اجرا می شود.</p>
            <h1>if…else if…else در جاوا اسکریپت</h1>
            <p>از دستور if…else if…else برای اجرای کد با دو عبارت شرطی استفاده می شود. اگر انتخاب بین بیش از دو شرط باشد، این دستور قابل استفاده نیست.</p>
            <p>ساختار دستور if…else if…else:</p>
            <div class="code">
                <p>if (شرط۱){ <br>
                
                // بلوک کد۱ <br>
                
                } else if (شرط۲){ <br>
                
                // بلوک کد۲ <br>
                
                } else { <br>
                
                // بلوک کد۳ <br>
                
                }</p>
            </div>
            <ul><li>اگر شرط۱ برقرار باشد آنگاه بلوک کد۱ اجرا می شود.</li>
            <li>اگر شرط۱ برقرار نباشد، شرط۲ بررسی می شود.</li>
            <ul><li>اگر شرط۲ برقرار باشد آنگاه بلوک کد۲ اجرا می شود.</li>
            <li>اگر شرط ۲ برقرار نباشد آنگاه بلوک کد ۳ اجرا می شود.</li></ul></ul>
            <div class="image">
            <img src="images/img6.jpg" alt=""></div>
            <p>مثال ۳: دستور if…else if…else</p>
            <div class="code">
                <p>// بررسی می کند آیا عدد مثبت، منفی یا صفر است <br>
                
                let number = prompt(“Enter a number: “); <br>
                
                // بررسی می کند آیا عدد از صفر بزرگتر است <br>
                
                if (number > 0) { <br>
                
                console.log(“The number is positive”); <br>
                
                } <br>
                
                // بررسی می کند آیا عدد برابر با صفر است <br>
                
                else if (number == 0) { <br>
                
                console.log(“The number is 0”); <br>
                
                } <br>
                
                // عدد نه بزرگتر از صفر و نه برابر با صفر است <br>
                
                else { <br>
                
                console.log(“The number is negative”); <br>
                
                } <br>
                
                console.log(“The if…else if…else statement is easy”);</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>Enter a number: 0 <br>
                
                The number is 0 <br>
                
                The if…else if…else statement is easy</p>
            </div>
            <p>فرض کنید کاربر عدد ۰ را وارد می کند. شرط اول number > 0 برقرار نیست و مقدار false را برمی گرداند.</p>
            <p>سپس شرط دوم number == 0 بررسی می شود، شرط برقرار است و مقدار true را برمی گرداند و در نهایت بلوک کد مرتبط با if دوم اجرا می شود.</p>
            <h1>دستور if…else تو در تو</h1>
            <p>علاوه بر دستورات بالا می توانید دستور if … else را در داخل یک دستور if … else دیگر بنویسید. به این if … else هایی که در داخل یکدیگر نوشته می شوند، if … else تودرتو می گویند.</p>
            <p>مثال ۴: دستور if … else تو در تو</p>
            <div class="code">
                <p>// بررسی می کند آیا عدد مثبت، منفی یا صفر است <br>
                
                let number = prompt(“Enter a number: “); <br>
                
                if (number >= 0) { <br>
                
                if (number == 0) { <br>
                
                console.log(“You entered number 0”); <br>
                
                } else { <br>
                
                console.log(“You entered a positive number”); <br>
                
                } <br>
                
                } else { <br>
                
                console.log(“You entered a negative number”); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>Enter a number: 0 <br>
                
                You entered number 0</p>
            </div>
            <p>فرض کنید کاربر عدد ۰ را وارد می کند، در این حالت عبارت شرطی number > 0 برقرار نیست و مقدار false را برمی گرداند. سپس شرط دوم number == 0 بررسی می شود، شرط برقرار است و مقدار true را برمی گرداند و در نهایت بلوک کد مرتبط با آن اجرا می شود.</p>
            <p><b>نکته:</b> همانطور که مشاهده می کنید، if…else های تودرتو از نظر منطقی کد را پیچیده می کند پس در صورت امکان سعی کنید از آن اجتناب کنید.</p>
            <h1>if…else با یک دستور</h1>
            <p>اگر if…else فقط یک دستور در بدنه خود داشته باشد، می توانید { } را حذف کنید. مثال،</p>
            <div class="code">
                <p>let number = 2; <br>
                
                if (number > 0) { <br>
                
                console.log(“The number is positive.”); <br>
                
                } else { <br>
                
                console.log(“The number is negative or zero.”); <br>
                
                }</p>
            </div>
            <p>بدون {}</p>
            <div class="code">
                <p>let number = 2; <br>
                
                if (number > 0) <br>
                
                console.log(“The number is positive.”); <br>
                
                else <br>
                
                console.log(“The number is negative or zero.”);</p>
            </div>
            <p>خروجی هر دو برنامه یکی است.</p>
            <p>خروجی</p>
            <div class="code">
                <p>The number is positive.</p>
            </div>
            <p><b>نکته:</b>گرچه در این حالت استفاده از { } ضروری نیست اما برای خوانایی کد بهتر است از { } استفاده کنید.</p>
            <h1>گزینه های جایگزین تصمیم گیری</h1>
            <p>در شرایط خاص عملگر سه گانه می تواند جایگزین دستور if … else شود. اگر باید بین چند گزینه یکی انتخاب شود می توانید از دستور switch استفاده کنید.</p>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>