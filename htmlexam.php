<?php
session_start();
include 'connect.php';

$student_id = $_SESSION['student_id'];

if(!isset($student_id))
  header('location: login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iLearn Hub: Code Editor</title>
  <link rel="stylesheet" href="loggedin.css">
  <link rel="stylesheet" href="htexam.css">
  <link rel="icon" type="image/x-icon" href="main_icon.png">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/codemirror.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/codemirror.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/htmlmixed/htmlmixed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/css/css.min.js"></script>
  <style>
    .navbar {
    top: 0;
    padding: 10px;
    margin-right: 3%;
  }
  
  /* Navigation Links */
  .navbar a {
    text-decoration: none;
    color: White;
    font-weight: bold;
    padding: 10px;
    font-size: 20px;
    margin-left: 40px;
  }

  .navbar a:hover{
  background-color: rgb(41, 118, 211);
  border-radius: 7px;
  }

    .back-ground{
      background-color: #004643;
    }
    header{
      text-align: center;
      font-size: 50px;
      padding: 10px;
      background-color:#f9bc60;
      border-radius: 16px;
      margin-top: 8%;
      width: 50%;
      margin-left: 25%;
      
    }
  </style>
</head>
<body class="back-ground">
    <div class="section-1">
    <nav>
          <table>
            <tr>
            <td><a href="home.php"><img src="main_icon.png" class="main_icon"></td></a>
            <td><h1 class="logo"></h1></td>
            </tr>
            </table>
            <div class="navbar">
              <a href="home.php">Home</a>
              <a href="IDE.php">Compiler</a>
              <div class="dropdown">
                <a href="#">Courses</a>
                <div class="dropdown-content">
                  <a href="htmlcourse.php">HTML</a>
                  <a href="csscourse.php">CSS</a>
                </div>
              </div>
              <a href="tutorial.php">Tutorials</a> 
              <a href="team.php">About Us</a>
              <a href="student_portal.php">Classroom</a>
              <div class="dropdown">
              <a href="#">Assessments</a>
                <div class="dropdown-content">
                <a href="HtmlExam.php"> HTML EXAMINATION</a>
                <a href="cssexam.php"> CSS EXAMINATION</a>
                </div>
              </div> 
              <a href="logout.php">
               <i class="fas fa-sign-out-alt"></i> Log Out
              </a>
            </div>
        </nav>
      <header>HTML ASSESSMENTS</header>
      <div class="quiz-container" id="quiz">
        <div class="quiz-header">
          <h2 id="question">Question Text</h2>
          <progress max="100" value="0" id="progressBar"></progress>
          </div>
          
          <ul>
            <li>
              <input type="radio" name="answer" id="a" class="answer">
              <label for="a" id="a_text">Answer</label>
              
            </li>
            <li>
              <input type="radio" name="answer" id="b" class="answer">
              <label for="b" id="b_text">Answer</label>
            </li>
            <li>
              <input type="radio" name="answer" id="c" class="answer">
              <label for="c" id="c_text">Answer</label>
            </li>
            <li>
              <input type="radio" name="answer" id="d" class="answer">
              <label for="d" id="d_text">Answer</label>
            </li>
          </ul>
        <button id="submit">Submit</button>
      </div>

        <script>const quizData = [
          {
              question: "1. What does HTML stand for?",
              a: "Hyper links Markup Language",
              b: "Hyper Text Markup Language",
              c: "Hyper Tool Mockup Language",
              d: "Hyper Test Markup Languages",
              correct: "d",
          },
          {
              question: "2. What is the purpose of the HTML <head> element?",
              a: "It defines the main content of the document",
              b: "It contains metadata about the HTML document.",
              c: "It specifies the structure of the document.",
              d: "It defines a header for the document.",
              correct: "b",
          },
          {
              question: "3. In HTML, what does the attribute 'src' stand for?",
              a: "Source",
              b: "Script",
              c: "Style",
              d: "Syntax",
              correct: "a",
          },
          {
              question: "4. Which HTML tag is used to define the structure of an HTML document, including the title and metadata?",
              a: "<body>",
              b: "<head>",
              c: "<structure>",
              d: "<meta>",
              correct: "b",
          },
          {
              question: "5. Which HTML tag is used to define the main content of the document?",
              a: "<main>",
              b: "<body>",
              c: "<section>",
              d: "<content>",
              correct: "b",
          },
          {
              question: "6. Which of the following elements is used to define a table in HTML?",
              a: "<table>",
              b: "<tab>",
              c: "<tr>",
              d: "<td>",
              correct: "a",
          },
          {
              question: "7. What is the purpose of the HTML 'alt' attribute in the 'img' tag?",
              a: "Specifies the alignment of the image.",
              b: "Provides alternative text for browsers to display if the image cannot be loaded.",
              c: "Sets the background color behind the image.",
              d: "Defines the width of the image.",
              correct: "b",
          },
          {
              question: "8. Which HTML element is used to define the structure of an HTML document?",
              a: "<body>",
              b: "<head>",
              c: "<structure>",
              d: "<html>",
              correct: "d",
          },
          {
              question: "9. Which tag is used to create an ordered list in HTML?",
              a: "<ul>",
              b: "<ol>",
              c: "<li>",
              d: "<dl>",
              correct: "b",
          },
          {
              question: "10. What is the purpose of the HTML 'style' attribute?",
              a: "Specifies the text color of an element.",
              b: "Defines the font size of an element.",
              c: "Determines the layout of the document.",
              d: "Provides inline styling for an element.",
              correct: "d",
          },
          {
              question: "11. Choose the correct HTML element for the largest heading?",
              a: "<h6>",
              b: "<h1>",
              c: "<big>",
              d: "<head>",
              correct: "b",
          },
          {
              question: "12. What is the correct HTML element for inserting a line break?",
              a: "break",
              b: "<lb>",
              c: "<br>",
              d: "<line break>",
              correct: "c",
          },
          {
              question: "13. What is the correct HTML for adding a background color?",
              a: "<body style='background-color:yellow;'>",
              b: "<body bg = 'yellow'>",
              c: "<br>",
              d: "<background> background </background>",
              correct: "a",
          },
          {
              question: "14.Choose the correct HTML element to define important text",
              a: "<i>",
              b: "<important>",
              c: "<b>",
              d: "<strong>",
              correct: "d",
          },
          {
              question: "15.Choose the correct HTML element to define emphasized text.",
              a: "<emphasized>",
              b: "<italic>",
              c: "<em>",
              d: "<empa>",
              correct: "c",
          },
          {
              question: "16. HTML tags are used to describe document ___.",
              a: "definition",
              b: "content",
              c: "language",
              d: "model",
              correct: "b",
          },
          {
              question: "17.What is the correct HTML for creating a hyperlink?",
              a: "<a>name='http://www.w3schools.com'>W3Schools.com</a>",
              b: "<a href='http://www.w3schools.com'>W3Schools</a>",
              c: "<a>http://www.w3schools.com</a>",
              d: "<a url='http://www.w3schools.com'>W3Schools.com</a>",
              correct: "b",
          },
          {
              question: "18. Which character is used to indicate an end tag?",
              a: "<",
              b: "*",
              c: "/",
              d: "^",
              correct: "c",
          },
          {
              question: "19. Which of these elements are all <table> elements?",
              a: "<thead><body><tr>",
              b: "<table><tr><tt>",
              c: "<table><tr><tt>",
              d: "<table><tr><td>",
              correct: "d",
          },
          {
              question: "20. How can you make a numbered list?",
              a: "<list>",
              b: "<dl>",
              c: "<ol>",
              d: "<ul>",
              correct: "c",
          },
          {
              question: "21. How can you make a bulleted list?",
              a: "<ul>",
              b: "<list>",
              c: "<ol>",
              d: "<dl>",
              correct: "a",
          },
          {
              question: "22. HTML tags are surrounded by ___ brackets.",
              a: "Angle",
              b: "Curly",
              c: "Round",
              d: "Squart",
              correct: "a",
          },
          {
              question: "23. Who is making the Web standards?",
              a: "Google",
              b: "The World Wide Web Consortium",
              c: "Microsoft",
              d: "Mozilla",
              correct: "b",
          },
          {
              question: "24. Which HTML element is used to specify a header for a document or section?",
              a: "<section>",
              b: "<head>",
              c: "<top>",
              d: "<header>",
              correct: "d",
          },
          {
              question: "25. HTML program is saved using _________ extension.",
              a: ".htl",
              b: ".html",
              c: ".hml",
              d: ".htlm",
              correct: "b",
          },
          {
              question: "26. Who was the primary author of HTML?",
              a: "Sabeer Bhatiya",
              b: "Google Inc.",
              c: "Tim Berners-Lee",
              d: "Brendan Eich",
              correct: "c",
          },
          {
              question: "27. What is the correct way to comment out multiple lines in HTML?",
              a: "<!-- This is a comment -->",
              b: "// This is a comment //",
              c: "/* This is a comment */",
              d: "# This is a comment #",
              correct: "a",
          },
          {
              question: "28. HTML document can contain ___.",
              a: "Tags",
              b: "Plain Text",
              c: "Attributes",
              d: "All of the Above",
              correct: "d",
          },
          {
              question: "29. Who created the first web browser ?",
              a: "Tim Berners-Lee",
              b: "Jacobs Manalastas",
              c: "Marc Anderson",
              d: "Mozilla Reyes",
              correct: "a",
          },
          {
              question: "30. We can write HTML code using ___.",
              a: "Notepad",
              b: "Notepad++",
              c: "Sublime",
              d: "All of the Above",
              correct: "d",
          },

      ];
      const quiz= document.getElementById('quiz')
      const answerEls = document.querySelectorAll('.answer')
      const questionEl = document.getElementById('question')
      const a_text = document.getElementById('a_text')
      const b_text = document.getElementById('b_text')
      const c_text = document.getElementById('c_text')
      const d_text = document.getElementById('d_text')
      const submitBtn = document.getElementById('submit')
      let currentQuiz = 0
      let score = 0
      loadQuiz()
      function loadQuiz() {
          deselectAnswers()
          const currentQuizData = quizData[currentQuiz]
          questionEl.innerText = currentQuizData.question
          a_text.innerText = currentQuizData.a
          b_text.innerText = currentQuizData.b
          c_text.innerText = currentQuizData.c
          d_text.innerText = currentQuizData.d
      }
      function deselectAnswers() {
          answerEls.forEach(answerEl => answerEl.checked = false)
      }
      function getSelected() {
          let answer
          answerEls.forEach(answerEl => {
              if(answerEl.checked) {
                  answer = answerEl.id
              }
          })
          return answer
      }
const progressBar = document.getElementById('progressBar');
        const maxQuestions = quizData.length;

        function updateProgressBar() {
            const progressValue = (currentQuiz / maxQuestions) * 100;
            progressBar.value = progressValue;
        }

        submitBtn.addEventListener('click', () => {
            const answer = getSelected();
            if (answer) {
                if (answer === quizData[currentQuiz].correct) {
                    score++;
                }
                currentQuiz++;
                updateProgressBar(); // Update the progress bar on each question
                if (currentQuiz < quizData.length) {
                    loadQuiz();
                } else {
                    displayResult();
                }
            }
        });
          function displayResult() {
              const resultContainer = document.getElementById('quiz');
              let resultMessage;
              if (score < 15) {
                  resultMessage = `<h2>You answered ${score}/${quizData.length} questions correctly. You failed. Please try again.</h2>`;
              } else {
                  resultMessage = `<h2>You answered ${score}/${quizData.length} questions correctly. Congratulations! You passed.</h2>`;
              }
              resultContainer.innerHTML = resultMessage + '<button onclick="tryAgain()">Try Again</button> <button onclick="goHome()">Go Home</button>';
          }

          function tryAgain() {
            localStorage.removeItem('currentQuiz');
            location.reload();
        }

        function goHome() {
            localStorage.removeItem('currentQuiz');
            window.location.href = 'home.html';
        }
      </script>


  

</body>
</html>
