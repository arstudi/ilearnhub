<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assess.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="quizcss.css">
    <link rel="icon" type="image/x-icon" href="main_icon.png">
  
  <title>Test</title>
  <style>
    #question_text {
        width: 600px; /* Set your desired width */
        height: 120px; /* Set your desired height */
        resize: none; /* Prevent resizing by users if needed */
    }
  </style>
</head>
<body>
<header>
    <h1 class="head">Assessment Section</h1>
        <!-- Navigation Links -->
        <nav>
        <ul class="navigation">
    <li><a href="admin.php" class="bn62" >Dashboard</a></li>
    <li><a href="student_list.php" class="bn62" >Student List</a></li>
    <li><a href="test.php" class="bn62" >Test</a></li>
    <li><a href="exam.php" class="bn62" >Exam Generator</a></li>
    <li><a href="QueList.php" class="bn62">Question List</a></li>
    <li><a href="logout.php" class="bn62">LOGOUT</a></li>
    <!-- Add more links for additional functionalities -->
    </ul>
        </nav>
    </header>

    <body>
    
    <div class="quiz-container">
    <h2>Add a Question</h1>
        <form action="submit_quiz.php" method="post">
            <label for="question_text">Question:</label><br>
            <textarea id="question_text" name="question_text" rows="4" cols="50"></textarea><br>
            <label for="option1">Option 1:</label><br>
            <input type="text" id="option1" name="option1"><br>
            <label for="option2">Option 2:</label><br>
            <input type="text" id="option2" name="option2"><br>
            <label for="option3">Option 3:</label><br>
            <input type="text" id="option3" name="option3"><br>
            <label for="option4">Option 4:</label><br>
            <input type="text" id="option4" name="option4"><br>
            <label for="correct_answer">Correct Answer (1-4):</label><br>
            <input type="number" id="correct_answer" name="correct_answer" min="1" max="4"><br><br>
            <input type="submit" value="Submit">





        </form>
    </div>
</body>
</body>
</html>