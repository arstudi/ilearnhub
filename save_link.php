<?php
$servername = "localhost"; // Update with your server name
$username = "root"; // Update with your username
$password = ""; // Update with your password
$dbname = "learnhub"; // Update with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileType = $_POST['file_type'];
    $fileID = $_POST['generated_link'];
    $fileName = $_POST['file_name'];
    $publisherName = $_POST['publisher_name'];

    $sql = "INSERT INTO assessment_links (file_type, generated_link, file_name, publisher_name) VALUES ('$fileType', '$fileID', '$fileName', '$publisherName')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: exam.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
