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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iLearnHub</title>
  <link rel="stylesheet" href="homestyle.css">
  <link rel="icon" type="image/x-icon" href="main_icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/codemirror.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/codemirror.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/htmlmixed/htmlmixed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/css/css.min.js"></script>
<style>
  /* For smaller screens (phones) */
@media only screen and (max-width: 600px) {
  /* Adjustments for the navigation */
  nav {
    text-align: center; /* Center-align the navigation items */
    margin: auto;
  }
  
  /* Adjustments for sections */
  .section,
  .csssection,
  .htmlsec,
  .csssec {
    /* Style your sections for smaller screens */
    margin-right: 10px;
    margin-left: 10px;
    /* Adjust other properties as needed */
  }
  
  /* Other responsive adjustments */
  /* Add more styles here for responsiveness */
}

  .section {
    text-align: center;
    float: right;
    padding: 20px;
    border-radius: 10px;
    margin: auto;
    margin-top: 2%;
    background-color: rgb(61, 60, 60);
    margin-right: 450px;    
    margin-left: 1px;
  }

  .section-head {
    font-size: 24px;
    margin-bottom: 20px;
    color: #fff;
  }

  .button {
    background-color: #4CAF50; /* W3Schools green color */
    border: none;
    color: white;
    padding: 15px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 10px;
    cursor: pointer;
    border-radius: 30px;
    transition: background-color 0.3s;
  }

  .button:hover {
    background-color: #45a049; /* Darker green on hover */
  }

    /* Textarea Styles */
    .htmlreadonly-textarea {
    margin: 0 auto;
    width: 330px;
    height: 300px;
    text-align: left;
    background-color: #fff;
    font-size: 19px;
    color: black;
  }
  .csssection {
    text-align: center;
    float: right;
    padding: 20px;
    border-radius: 10px;
    margin: auto;
    margin-top: 2%;
    background-color: rgb(61, 60, 60);
    margin-right: 450px;
    margin-left: 2px;
    
  }

  .csssection-head {
    font-size: 24px;
    margin-bottom: 20px;
    color: #fff;
  }
  .cssreadonly-textarea {
    width: 330px;
    height: 300px;
    padding: 10px;
    background-color: #fff;
    font-size: 18px;
    color: black;
  }
  a {
    text-decoration: none;
  }
</style>
</head>

<body class="background">
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
              <a href="student_exam.php">Assessment</a>
              <div class="dropdown">
              <a href="#">Quiz</a>
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
        <br><br><br><br><br><br><br><br>
        <!--Start---->
        <div class="header">
          <h1 class="title">Learn to Code<span style="color: red;">.</span></h1>
          <h3 class="subtitle">With iLearnHub: Your Gateway to Master Web Development </h3>
          <button class="get-started" onclick="scrollToNextSection()">Get Started</button>

        </div>
                                    <!-- Try it Yourself Section -->
            <section class="section">
              <h1 class="section-head">HTML Example:</h1>
              <textarea class="htmlreadonly-textarea" readonly>
              
    
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
    &lt;title&gt;Your HTML Code&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;h1&gt;Hello, World!&lt;/h1&gt;
    &lt;/body&gt;
    &lt;/html&gt;
              </textarea><br>
            <a href="IDE.php"><button class="button">Try it Yourself</button></a>
            </section>
            
        <section class="htmlsec" id="next-section">
          <h1 class="htmlhead">HTML</h1>
          <p>The Foundation of building web pages.</p>
          <a href="htmlcourse.php"><button class="learn-button">Learn HTML</a></button><br>
          <a href="tutorial.php"><button class="tutorial-button">More Tutorials</a></button><br>
          <a href="IDE.php"><button class="compiler-button">Compiler</a></button><br>
        </section>
        <!--Finish---->
        <br><br><br><br><br><br><b><br><br><br><br>
        <!----CSS SECTION-->
        <!-- Try it Yourself Section -->
            <section class="csssection">
              <h1 class="csssection-head">CSS Example:</h1>
              <textarea class="cssreadonly-textarea" readonly>
  
  body {
  background-color: lightblue;
  }
                  
  h1 {
  color: white;
  text-align: center;
  }              
  p {
  font-family: verdana;
  }
              </textarea><br>
              <a href="IDE.html"><button class="button">Try it Yourself</button></a>
            </section>

        <section class="csssec">
          <h1 class="csshead">CSS</h1>
          <p>The language for styling web pages.</p>
          <a href="csscourse.php"><button class="learn-button">Learn CSS</a></button><br>
          <a href="tutorial.php"><button class="tutorial-button">More Tutorials</a></button><br>
          <a href="IDE.php"><button class="compiler-button">Compiler</a></button><br>
        </section>
        <!--Finish---->
      <!--Grid Card Contents-->
<br><br><br><br><br><br>
    <h1 class="head-h1">What Sets ILearn Hub Apart?</h1>
    <br>
    <div class="card-container">
      <!-- Card 1 -->
      <div class="card">
        <div class="card-content">
          <i class="icon fas fa-code"></i>
          <h2>Structured Learning</h2>
          <p>ILearn Hub provides a well-organized and progressive curriculum, ensuring that you master the basic fundamentals of web development which is HTML and CSS</p>
        </div>
      </div>
  
      <!-- Card 2 -->
      <div class="card">
        <div class="card-content">
          <i class="icon fas fa-chalkboard-teacher"></i>
          <h2>Interactive Tutorials</h2>
          <p>Our interactive tutorials make learning enjoyable and engaging. You'll not only read about HTML and CSS but practice coding in a supportive environment.</p>
        </div>
      </div>
  
      <!-- Card 3 -->
      <div class="card">
        <div class="card-content">
          <i class="icon fas fa-laptop-code"></i>
          <h2>Test Your Knowledge</h2>
          <p>You'll not only read about HTML and CSS but you can test your knowledge in iLearnHub: Your Gateway to master web development</p>
        </div>
      </div>
    </div>

    <div class="conclude-container">
      <div class="conclude-content">
    <h1>Unlocking Your Web Development Potential</h1>
    <p>With ILearn Hub, you're not just learning HTML and CSS; you're embarking on a journey to unlock your web development potential. 
      Whether you're building your first web page, enhancing your career prospects, or setting the stage for more advanced programming 
      languages and frameworks, ILearn Hub is your partner in mastering the fundamentals. Get ready to unleash your creativity, design 
      captivating websites, and become a skilled web developer. Your path to Web Development excellence starts here at ILearn Hub.</p>
    </div>
    </div>
    <!--Footer-->
    <footer>
      &copy; 2023 ILearnHub. All rights reserved.
    </footer>
    <script>
      function scrollToNextSection() {
  // Find the next section's position
  const nextSection = document.getElementById('next-section');
  const sectionPosition = nextSection.offsetTop;

  // Smoothly scroll to the next section
  window.scrollTo({
    top: sectionPosition,
    behavior: 'smooth'
  });
}
//---------------------------------------------------------------------------------------------------------------------------//
//transition
// Define the text you want to display
const text = "iLearnHub.";

// Get the target element
const logo = document.querySelector('.logo');

// Function to create the typewriter effect
function typeWriter(text, i, el) {
  if (i < text.length) {
    el.innerHTML += text.charAt(i);
    i++;
    setTimeout(() => {
      typeWriter(text, i, el);
    }, 200); // Adjust the speed by changing the delay (in milliseconds)
  } else {
    setTimeout(() => {
      // Clear the text and start over
      el.innerHTML = '';
      typeWriter(text, 0, el);
    }, 1000); // Delay before restarting the typing (in milliseconds)
  }
}

// Start the typewriter effect
typeWriter(text, 0, logo);

    </script>
</body>
</html>

