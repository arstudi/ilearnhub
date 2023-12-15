<?php
include 'connect.php'; // Include your database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $newStudentNumber = $_POST['newStudentNumber'];
    $newStudentName = $_POST['newStudentName'];
    $newEmail = $_POST['newEmail'];
    $newUserType = $_POST['newUserType'];
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    // Check if the email matches the allowed domain
    if (substr($newEmail, -12) !== '@cca.edu.ph') {
        echo '<script>alert("Only cca.edu.ph emails are allowed."); window.history.back();</script>';
        exit();
    }

    // Check if the password meets the criteria (at least 8 characters with digits)
    if (strlen($newPassword) < 8 || !preg_match("/\d/", $newPassword)) {
        echo '<script>alert("Password must be at least 8 characters long and contain digits."); window.history.back();</script>';
        exit();
    }

    // Encrypt the password before storing it in the database
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Check if the username or student number already exists in the database
    $checkQuery = "SELECT * FROM Students WHERE student_number = '$newStudentNumber' OR username = '$newUsername'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // If the username or student number already exists, display an alert using JavaScript
        echo '<script>alert("User account already exists."); window.history.back();</script>';
    } else {
        // Insert a new student into the database with hashed password
        $insertQuery = "INSERT INTO Students (student_number, student_name, email, usertype, username, password) 
                        VALUES ('$newStudentNumber', '$newStudentName', '$newEmail', '$newUserType', '$newUsername', '$hashedPassword')";
        
        // Perform the query and check if it was successful
        if (mysqli_query($conn, $insertQuery)) {
            // If the insertion was successful, redirect back to the student list page
            header("Location: student_list.php");
            exit();
        } else {
            // If an error occurred, display an error message
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
