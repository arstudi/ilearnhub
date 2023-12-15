<?php
session_start();
include('connect.php');
$msg = '';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = mysqli_prepare($conn, "SELECT * FROM students WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($select, 'ss', $username, $password);
    mysqli_stmt_execute($select);
    
    $result = mysqli_stmt_get_result($select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['student_id'] = $row['student_id'];
        
        // Redirect based on usertype
        if ($row["usertype"] == "admin") {
            $_SESSION['username'] = $username;
            $_SESSION['usertype'] = "admin";
            header("location: admin.php");
            exit(); // Always add exit after header redirection
        } elseif ($row["usertype"] == "student") {
            $_SESSION['username'] = $username;
            $_SESSION['usertype'] = "student";
            header("location: home.php");
            exit(); // Always add exit after header redirection
        }
    } else {
        $msg = '<div class="error-msg">Incorrect Username or Password</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your existing head content here -->

    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="logphp.css">
</head>
<body>
    <!-- Your existing website content here -->

    <section id="login">
        <div class="logo">
            <?php
            if(isset($msg)) {
                echo '<div class="msg">'. $msg .'</div>';
            }
            ?>
            <br>
            <table align="center" border="0">
                <tr>
                    <td><h1>iLearnHub</h1></td>
                    <td><img src="icon.png" alt="icon" class="icon"></td>
                </tr>
            </table>
        </div>
        <h2>Login</h2>
        <form action="" method="POST">
            <br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username" required >
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <br><br>
            <button type="submit" class="bn632-hover bn26" name="submit">Login</button>
            <p>Not Enrolled in yet? <a href="register.php">Register</a></p>
            

        </form>
    </section>
    <footer>
        <p>iLearnHub: all rights reserve</p>
    </footer>
</body>
</html>