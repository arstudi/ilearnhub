<?php
session_start();
include ('dashboard.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="dashboard.css">
    <link rel="icon" type="image/x-icon" href="main_icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <style>
    .welcome-message {
    background-color: teal;
    color: white;
    padding: 10px;
    border-radius: 16px;
    font-size: 52px;
    font-family: 'Montserrat', sans-serif; /* Add this line to specify Montserrat */

}
    main {
        text-align: center;
    }
    .navigation {
        display: flex;
        list-style-type: none;
        justify-content: space-between;
        align-items: center;
        margin: 0;
        padding: 0;
        text-decoration: none;
    }
    .navigation li:not(:last-child) {
        margin-right: 1%; /* Adjust spacing between items */
        text-decoration: none;
    }
    /* Adjust logout button position */
    .navigation li:last-child {
        margin-left: 50%;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <header>
        <br>
    <h1 class="head">iLearn Hub Admin Panel</h1>
    <br>
        <!-- Navigation Links -->
        <ul class="navigation">
    <li><a href="admin.php" class="bn62" >Dashboard</a></li>
    <li><a href="student_list.php" class="bn62" >Student List</a></li>
    <li><a href="test.php" class="bn62" >Test</a></li>
    <li><a href="exam.php" class="bn62" >Exam Generator</a></li>
    <li><a href="access_management.php" class="bn62">Access Management</a></li>
    <li><a href="logout.php" class="bn62">LOGOUT</a></li>
    <!-- Add more links for additional functionalities -->
    </ul>
    </header>
    <main>
    <?php if(isset($_SESSION['username'])): ?>
        <br><br><br>
    <p class="welcome-message">
        Welcome, <?php echo $_SESSION['username']; ?>!
    </p>
<?php endif; ?>
<div class="dashboard-container">
    <h2 class="student-count">
        <i class="fas fa-user-graduate"></i> Student: <?php echo $studentCount; ?>
    </h2>
</div>
<div class="dashboard-container">
    <h2 class="user-count">
        <i class="fas fa-user-shield"></i> Admin: <?php echo $adminCount; ?>
    </h2>
</div>


    
        <br><br><br><br>
    
</main>

    </main>
    
</body>
</html>
