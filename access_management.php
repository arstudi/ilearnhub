<?php 
include 'connect.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Portal</title>
    <link rel="stylesheet" type="text/css" href="assess.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" type="image/x-icon" href="main_icon.png">
    <style>
        h3{
            margin-left: 2%;
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
    <h1 class="head">iLearn Hub Admin Panel</h1>
        <!-- Navigation Links -->
        <nav>
        <ul class="navigation">
    <li><a href="admin.php" class="bn62" >Dashboard</a></li>
    <li><a href="student_list.php" class="bn62" >Student List</a></li>
    <li><a href="test.php" class="bn62" >Test</a></li>
    <li><a href="exam.php" class="bn62" >Exam Generator</a></li>
    <li><a href="access_management.php" class="bn62">Access Management</a></li>
    <li><a href="logout.php" class="bn62">LOGOUT</a></li>
    <!-- Add more links for additional functionalities -->
    </ul>
        </nav>
    </header>
    <br>
    <h2 style="text-align: center; color: #001e1d;">Classroom</h2>

    <?php
    $sqlExams = "SELECT * FROM assessment_links WHERE file_type = 'exam'";
    $resultExams = $conn->query($sqlExams);

    $sqlQuizzes = "SELECT * FROM assessment_links WHERE file_type = 'quiz'";
    $resultQuizzes = $conn->query($sqlQuizzes);
    ?>

    <h3>Exam Links</h3>
    <table style="border: 1; font-size: 24px;">
        <thead>
            <tr>
                <th>File Type</th>
                <th>Link</th>
                <th>File Name</th>
                <th>Publisher Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultExams->num_rows > 0) {
                while ($row = $resultExams->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["file_type"] . "</td>";
                    echo "<td><a href='" . $row["generated_link"] . "' target='_blank'>" . $row["generated_link"] . "</a></td>";
                    echo "<td>" . $row["file_name"] . "</td>";
                    echo "<td>" . $row["publisher_name"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No exam links available</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h3>Quiz Links</h3>
    <table style="border: 1; font-size: 24px;">
        <thead>
            <tr>
                <th>File Type</th>
                <th>Link</th>
                <th>File Name</th>
                <th>Publisher Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultQuizzes->num_rows > 0) {
                while ($row = $resultQuizzes->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["file_type"] . "</td>";
                    echo "<td><a href='" . $row["generated_link"] . "' target='_blank'>" . $row["generated_link"] . "</a></td>";
                    echo "<td>" . $row["file_name"] . "</td>";
                    echo "<td>" . $row["publisher_name"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No quiz links available</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
