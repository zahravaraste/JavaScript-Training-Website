<?php include 'header.php';?>

    <div class="heading" style="background-image: url(images/headlines.jpg)";>
        <h1>Symbol</h1>
    </div>

    <!-- comment section -->

    <section class="main-content">
        <div class="content">
            <p>در این آموزش به کمک مثال های مختلف با نوع Symbol در جاوا اسکریپت (JavaScript) آشنا خواهید شد.</p>
            <p>جاوا اسکریپت ES6 یک نوع داده ابتدایی جدید به نام Symbol (سمبل) معرفی کرده است. Symbolها تغییرناپذیر و منحصر به فرد هستند. مثال،</p>
            <div class="code">
                <p>// با توضیحات یکسانSymbol دو <br>
                
                let value1 = Symbol(‘hello’); <br>
                
                let value2 = Symbol(‘hello’); <br>
                
                console.log(value1 === value2); // false</p>
            </div>
            <p>گرچه value1 و value2 هر دو توضیح یکسانی دارند اما متفاوت هستند.</p>
            <h1>ساخت Symbol</h1>
            <p>برای ساخت یک Symbol از تابع ()Symbol استفاده می شود.</p>
            <div class="code">
                <p>// Symbol ساخت <br>
                
                const x = Symbol() <br>
                
                typeof x; // symbol</p>
            </div>
            <p>می توانید یک رشته اختیاری به عنوان توضیح ارسال کنید. مثال،</p>
            <div class="code">
                <p>const x = Symbol(‘hey’); <br>
                
                console.log(x); // Symbol(hey)</p>
            </div>
            <h1>دسترسی به توضیح Symbol</h1>
            <p>برای دسترسی به توضیح یک Symbol از عملگر نقطه . استفاده می شود.</p>
            <div class="code">
                <p>const x = Symbol(‘hey’); <br>
                
                console.log(x.description); // hey</p>
            </div>
            <h1>اضافه کردن Symbol به عنوان کلید شی</h1>
            <p>با استفاده از کروشه [ ] می توانید symbolها را به عنوان کلید ویژگی برای شی قرار دهید. مثال،</p>
            <div class="code">
                <p>let id = Symbol(“id”); <br>
                
                let person = { <br>
                
                name: “Jack”, <br>
                
                // به عنوان کلیدsymbol اضافه کردن <br>
                
                [id]: 123 // not “id”: 123 <br>
                
                }; <br>
                
                console.log(person); // {name: “Jack”, Symbol(id): 123}</p>
            </div>
            <h1>Symbol در حلقه for…in</h1>
            <p>حلقه for…in ویژگی های شی با کلید Symbol را پیمایش نمی کند. مثال،</p>
            <div class="code">
                <p>let id = Symbol(“id”); <br>
                
                let person = { <br>
                
                name: “Jack”, <br>
                
                age: 25, <br>
                
                [id]: 12 <br>
                
                }; <br>
                
                // for…in استفاده از حلقه <br>
                
                for (let key in person) { <br>
                
                console.log(key); <br>
                
                }</p>
            </div>
            <p>خروجی</p>
            <div class="code">
                <p>name <br>
                
                age</p>
            </div>
            <h1>مزیت استفاده از Symbol در شی</h1>
            <p>اگر از یک قطعه کد مشابه در برنامه های مختلف استفاده می شود، بهتر است از symbol در کلید شی استفاده کنید. زیرا می توانید از یک نام کلید مشابه در کدهای مختلف استفاده کنید و از مشکلات تکرار و دوباره نویسی جلوگیری کنید.</p>
            <div class="code">
                <p>let person = { <br>
                
                name: “Jack” <br>
                
                }; <br>
                
                // symbol ساخت <br>
                
                let id = Symbol(“id”); <br>
                
                // به عنوان کلید symbolاضافه کردن <br>
                
                person[id] = 12;</p>
            </div>
            <p>در مثال بالا اگر شی person در برنامه دیگری استفاده شود، نیازی نیست تا ویژگی اضافه شود که توسط برنامه دیگری قابل دسترسی یا قابل تغییر باشد. در نتیجه با استفاده از Symbol یک ویژگی منحصر به فرد ایجاد می کنید که می توانید از آن استفاده کنید.</p>
            <p>حالا اگر برنامه دیگری نیز نیاز به ویژگی با نام id دارد فقط کافیست یک Symbol به نام id را اضافه کنید و مشکلات دوباره نویسی هم به وجود نمی آید.</p>
            <div class="code">
                <p>let person = { <br>
                
                name: “Jack” <br>
                
                }; <br>
                
                let id = Symbol(“id”); <br>
                
                person[id] = “Another value”;</p>
            </div>
            <p>در این مثال حتی اگر از نام مشابه برای ذخیره مقادیر استفاده شود، نوع داده Symbol یک مقدار منحصر به فرد خواهد داشت.</p>
            <p>در اینجا اگر از کلید رشته ای استفاده شود، برنامه بعدی می تواند مقدار ویژگی را تغییر دهد. مثال،</p>
            <div class="code">
                <p>let person = { <br>
                
                name: “Jack” <br>
                
                }; <br>
                
                // استفاده از نوع رشته ای برای کلید <br>
                
                person.id = 12; <br>
                
                console.log(person.id); // 12 <br>
                
                // تغییر مقدار در برنامه دیگر <br>
                
                person.id = ‘Another value’; <br>
                
                console.log(person.id); // Another value</p>
            </div>
            <p>در این مثال مقدار person.id تغییر یافته است.</p>
            <h1>متدهای Symbol</h1>
            <p>در جدول زیر متدها مختلف برای نوع داده Symbol توضیح داده شده است.</p>
            <table cellspacing=0 class="table">
                <tr>
                    <th>توضیحات</th>
                    <th>متد</th>
                </tr>
                <tr>
                    <td>برای نمادهای موجود جستجو می کند.</td>
                    <td dir="ltr">for()</td>
                </tr>
                <tr>
                    <td>کلید symbol به اشتراک گذاشته را از رجیستری symbol سراسری برمیگرداند.</td>
                    <td dir="ltr">keyFor()</td>
                </tr>
                <tr>
                    <td>رشته ای حاوی منبع شی Symbol را برمیگرداند.</td>
                    <td dir="ltr">toSource()</td>
                </tr>
                <tr>
                    <td>رشته ای حاوی توضیح Symbol را برمیگرداند.</td>
                    <td dir="ltr">toString()</td>
                </tr>
                <tr>
                    <td>مقدار ابتدایی شی Symbol را برمیگرداند.</td>
                    <td dir="ltr">valueOf()</td>
                </tr>
            </table>
            <p>مثال: متدهای Symbol</p>
            <div class="code">
                <p>// با استفاده از نام symbol گرفتن <br>
                
                let sym = Symbol.for(‘hello’); <br>
                
                let sym1 = Symbol.for(‘id’); <br>
                
                // Symbol گرفتن نام با استفاده از <br>
                
                console.log( Symbol.keyFor(sym) ); // hello <br>
                
                console.log( Symbol.keyFor(sym1) ); // id</p>
            </div>
            <h1>ویژگی های Symbol</h1>
            <table cellspacing=0 class="table">
                <tr>
                    <th>توضیحات</th>
                    <th>ویژگی</th>
                </tr>
                <tr>
                    <td>AsyncIterator پیشفرض برای شی را برمیگرداند.</td>
                    <td>asyncIterator</td>
                </tr>
                <tr>
                    <td>تعیین می کند آیا سازنده شی یک شی را به عنوان نمونه خود تشخیص می دهد.</td>
                    <td>hasInstance</td>
                </tr>
                <tr>
                    <td>نشان می دهد آیا یک شی باید به عناصر آرایه اش مسطح شود یا نه؟</td>
                    <td>isConcatSpreadable</td>
                </tr>
                <tr>
                    <td>تکرار کننده پیشفرض شی را برمیگرداند.</td>
                    <td>iterator</td>
                </tr>
                <tr>
                    <td>با یک رشته مطابقت می دهد.</td>
                    <td>match</td>
                </tr>
                <tr>
                    <td>یک تکرار کننده برمیگرداند که تطبیق های یک عبارت منظم با یک رشته را ایجاد می کند.</td>
                    <td>matchAll</td>
                </tr>
                <tr>
                    <td>زیر رشته های یک رشته تطبیق یافته را جایگزین می کند.</td>
                    <td>replace</td>
                </tr>
                <tr>
                    <td>ایندکس داخل رشته را برمیگرداند که با عبارت منظم مطابقت دارد.</td>
                    <td>search</td>
                </tr>
                <tr>
                    <td>شته ای را به ایندکس هایی تقسیم می کند که با عبارت منظم مطابقت دارند.</td>
                    <td>split</td>
                </tr>
                <tr>
                    <td>اشیا مشتق شده ایجاد می کند.</td>
                    <td>species</td>
                </tr>
                <tr>
                    <td>یک شی را به یک مقدار ابتدایی تبدیل می کند.</td>
                    <td>toPrimitive</td>
                </tr>
                <tr>
                    <td>برای توصیف پیشفرض یک شی استفاده می شود.</td>
                    <td>toStringTag</td>
                </tr>
                <tr>
                    <td>رشته حاوی توضیح symbol</td>
                    <td>Description</td>
                </tr>
            </table>
            <p>مثال: ویژگی های Symbol</p>
            <div class="code">
                <p>const x = Symbol(‘hey’); <br>
                
                // description ویژگی <br>
                
                console.log(x.description); // hey <br>
                
                const stringArray = [‘a’, ‘b’, ‘c’]; <br>
                
                const numberArray = [1, 2, 3]; <br>
                
                // isConcatSpreadable ویژگی <br>
                
                numberArray[Symbol.isConcatSpreadable] = false; <br>
                
                let result = stringArray.concat(numberArray); <br>
                
                console.log(result); // [“a”, “b”, “c”, [1, 2, 3]]</p>
            </div>
        </div>
    </section>

    <!-- comment section -->

<?php include 'footer.php';?>