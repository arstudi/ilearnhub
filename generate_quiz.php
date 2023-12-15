<?php
// Connect to the database
$db = new mysqli('localhost', 'root', '', 'learnhub');

// Check for connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Fetch questions from the database
$query = "SELECT * FROM questions";
$result = $db->query($query);

// Display questions and options
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<h3>' . $row['question_text'] . '</h3>';
        echo '<input type="radio" name="question_' . $row['id'] . '" value="1">' . $row['option1'] . '<br>';
        echo '<input type="radio" name="question_' . $row['id'] . '" value="2">' . $row['option2'] . '<br>';
        echo '<input type="radio" name="question_' . $row['id'] . '" value="3">' . $row['option3'] . '<br>';
        echo '<input type="radio" name="question_' . $row['id'] . '" value="4">' . $row['option4'] . '<br><br>';
    }
} else {
    echo 'No questions available.';
}

// Close the database connection
$db->close();
?>
