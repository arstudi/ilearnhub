<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $newStudentNumber = $_POST['student_number'];
    $newStudentName = $_POST['student_name'];
    $newEmail = $_POST['email'];
    $newUserType = $_POST['usertype'];
    $editUsername = $_POST['editUsername']; // New Username from the form
    $editPassword = $_POST['editPassword']; // New Password from the form

    if (empty($newStudentNumber) || empty($newStudentName) || empty($newEmail) || empty($newUserType) || empty($editUsername) || empty($editPassword)) {
        echo '<script>alert("Please fill in all fields.");window.history.back();</script>';
    } else {
        // Check if the new username already exists in the database
        $checkQuery = "SELECT * FROM Students WHERE username = '$editUsername' AND student_id != '$id'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            echo '<script>alert("User account already exists.");window.history.back();</script>';
        } else {
            $sql = "UPDATE `Students` SET student_number='$newStudentNumber', student_name='$newStudentName', email='$newEmail', usertype='$newUserType', username='$editUsername', password='$editPassword' WHERE student_id='$id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: student_list.php");
            } else {
                echo '<script>alert("Error updating record: ' . mysqli_error($conn) . '");window.history.back();</script>';
            }
        }
    }
}
?>
