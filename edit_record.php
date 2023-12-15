<?php
$servername = "localhost"; // Change this to your server's name if needed
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "learnhub";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // Assuming 'record_id' is passed from the frontend form
    $fileType = $_POST['file_type'];
    $fileID = $_POST['generated_link'];
    $fileName = $_POST['file_name'];
    $publisherName = $_POST['publisher_name'];

    $sql = "UPDATE assessment_links SET file_type='$fileType', generated_link='$fileID', file_name='$fileName', publisher_name='$publisherName' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: exam.php");
        exit(); // Stop further execution after redirection
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>