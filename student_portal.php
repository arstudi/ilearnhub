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
    <title>Classroom</title>
    <link rel="stylesheet" href="loggedin.css">
    <link rel="stylesheet" href="homestyle.css">

    <link rel="icon" type="image/x-icon" href="main_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        /* Common styles for both tables */
.sci-fi-table {
  border-collapse: collapse;
  width: 100%;
  font-family: 'Arial', sans-serif;
  color: #fff;
  border: 1px solid white; /* Green border */
  line-height: 1;
  
}
.hd-std{
  margin-top: 2%;
}
.sci-fi-table th,
.sci-fi-table td {
  border: 1px solid white; /* Green border */
  padding: 8px;
  text-align: left;
  background-color: seagreen;
}

.sci-fi-table th {
  background-color: #001f3f; /* Dark blue background */
}

.sci-fi-table tbody tr:nth-child(even) {
  background-color: #003366; /* Darker blue background for even rows */
}

.sci-fi-table tbody tr:hover {
  background-color: #00ff00; /* Lighter blue background on hover */
}

/* Title style */
.sci-fi-title {
  font-family: 'Arial', sans-serif;
  font-size: 24px;
  color: white; /* Green text */
  margin-top: 20px;
  margin-bottom: 10px;
}
.back-ground{
    background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20201026/pngtree-futuristic-shape-abstract-background-chemistry-technology-concept-for-website-image_438818.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
    </style>

</head>

<body style="background-color: cadetblue;">
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
        <h2 class="hd-std" style="text-align: center; color: white;">Classroom</h2>

    <?php
    $sqlExams = "SELECT * FROM assessment_links WHERE file_type = 'exam'";
    $resultExams = $conn->query($sqlExams);

    $sqlQuizzes = "SELECT * FROM assessment_links WHERE file_type = 'quiz'";
    $resultQuizzes = $conn->query($sqlQuizzes);
    ?>

<h3 class="sci-fi-title">Exam Links</h3>
    <table class="stud-tbl sci-fi-table">
        <thead>
            <tr>
                <th>File Type</th>
                <th>Link</th>
                <th>File Name</th>
                <th>Published by </th>
            </tr> 
        </thead>
        <tbody>
            <?php
            if ($resultExams->num_rows > 0) {
                while ($row = $resultExams->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["file_type"] . "</td>";
                    echo "<td><a href='" . $row["generated_link"] . "' target='_blank'>" . $row["generated_link"] . "</a></td>";
                    echo "<td>" . $row["file_name"] . "</td>";
                    echo "<td>" . $row["publisher_name"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No exam links available</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h3 class="sci-fi-title">Quiz Links</h3>
    <table class="stud-tbl sci-fi-table">
        <thead>
            <tr>
                <th>File Type</th>
                <th>Link</th>
                <th>File Name</th>
                <th>Publisher Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultQuizzes->num_rows > 0) {
                while ($row = $resultQuizzes->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["file_type"] . "</td>";
                    echo "<td><a href='" . $row["generated_link"] . "' target='_blank'>" . $row["generated_link"] . "</a></td>";
                    echo "<td>" . $row["file_name"] . "</td>";
                    echo "<td>" . $row["publisher_name"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No quiz links available</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>