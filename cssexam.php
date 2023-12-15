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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="htexam.css">
    <link rel="stylesheet" href="loggedin.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
      <title>INTRODUCTION TO CSS EXAMINATION</title>
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
    
</head>
<body>
    <header>INTRODUCTION TO CSS ASSESSMENTS</header>
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
              question: "1. What does CSS stand for?",
              a: "Cascading Style Script",
              b: "Central Style Sheet",
              c: "Cascading Style Sheets",
              d: "Computer Style Sheets",
              correct: "c",
          },
          {
              question: "2. What is the purpose of the CSS 'margin' property?",
              a: "Adjusts the space inside an element",
              b: "Adds space outside an element",
              c: "Sets the width of an element",
              d: "Defines the height of an element",
              correct: "b",
          },
          {
              question: "3. Which CSS property is used for changing the text color of an element?",
              a: "color",
              b: "font-color",
              c: "text-color",
              d: "text-style",
              correct: "a",
          },
          {
              question: "4. What's the purpose of CSS?",
              a: "To define the structure of a webpage",
              b: "To control the presentation and style of a webpage",
              c: "To handle the interactivity of a webpage",
              d: "To manage the functionality of a webpage",
              correct: "b",
          },
          {
              question: "5. Which CSS property controls the size of text?",
              a: "font-size",
              b: "text-size",
              c: "text-style",
              d: "font-style",
              correct: "a",
          },
          {
              question: "6. Which property is used to change the background color of an element?",
              a: "background-color",
              b: "background color",
              c: "bg-color",
              d: "bgcolor",
              correct: "a",
          },
          {
              question: "7. What does the acronym 'RGB' stand for in the context of CSS?",
              a: "Red Green Blue",
              b: "Red Gray Black",
              c: "Raspberry Gold Broze",
              d: "Rose Ginger Beige",
              correct: "a",
          },
          {
              question: "8. Which CSS property is used to control the space between elements?",
              a: "space",
              b: "margin",
              c: "padding",
              d: "distance",
              correct: "b",
          },
          {
              question: "9. What does CSS primarily define?",
              a: "Content structure",
              b: "Document semantics",
              c: "Presentation style",
              d: "Interactive behavior",
              correct: "c",
          },
          {
              question: "10. Which CSS property changes the style of the cu",
              a: "cursor-type",
              b: "cursor-style",
              c: "mouse-cursor",
              d: "cursor",
              correct: "d",
          },
          {
              question: "11.  Which property is used in CSS to change the font of an element?",
              a: "font-family",
              b: "font-type",
              c: "text-font",
              d: "change-fontstyle",
              correct: "a",
          },
          {
              question: "12. Which CSS property is used to create space between the element's border and inner content?",
              a: "margin",
              b: "padding",
              c: "space-between",
              d: "gap",
              correct: "b",
          },
          {
              question: "13. In CSS, how do you select an element by its Class?",
              a: ".elementID",
              b: "#elementID",
              c: "element.ID",
              d: "id.element",
              correct: "a",
          },
          {
              question: "14. How do you add a comment in CSS?",
              a: "// This is a comment //",
              b: "'This is a comment'",
              c: "/* This is a comment */",
              d: "<!-- This is a comment -->",
              correct: "c",
          },
          {
              question: "15. Which property is used to create rounded corners in CSS?",
              a: "corner-radius",
              b: "border-style",
              c: "border-radius",
              d: "border-corner",
              correct: "d",
          },
          {
              question: "16. The # symbol specifies that the selector is?",
              a: "class",
              b: "tag",
              c: "first",
              d: "id",
              correct: "d",
          },
          {
              question: "17. Which is the correct CSS syntax?",
              a: "{p:color=black(p}",
              b: "p {color: black;}",
              c: "{p;color:black}",
              d: "p:color=black",
              correct: "b",
          },
          {
              question: "18. How do you make a list not display bullet points?",
              a: "list-style-type: no-bullet",
              b: "list: none",
              c: "bulletpoints: none",
              d: "list-style-type: none",
              correct: "d",
          },
          {
              question: "19. Which HTML attribute is used to define inline CSS styles?",
              a: "CSS",
              b: "Style",
              c: "ID",
              d: "Type",
              correct: "b",
          },
          {
              question: "20. What are the three different ways to include CSS in a web page?",
              a: "Inside, Outline, Exline",
              b: "Intext, External, Outside",
              c: "Inline, Internal, External",
              d: "None of the Above",
              correct: "c",
          },
          {
              question: "21. Which of the following property is used to align the text of a document?",
              a: "text-indent",
              b: "text-transform",
              c: "text-decoration",
              d: "text-align",
              correct: "d",
          },
          {
              question: "22. Which of the following defines a measurement in centimeters?",
              a: "ex",
              b: "%",
              c: "cm",
              d: "em",
              correct: "c",
          },
          {
              question: "23. What is the correct HTML for referring to an external style sheet?",
              a: "<stylesheet>mystyle.css</stylesheet>",
              b: "<style src='mystyle.css'>",
              c: "<link rel='stylesheet' type='text/css' href='mystyle.css'>",
              d: "<link style src='mystyle.css'>",
              correct: "c",
          },
          {
              question: "24. Which of the following CSS selectors are used to specify a group of elements?",
              a: "tag",
              b: "id",
              c: "class",
              d: "both class and tag",
              correct: "c",
          },
          {
              question: "25. Which of the following has introduced text, list, box, margin, border, color, and background properties?",
              a: "PHP",
              b: "Ajax",
              c: "CSS",
              d: "HTML",
              correct: "c",
          },
          {
              question: "26. Which of the following type of HTML tag is used to define an internal style sheet?",
              a: "<script>",
              b: "<link>",
              c: "<inline-style>",
              d: "<style>",
              correct: "d",
          },
          {
              question: "27. Which of the following CSS property is used to make the text bold?",
              a: "text-decoration: bold",
              b: "font-weight: bold",
              c: "font-style: bold",
              d: "text-style: bold",
              correct: "c",
          },
          {
              question: "28. What will be the output of following CSS code snippet?\
               h1{color:'green';}",
              a: "nothings happen",
              b: "error occurs",
              c: "heading becomes dark-green",
              d: "heading becomes green",
              correct: "d",
          },
          {
              question: "29.  Which of the following CSS tag is used to specify an italic text?",
              a: "<italic></italic>",
              b: "<i></i>",
              c: "<italiano></italiano>",
              d: "<emphasis></emphasis>",
              correct: "b",
          },
          {
              question: "30.  Which of the following CSS property sets what kind of line decorations are added to an element, such as underlines, overlines, etc?",
              a: "text-decoration",
              b: "text-style",
              c: "text-decoration-line",
              d: "text-line",
              correct: "a",
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
              if (score < 18) {
                  resultMessage = `<h2 id="resultMessage">You answered ${score}/${quizData.length} questions correctly. You failed. Please try again.</h2>`;
              } else {
                  resultMessage = `<h2 id="resultMessage">You answered ${score}/${quizData.length} questions correctly. Congratulations! You passed.</h2>`;
              }
              resultContainer.innerHTML = resultMessage + '<button onclick="tryAgain()">Try Again</button> <button onclick="goHome()">Go Home</button>';
          }

          function tryAgain() {
            localStorage.removeItem('currentQuiz');
            location.reload();
        }

        function goHome() {
            localStorage.removeItem('currentQuiz');
            window.location.href = 'htmlcourse.html';
        }
      </script>
</body>
</html>