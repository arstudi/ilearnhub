<?php
// Connect to the database
$db = new mysqli('localhost', 'root', '', 'learnhub');

// Check for connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Retrieve questions from the database
$query = "SELECT * FROM questions";
$result = $db->query($query);

// Display the questions in a form for students to answer
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Exam</title>
    <!-- Add your CSS stylesheets or styles here -->
    <link rel="stylesheet" href="htexam.css">
    <link rel="stylesheet" href="loggedin.css">
    <link rel="stylesheet" href="quizcss.css">
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
        form{
          line-height: 2;
          font-size: 20px;
        }
        input[type="radio"] {
        transform: scale(1.5);
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
    
    <header>HTML EXAMINATION</header>
    <form class="quiz-container"  action="submit_answers.php" method="post">
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<h3>{$row['question_text']}</h3>";
            echo "<input type='hidden' name='question_ids[]' value='{$row['id']}'>";
            echo "<input type='radio' name='answers[{$row['id']}]' value='1'> {$row['option1']}<br>";
            echo "<input type='radio' name='answers[{$row['id']}]' value='2'> {$row['option2']}<br>";
            echo "<input type='radio' name='answers[{$row['id']}]' value='3'> {$row['option3']}<br>";
            echo "<input type='radio' name='answers[{$row['id']}]' value='4'> {$row['option4']}<br><br>";
        }
        ?>
        <input type="submit" value="Submit Answers">
    </form>

</body>
</html>

<?php
// Close the database connection
$db->close();
?>
