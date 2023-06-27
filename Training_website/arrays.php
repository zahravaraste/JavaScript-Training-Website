<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>آرایه ها</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش به کمک مثال های مختلف با آرایه در جاوا اسکریپت (JavaScript) آشنا خواهید شد.</p>
            <p>همانطور که می دانید هر متغیر می تواند یک مقدار را ذخیره کند. اگر بخواهید چندین مقدار را همزمان ذخیره کنید باید از آرایه استفاده کنید.</p>
            <p>آرایه (array) یک شی است که می تواند چندین عنصر را در خود ذخیره کند. مثال،</p>
            <div class="code">
                <p>let myArray = [‘hello’, ‘world’, ‘welcome’];</p>
            </div>
            <h1>ساخت آرایه</h1>
            <p>با دو روش می توانید یک آرایه ایجاد کنید:</p>
            <h1>۱- استفاده از array</h1>
            <p>ساده ترین راه برای ساخت آرایه استفاده از یک علامت array است یعنی علامت []. مثال،</p>
            <div class="code">
                <p>let array1 = [“eat”, “sleep”];</p>
            </div>
            <h1>۲- استفاده از کلمه کلیدی new</h1>
            <p>با استفاده از کلمه کلیدیnew نیز می توانید یک آرایه ایجاد کنید.</p>
            <div class="code">
                <p>let array2 = new Array(“eat”, “sleep”);</p>
            </div>
            <p>در هر دو مثال بالا یک آرایه با دو عنصر ایجاد شده است.</p>
            <p><b>نکته:</b> برای ساخت آرایه استفاده از array توصیه می شود.</p>
            <p>در اینجا نمونه های بیشتری از آرایه ها آورده شده است:</p>
            <div class="code">
                <p>// آرایه خالی  <br>
                
                let myList = [ ]; <br>
                
                // آرایه شامل مقادیر عددی <br>
                
                let numberArray = [ 2, 4, 6, 8]; <br>
                
                // آرایه شامل مقادیر رشته ای <br>
                
                let stringArray = [ ‘eat’, ‘work’, ‘sleep’]; <br>
                
                // آرایه با چند نوع مقدار متفاوت <br>
                
                let newData = [‘work’, ‘exercise’, 1, true];</p>
            </div>
            <p>علاوه بر این می توانید آرایه ها، توابع و اشیای دیگر را نیز در داخل یک آرایه ذخیره کنید. مثال،</p>
            <div class="code">
                <p>let newData = [ <br>
                
                {‘task1’: ‘exercise’}, <br>
                
                [۱, ۲ ,۳], <br>
                
                function hello() { console.log(‘hello’)} <br>
                
                ];</p>
            </div>
            <h1>دسترسی به عناصر آرایه</h1>
            <p>با استفاده از ایندکس (اندیس، شاخص یا index) می توانید به عناصر داخل آرایه دسترسی پیدا کنید.</p>
            <p><b>نکته:</b> ایندکس آرایه از ۰ شروع می شود نه ۱٫</p>
            <p>مثال،</p>
            <div class="code">
                <p>let myArray = [‘h’, ‘e’, ‘l’, ‘l’, ‘o’]; <br>
                
                // عنصر اول <br>
                
                console.log(myArray[0]); // “h” <br>
                
                // عنصر دوم <br>
                
                console.log(myArray[1]); // “e”</p>
            </div>
            <div class="image">
            <img src="images/img12.jpg" alt=""></div>
            <h1>اضافه کردن یک عنصر به آرایه</h1>
            <p>برای اضافه کردن یک عنصر به آرایه می توانید از متد داخلی ()push و ()unshift استفاده کنید.</p>
            <p>متد ()push یک عنصر در انتهای آرایه اضافه می کند و طول (جدید) آرایه را برمی گرداند. مثال،</p>
            <div class="code">
                <p>let dailyActivities = [‘eat’, ‘sleep’]; <br>
                
                // اضافه کردن عنصر به انتهای آرایه <br>
                
                dailyActivities.push(‘exercise’); <br>
                
                console.log(dailyActivities); // (3) [‘eat’, ‘sleep’, ‘exercise’]</p>
            </div>
            <p>متد ()unshift یک عنصر جدید به ابتدای آرایه اضافه می کند و طول (جدید) آرایه را برمی گرداند. مثلا،</p>
            <div class="code">
                <p>let dailyActivities = [‘eat’, ‘sleep’]; <br>
                
                // اضافه کردن عنصر به ابتدای آرایه <br>
                
                dailyActivities.unshift(‘work’); <br>
                
                console.log(dailyActivities); // (3) [‘work’, ‘eat’, ‘sleep’]</p>
            </div>
            <h1>تغییر عناصر آرایه</h1>
            <p>با دسترسی به مقدار ایندکس می توانید عناصر آرایه را اضافه کرده یا تغییر دهید.</p>
            <div class="code">
                <p>let dailyActivities = [ ‘eat’, ‘sleep’]; <br>
                
                // اضافه کردن عنصر جدید در ایندکس ۲ <br>
                
                dailyActivities[2] = ‘exercise’; <br>
                
                console.log(dailyActivities); // (3) [‘eat’, ‘sleep’, ‘exercise’]</p>
            </div>
            <p>فرض کنید یک آرایه دو عنصر دارد اگر بخواهید یک عنصر در ایندکس ۳ (عنصر چهارم) اضافه کنید آنگاه نوع داده عنصر سوم برابر با undefined (تعریف نشده) می شود. مثال،</p>
            <div class="code">
                <p>let dailyActivities = [ ‘eat’, ‘sleep’]; <br>
                
                // در ایندکس ۳’exercise’ اضافه کردن عنصر <br>
                
                dailyActivities[3] = ‘exercise’; <br>
                
                console.log(dailyActivities); // (4) [“eat”, “sleep”, undefined, “exercise”]</p>
            </div>
            <p>در کل اگر بخواهید عناصری در ایندکس های بالا اضافه کنید، مقدار ایندکس های بین آنها برابر با undefined خواهد بود.</p>
            <h1>حذف یک عنصر از آرایه</h1>
            <p>برای حذف آخرین عنصر از یک آرایه می توانید از متد ()pop استفاده کنید. این متد مقدار حذف شده را برمی گرداند. مثال،</p>
            <div class="code">
                <p>let dailyActivities = [‘work’, ‘eat’, ‘sleep’, ‘exercise’]; <br>
                
                // حذف آخرین عنصر <br>
                
                dailyActivities.pop(); <br>
                
                console.log(dailyActivities); // (3) [‘work’, ‘eat’, ‘sleep’] <br>
                
                // [‘work’, ‘eat’, ‘sleep’] حذف آخرین عنصر از آرایه <br>
                
                let removedElement = dailyActivities.pop(); <br>
                
                //مقدار حذف شده <br>
                
                console.log(removedElement); // ‘sleep’ <br>
                
                console.log(dailyActivities); // (2) [‘work’, ‘eat’]</p>
            </div>
            <p>برای حذف اولین عنصر می توانید از متد ()shift استفاده کنید. این متد عنصر اول را حذف می کند و آن را برمی گرداند. مثال،</p>
            <div class="code">
                <p>let dailyActivities = [‘work’, ‘eat’, ‘sleep’]; <br>
                
                // حذف عنصر اول <br>
                
                dailyActivities.shift(); <br>
                
                console.log(dailyActivities); // [‘eat’, ‘sleep’]</p>
            </div>
            <h1>طول آرایه</h1>
            <p>با استفاده از ویژگی length می توانید طول یک آرایه (تعداد عناصر موجود در آرایه) را پیدا کنید. مثال،</p>
            <div class="code">
                <p>let dailyActivities = [ ‘eat’, ‘sleep’]; <br>
                
                // تعداد همه عناصر آرایه را برمیگرداند <br>
                
                console.log(dailyActivities.length); // 2</p>
            </div> 
            <h1>متدهای آرایه</h1>
            <p>متدهای مختلفی برای آرایه ها در جاوا اسکریپت وجود دارد که انجام محاسبات را آسانتر می کنند. در جدول زیر تعدادی از متدهای رایج برای آرایه ها آورده شده است:</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>توضیحات</th>
                    <th>متد</th>
                </tr>
                <tr>
                    <td>دو یا چند آرایه را به هم متصل کرده و یک آرایه را برمیگرداند.</td>
                    <td dir="ltr">concat()</td>
                </tr>
                <tr>
                    <td>یک عنصر را در آرایه جستجو می کند و موقعیت آن را برمیگرداند.</td>
                    <td dir="ltr">indexOf()</td>
                </tr>
                <tr>
                    <td>اولین عنصر آرایه که با شرط ارسالی مطابقت داشته باشد را برمیگرداند.</td>
                    <td dir="ltr">find()</td>
                </tr>
                <tr>
                    <td>ایندکس اولین عنصر آرایه را که با شرط ارسالی مطابقت داشته باشد را برمیگرداند.</td>
                    <td dir="ltr">findIndex()</td>
                </tr>
                <tr>
                    <td>یک تابع را برای هر عنصر آرایه فراخوانی می کند.</td>
                    <td dir="ltr">forEach()</td>
                </tr>
                <tr>
                    <td>بررسی می کند که آیا آرایه حاوی یک عنصر خاص است یا نه؟</td>
                    <td dir="ltr">includes()</td>
                </tr>
                <tr>
                    <td>یک عنصر جدید به انتهای آرایه اضافه می کند و طول جدید آرایه را برمیگرداند.</td>
                    <td dir="ltr">push()</td>
                </tr>
                <tr>
                    <td>یک عنصر جدید به ابتدای آرایه اضافه می کند و طول جدید آرایه را برمیگرداند.</td>
                    <td dir="ltr">unshift()</td>
                </tr>
                <tr>
                    <td>آخرین عنصر آرایه را حذف کرده و آن را برمیگرداند.</td>
                    <td dir="ltr">pop()</td>
                </tr>
                <tr>
                    <td>اولین عنصر آرایه را حذف کرده و آن را برمیگرداند.</td>
                    <td dir="ltr">shift()</td>
                </tr>
                <tr>
                    <td>عناصر را به ترتیب حروف الفبا و به صورت صعودی مرتب می کند.</td>
                    <td dir="ltr">sort()</td>
                </tr>
                <tr>
                    <td>بخشی از آرایه را انتخاب کرده و آرایه جدید را برمیگرداند.</td>
                    <td dir="ltr">slice()</td>
                </tr>
                <tr>
                    <td>عناصر موجود را حذف یا جایگزین می کند و/ یا عناصر جدید اضافه می کند.</td>
                    <td dir="ltr">splice()</td>
                </tr>
            </table>
            <p>مثال: متدهای آرایه در جاوا اسکریپت</p>
            <div class="code">
                <p>let dailyActivities = [‘sleep’, ‘work’, ‘exercise’] <br>
                
                let newRoutine = [‘eat’]; <br>
                
                // مرتب کردن عناصر رایه به ترتیب حروف الفبا <br>
                
                dailyActivities.sort(); <br>
                
                console.log(dailyActivities); // [‘exercise’, ‘sleep’, ‘work’] <br>
                
                //پیدا کردن ایندکس مقدار ارسالی <br>
                
                let position = dailyActivities.indexOf(‘work’); <br>
                
                console.log(position); // 2 <br>
                
                // برگرداندن قسمتی ازآرایه <br>
                
                let newDailyActivities = dailyActivities.slice(1); <br>
                
                console.log(newDailyActivities); // [ ‘sleep’, ‘work’] <br>
                
                // اتصال دو آرایه <br>
                
                let routine = dailyActivities.concat(newRoutine); <br>
                
                console.log(routine); // [“exercise”, “sleep”, “work”, “eat”]</p>
            </div>
            <p><b>نکته:</b> اگر عنصر در آرایه نباشد، متد() indexOf  مقدار -۱ را بر میگرداند.</p>
            <h1>کار با آرایه های جاوا اسکریپت</h1>
            <p>در JavaScript آرایه یک شی است و ایندکس های آرایه، کلیدهای شی هستند.</p>
            <p>از آنجا که آرایه شی می باشد، عناصر آن با ارجاع ذخیره می شوند. بنابراین وقتی آرایه در متغیر دیگری کپی شود، هر تغییری در متغیر در آرایه اصلی نیز منعکس می شود. مثال،</p>
            <div class="code">
                <p>let arr = [‘h’, ‘e’]; <br>
                
                let arr1 = arr; <br>
                
                arr1.push(‘l’); <br>
                
                console.log(arr); // [“h”, “e”, “l”] <br>
                
                console.log(arr1); // [“h”, “e”, “l”]</p>
            </div>
            <p>همچنین می توانید مقادیر را با یک کلید نامگذاری شده (به جای ایندکس عددی) در آرایه ذخیره کنید. مثال،</p>
            <div class="code">
                <p>let arr = [‘h’, ‘e’]; <br>
                
                arr.name = ‘John’; <br>
                
                console.log(arr); // [“h”, “e”] <br>
                
                console.log(arr.name); // “John” <br>
                
                console.log(arr[‘name’]); // “John”</p>
            </div>
            <div class="image">
            <img src="images/img13.jpg" alt=""></div>
            <p>با این حال ذخیره مقادیر در آرایه با نام های دلخواه توصیه نمی شود.</p>
            <p>در جاوا اسکریپت اگر مقادیر در مجموعه مرتب شده قرار دارند باید از آرایه استفاده کنید در غیر این صورت بهتر است از شی با {} استفاده کنید.</p>
        </div>
    </section>

    <!-- comment section -->
    
    
<?php include 'footer.php';?>