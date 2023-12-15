<?php
include 'deletecon.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['deleteid'])) {
    // Get the student ID from the URL parameter
    $studentId = $_GET['deleteid'];

    // Delete the student from the database
    $sql = "DELETE FROM Students WHERE student_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$studentId]);

    // Redirect to the student list after deletion
    header("Location: student_list.php");
    exit();
}
?>
