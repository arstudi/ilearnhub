<?php
// Connect to the database
$db = new mysqli('localhost', 'root', '', 'learnhub');

// Check for connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Retrieve form data
$questionText = $_POST['question_text'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$correctAnswer = $_POST['correct_answer'];

// Insert data into the database
$query = "INSERT INTO questions (question_text, option1, option2, option3, option4, correct_answer)
          VALUES ('$questionText', '$option1', '$option2', '$option3', '$option4', '$correctAnswer')";

if ($db->query($query) === TRUE) {
   // Success message
   echo "<script>
            alert('Question added successfully');
            window.location.href = 'test.php';
         </script>";
   exit(); // Ensure no further code is executed after redirection
} else {
    echo "Error: " . $query . "<br>" . $db->error;
}

// Close the database connection
$db->close();
?>
