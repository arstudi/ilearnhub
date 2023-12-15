<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare a delete statement
    $sql = "DELETE FROM assessment_links WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $id);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to the page from where the delete request originated
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit();
        } else {
            echo "Error executing the delete statement.";
        }
    } else {
        echo "Error preparing the delete statement.";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
