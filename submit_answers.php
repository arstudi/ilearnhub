<?php
session_start(); // Start the session
// Check if the user is logged in, redirect to login page if not
if (!isset($_SESSION['student_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exam Score</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .score-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="score-container">
        <h1>Exam Score</h1>
        <?php
        // Connect to the database
        $db = new mysqli('localhost', 'root', '', 'learnhub');

        // Check for connection errors
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        // Retrieve the submitted answers
        $questionIds = $_POST['question_ids'] ?? [];
        $answers = $_POST['answers'] ?? [];

        // Process submitted answers
        $correctAnswers = 0;
        foreach ($questionIds as $questionId) {
            $selectedAnswer = $answers[$questionId] ?? null;

            // Get the correct answer from the database
            $query = "SELECT correct_answer FROM questions WHERE id = $questionId";
            $result = $db->query($query);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($selectedAnswer === $row['correct_answer']) {
                    $correctAnswers++;
                }
            }
        }

        // Display the score
        echo "<p>Your score: $correctAnswers</p>";

        // Close the database connection
        $db->close();
        ?>
        <a href="student_exam.php" class="btn">Try Again</a>
        <a href="home.php" class="btn">Go to Home</a>
    </div>
</body>
</html>
