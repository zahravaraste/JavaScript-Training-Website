const questions = [
    {
      question:"چگونه یک تابع در جاوا اسکریپت ایجاد می کنید؟",
      answers: [
        { text: "()function:myFunction", correct: false},
        { text: "()function = myFunction", correct: false},
        { text: "()function myFunction", correct: true},
        { text: "()function-myFunction", correct: false},
      ]
    },
    {
      question:"کاربرد عملگر === چیست؟",
      answers: [
        { text: " اگر عملوندها با یکدیگر برابر باشند، true برمی گرداند.", correct: false},
        { text: " اگر عملوندها برابر اما از دو نوع مختلف باشند و یا اصلاً برابر نباشند، true برمی گرداند.", correct: false},
        { text: "اگر عملوندها برابر باشند و نوع آنها نیز یکی باشد، true برمی گرداند.", correct: true},
        { text: "این عملگر در جاوااسکریپت وجود ندارد.", correct: false},
      ]
    },
    {
      question:"کدام گزینه غلط است؟",
      answers: [
        { text: "نوع داده Boolean یا بولین یکی از دو مقدار true (درست) یا false (نادرست) را نشان می دهد.", correct: false},
        { text: "نوع داده Number یا عددی برای اعداد صحیح و اعشاری (اعشار و نمایی) استفاده می شود.", correct: false},
        { text: "null در جاوا اسکریپت یک مقدار خاص است که مقدار خالی یا ناشناخته را نشان می دهد. ", correct: false},
        { text: "یک مقدار با نوع داده Symbol می تواند به یک نماد (symbol) اشاره می کند. Symbol یک نوع داده اولیه تغییرپذیر است.", correct: true},
      ]
    },
    {
      question:"کدام گزینه صحیح است؟",
      answers: [
        { text: "دستور continue برای حلقه های while و do…while به طور مشابه کار می کند.", correct: true},
        { text: "دستور continue حلقه را خاتمه می دهد و کاملا از حلقه خارج می شود.", correct: false},
        { text: "دستور break فقط تکرار فعلی حلقه را نادیده می گیرد.", correct: false},
        { text: "در بیشتر مواقع دستور break در دستورات تصمیم گیری استفاده می شود.", correct: false},
      ]
    },
    {
      question:"برای مدیریت موارد استثنا در جاوا اسکریپت از کدام گزینه استفاده میکنیم؟",
      answers: [
        { text: "try…catch", correct: true},
        { text: "switch", correct: false},
        { text: "prototype", correct: false},
        { text: "hoisting", correct: false},
      ]
    },
    {
      question:"برای برگرداندن یک مقدار از تابع از کدام دستور استفاده می کنیم؟",
      answers: [
        { text: "const", correct: false},
        { text: "function", correct: false},
        { text: "return", correct: true},
        { text: "constructor", correct: false},
      ]
    },
    {
      question:"کدام گزینه در مورد متغیر با دامنه سراسری نادرست است؟",
      answers: [
        { text: "متغیری که در ابتدای برنامه یا خارج از یک تابع تعریف شود به عنوان یک متغیر با دامنه سراسری در نظر گرفته خواهد شد.", correct: false},
        { text: "متغیر سراسری در همه جای برنامه قابل دسترس است.", correct: false},
        { text: "اگر یک متغیر بدون تعریف استفاده شود آن متغیر به طور خودکار به یک متغیر سراسری تبدیل می شود.", correct: false},
        { text: "مقدار یک متغیر سراسری را نمی توان در داخل یک تابع تغییر داد.", correct: true},
      ]
    },
    {
      question:"برای دسترسی به ویژگی های شی در متدهای همان شی باید از کدام کلمه کلیدی استفاده کرد؟",
      answers: [
        { text: "object", correct: false},
        { text: "this", correct: true},
        { text: "instance", correct: false},
        { text: "new", correct: false},
      ]
    },
    {
      question:"کدام گزینه صحیح است؟",
      answers: [
        { text: " به مقدار getter باید به صورت یک متد دسترسی پیدا کنید.", correct: false},
        { text: "در جاوا اسکریپت از متدهای setter برای دسترسی به ویژگی های یک شی استفاده می شود.", correct: false},
        { text: " Setter باید دقیقاً یک پارامتر داشته باشد.", correct: true},
        { text: "متدهای getter در جاوا اسکریپت برای تغییر مقادیر ویژگی های شی استفاده می شود.", correct: false},
      ]
    },
    {
      question:"کدام گزینه بررسی می کند که آیا آرایه حاوی یک عنصر خاص است یا نه؟",
      answers: [
        { text: "()splice", correct: false},
        { text: "()slice", correct: false},
        { text: "()push", correct: false},
        { text: "()includes", correct: true},
      ]
    },
  ];
  
  const questionElement = document.getElementById("question");
  const answerButton = document.getElementById("answer-buttons");
  const nextButton = document.getElementById("next-btn");
  const resultLabel = document.getElementById("result");
  
  let currentQuestionIndex = 0;
  let score = 0;
  
  function startQuiz(){
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML = "next";
    showQuestion();
  }
  
  function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.
    question;
  
    currentQuestion.answers.forEach(answer => {
      const button = document.createElement("button");
      button.innerHTML = answer.text;
      button.classList.add("btn2");
      answerButton.appendChild(button);
      if(answer.correct){
        button.dataset.correct = answer.correct;
      }
      button.addEventListener("click",selectAnswer);
    });
  }
  
  function resetState(){
    while(answerButton.firstChild){
      answerButton.removeChild(answerButton.firstChild);
    }
  }
  
function selectAnswer(e){
  const selectedBtn = e.target;
  const isCorrect = selectedBtn.dataset.correct === "true";
  if(isCorrect){
    selectedBtn.classList.add("correct");
    score++;
  }else{
    selectedBtn.classList.add("incorrect");
  }
  Array.from(answerButton.children).forEach(button => {
    button.disabled = true;
  });
}

function showScore(){
  resetState();
  questionElement.innerHTML = `امتیاز شما ${score} از ${questions.length} است!`;
  nextButton.innerHTML = "دوباره آزمون میدهید؟";
  resultLabel.style.display= "block";
  checkButton.style.display= "block";
  nextButton.style.margin= "0";
  question.style.margin= "50px 0";
}

function handleNextButton(){
  currentQuestionIndex++;
  if(currentQuestionIndex < questions.length){
    showQuestion();
  }else{
    showScore();
  }
}

nextButton.addEventListener("click", ()=>{
  if(currentQuestionIndex < questions.length){
    handleNextButton();
  }else{
    startQuiz();
  }
});

  startQuiz();