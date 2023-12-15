<?php
// Include your database connection file
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['questionId'])) {
    // Sanitize the input to prevent SQL injection
    $questionId = mysqli_real_escape_string($conn, $_POST['questionId']);

    // Query to delete the question from the database
    $deleteQuery = "DELETE FROM questions WHERE id = '$questionId'";
    
    if (mysqli_query($conn, $deleteQuery)) {
        echo json_encode(array('success' => 'Question deleted successfully'));
    } else {
        echo json_encode(array('error' => 'Error deleting question'));
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo json_encode(array('error' => 'Invalid request'));
}
?>