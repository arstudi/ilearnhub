<?php
// update_question.php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editQuestionId'])) {
    // Retrieve and sanitize POST data
    $questionId = $_POST['editQuestionId'];
    $questionText = mysqli_real_escape_string($conn, $_POST['editQuestionText']);
    $option1 = mysqli_real_escape_string($conn, $_POST['editOption1']);
    $option2 = mysqli_real_escape_string($conn, $_POST['editOption2']);
    $option3 = mysqli_real_escape_string($conn, $_POST['editOption3']);
    $option4 = mysqli_real_escape_string($conn, $_POST['editOption4']);
    $correctAnswer = mysqli_real_escape_string($conn, $_POST['editCorrectAnswer']);

    // Prepare the update query using prepared statements
    $updateQuery = "UPDATE questions SET question_text = ?, option1 = ?, option2 = ?, option3 = ?, option4 = ?, correct_answer = ? WHERE id = ?";
    
    if ($stmt = mysqli_prepare($conn, $updateQuery)) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssssssi", $questionText, $option1, $option2, $option3, $option4, $correctAnswer, $questionId);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo json_encode(array('success' => 'Question updated successfully'));
        } else {
            echo json_encode(array('error' => 'Error updating question'));
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo json_encode(array('error' => 'Prepared statement could not be created'));
    }

    mysqli_close($conn);
} else {
    echo json_encode(array('error' => 'Invalid request'));
}
?>
