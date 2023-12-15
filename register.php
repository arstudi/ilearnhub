<?php
session_start();
include('connect.php');
$msg = '';
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $studentname = mysqli_real_escape_string($conn, $_POST['student_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $select = mysqli_query($conn, "SELECT * FROM students WHERE username = '$username' AND password = '$password'") or die('Query Failed!!');

    

    if (mysqli_num_rows($select) > 0) {
        $msg = '<div class="error-msg">User already Existed</div>';
        
    } else {
        mysqli_query($conn, "INSERT INTO students (username, student_name, email, password) VALUES('$username','$studentname' ,'$email', '$password')") or die('Query Failed!');
        $msg = '<span class = "good-msg">User registered successfully</span>';
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your existing head content here -->

    <link rel="stylesheet" href="regstyle.css">
    <link rel="stylesheet" href="logphp.css">
</head>
<body>
    <!-- Your existing website content here -->

    <section id="login">
        <div class="logo">
            <br>
            <?php
        if(isset($msg)) {
            echo '<div class="msg">'. $msg .'</div>';
        }
        ?>
            <table align="center" border="0">
                <tr>
            <td><h1>iLearnHub</h1></td>
                <td><img src="icon.png" alt="icon" class="icon"></td>
            </tr>
            </table>
        </div>
        <h2>Register</h2>
        <form action="" method="POST">
            <br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username">
            <br><br>
            <label for="username">Full name:</label>
            <input type="text" id="student_name" name="student_name" placeholder="Full name">
            <br><br>
            <label for="username">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email (Use your Personal Email)" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <br><br>
            <label for="cpassword">Confirm Passowrd:</label>
            <input type="password" id="cpassword" placeholder="Confirm Password" name="cpassword" required>
            <br><br>
            <button type="submit" name="submit" class="bn632-hover bn26">Register</button><br><br>
            <p>Already Enrolled? <a href="login.php">Login</a></p>
        </form>
    </section>
    <footer>
    </footer>
</body>
</html>
