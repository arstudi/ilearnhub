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
    <title>iLearnHub</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="icon" type="image/x-icon" href="main_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
      .bac-kground{
        background-color: #232946;
        background-size: 1000px;
      }  
h1 {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 30px;
}


/* Styles for the individual video tutorials sections */
.video-tutorials {
    background-color: #fff;
    margin: 0 auto;
    max-width: 800px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Adding shadow */
}

.video-tutorials h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.video-tutorials ul {
    list-style: none;
    padding: 0;
    text-align: center; /* Center the buttons */
}

.video-tutorials ul li {
    margin-bottom: 10px;
    display: inline-block; /* Display buttons in a line */
}
.video-tutorials ul li a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.video-tutorials ul li a:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body class="bac-kground">
    <div class="section-1 sec-1">
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

<!-- HTML Tutorial Section -->
<h1>ILearn Hub Video Tutorials</h1>
<section class="video-tutorials">
    <h1>HTML Video Tutorials</h1>
    <ul>
        <li><a href="https://www.youtube.com/watch?v=UB1O30fR-EE">HTML Crash Course For Absolute Beginners by Traversy Media: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=pQN-pnXPaVg">HTML Full Course - Build a Website Tutorial by freeCodeCamp.org: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=bWPMSSsVdPk">Learn HTML in 12 Minutes by Jake Wright: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=XgSjoHgy3Rk">HTML Tutorial For Beginners by The Net Ninja: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=dp_iUzhGCFY">HTML Tutorial For Beginners | HTML Crash Course by DesignCourse: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=yfoY53QXEnI">HTML5 and CSS3 Beginner Tutorial by thenewboston: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=4UZrsTqkcW4">HTML Full Course - Build a Website by Academind: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=hdSrT4yjS1g">HTML Crash Course For Beginners by Traversy Media: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=sa-TUpSx1JA">HTML5 Tutorial For Beginners by Derek Banas: Watch here</a></li>
        <!-- Add more tutorial links here -->
    </ul>
</section>

<section class="video-tutorials">
    <h1>CSS Video Tutorials</h1>
    <ul>
        <li><a href="https://www.youtube.com/watch?v=J35jug1uHzE">CSS Crash Course For Absolute Beginners by Traversy Media: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=1Rs2ND1ryYc">CSS Tutorial For Beginners by The Net Ninja: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=0afZj1G0BIE">Learn CSS in 20 Minutes by Colt Steele: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=yfoY53QXEnI">CSS Grid Full Course by Traversy Media: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=1Rs2ND1ryYc">Modern CSS Layouts - Flexbox, Grid, Sass by The Net Ninja: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=qm0IfG1GyZU">Responsive Web Design - CSS Grid, Flexbox & More by freeCodeCamp.org: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=1Rs2ND1ryYc">CSS Variables Tutorial by The Net Ninja: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=1Rs2ND1ryYc">Advanced CSS Tutorial - Learn Advanced CSS by CodeWithChris: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=1Rs2ND1ryYc">CSS Animations & Transitions Crash Course by Dev Ed: Watch here</a></li>
        <li><a href="https://www.youtube.com/watch?v=1Rs2ND1ryYc">CSS Flexbox Tutorial by Programming with Mosh: Watch here</a></li>
    </ul>
</section>

</body>
</html>


