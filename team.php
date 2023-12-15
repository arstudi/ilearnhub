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
<style>
  .card-container{
    width: 80%;
    line-height: 2.2;
    
  }
  .card-container img {
    height: auto;
    width: 300px;
    border-radius: 24px;
  }
  
  .back-ground{
    background-color:#232946;
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

    <h1 class="card-title">Team iLearnHUB<b style="color:red">.</b></h1>
    <div class="card-container">
    <div class="card">
        <div class="card-content">
          <i class="icon fas fa-code"></i>
          <h2>Developer</h2>
          <img src="RESUME/caps.jpg" alt="AR">
          <p><b style=color:black>Name:</b>Josh Capid</p>
          <p><b style=color:black>Address:</b>Angeles City</p>
          <p><b style=color:black>Gender:</b>Male</p>
          <p><b style=color:black>Programming Language:</b>HTML,CSS,PYTHON</p>
        </div>
      </div>
  
      <!-- Card 2 -->
      <div class="card">
        <div class="card-content">
          <i class="icon fas fa-code"></i>
          <h2>Team Leader </h2>
          <img src="RESUME/AR SANTOS copy.png" alt="AR">
          <p><b style=color:black>Name:</b> Santos, Arnie Louie D.</p>
          <p><b style=color:black>Address:</b> Angeles City</p>
          <p><b style=color:black>Gender:</b> Male</p>
          <p><b style=color:black>Programming Language:</b> HTML , CSS , PYTHON , JAVA</p>
        </div>
      </div>
  
      <!-- Card 3 -->
      <div class="card">
        <div class="card-content">
          <i class="icon fas fa-code"></i>
          <h2>Developer</h2>
          <img src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t1.15752-9/406430541_1038299934058380_5123511373929838305_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeFZVBrXvq7dtNgYf7a-uwUUY8H9ZRHFG8hjwf1lEcUbyGlwJiE1Dh_E7vrMvbk00bGf-kWd3YByLt8Myx1ssfbn&_nc_ohc=4g_-3e21RbkAX-_dkfJ&_nc_ht=scontent.fcrk1-4.fna&oh=03_AdQoau048zeMgx7zbjnNgIg0BBDsJoEpYibY9pUZVBQgXQ&oe=659C09C8" alt="">

          <p><b style=color:black>Name:</b>Jaryl Lumanog</p>
          <p><b style=color:black>Address:</b>Angeles City</p>
          <p><b style=color:black>Gender:</b>Male</p>
          <p><b style=color:black>Programming Language:</b>HTML,CSS,PYTHON,JAVA</p>
        </div>
      </div>
  
      <!-- Card 4 -->
      <div class="card">
        <div class="card-content">
          <i class="icon fas fa-code"></i>
          <h2>Developer</h2>
          <img src="RESUME/jer.jpg" alt="AR">
          <p><b style=color:black>Name:</b> Jerry Sibug Jr.</p>
          <p><b style=color:black>Address:</b> Angeles City</p>
          <p><b style=color:black>Gender:</b> Male</p>
          <p><b style=color:black>Programming Language:</b>HTML,CSS,PYTHON</p>
        </div>
      </div>
  
      <!-- Card 5 -->
      <div class="card">
        <div class="card-content">
          <i class="icon fas fa-code"></i>
          <h2>Developer</h2>
          <img src="RESUME/bene.jpeg" alt="AR">
          <p><b style=color:black>Name:</b>John benedict Ortiz</p>
          <p><b style=color:black>Address:</b>Angeles City</p>
          <p><b style=color:black>Gender:</b>Male</p>
          <p><b style=color:black>Programming Language:</b>HTML,CSS,PYTHON</p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="card">
        <div class="card-content">
          <i class="icon fas fa-code"></i>
          <h2>Developer</h2>
          <img src="RESUME/gambi.jpg" alt="gambi">
          <p><b style=color:black>Name:</b>Daniel Gamboa Jr.</p>
          <p><b style=color:black>Address:</b>Municipality of Porac</p>
          <p><b style=color:black>Gender:</b>Male</p>
          <p><b style=color:black>Programming Language:</b> Unknown</p>
        </div>
      </div>
    <br><br><br>
    <!--Footer-->
    

</body>

</html>

