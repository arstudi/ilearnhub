<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List - iLearn Hub Admin Panel</title>
    <link rel="stylesheet" href="admin.css"> <!-- Link to your CSS file -->
    <link rel="icon" type="image/x-icon" href="main_icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script>
// Function to open modal and populate fields when edit button is clicked
function openEditModal(id, studentNumber, studentName, email, userType) {
    document.getElementById('editStudentId').value = id;
    document.getElementById('editStudentNumber').value = studentNumber;
    document.getElementById('editStudentName').value = studentName;
    document.getElementById('editEmail').value = email;
    document.getElementById('editUserType').value = userType;
    document.getElementById('editModal').style.display = 'block';
}
// Function to open add modal
function openAddModal() {
    document.getElementById('addModal').style.display = 'block';
}

// Function to close add modal
function closeAddModal() {
    document.getElementById('addModal').style.display = 'none';
}
// Function to close modal
function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}
</script>
    <style>
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

a {
    color:white;
    text-decoration: none;
}

.was-1 {
    background-color: green;
    color: white;
    border: none; 
    padding: 14px 34px; 
    border-radius: 4px;
}

.was-2 {
    background-color: red; 
    color: white; 
    border: none;                 
    padding: 14px 24px; 
    border-radius: 4px;
}

    </style>
</head>
<body>
<!-- Add Modal -->
<div id="addModal" class="modal" style="background-color: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
    <div class="modal-content" style="font-size: 18px; padding: 20px; border-radius: 10px; border: 1px solid #ccc;">
        <span class="close" onclick="closeAddModal()" style="color: #888; float: right; font-size: 28px; font-weight: bold;">&times;</span>
        <form method="post" action="add_student.php">
            <h1>ENROLL STUDENT</h1>
            <br>
            <label for="newStudentNumber" style="color: #333;">Student Number:</label><br>
            <input type="text" id="newStudentNumber" name="newStudentNumber" placeholder="Enter Student Number" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="newStudentName" style="color: #333;">Student Name:</label><br>
            <input type="text" id="newStudentName" name="newStudentName" placeholder="Enter Student Name" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="newEmail" style="color: #333;">Email:</label><br>
            <input type="text" id="newEmail" name="newEmail" placeholder="Enter Email (example: name@cca.edu.ph)" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="newUserType" style="color: #333;">UserType:</label><br>
            <select id="newUserType" name="newUserType" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;">
                <option value="student">Student</option>
                <option value="admin">Admin</option>
            </select><br><br>
            <label for="newUsername" style="color: #333;">Username:</label><br>
            <input type="text" id="newUsername" name="newUsername" placeholder="Enter Username" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="newPassword" style="color: #333;">Password:</label><br>
            <input type="password" id="newPassword" name="newPassword" placeholder="Enter Password (min. 8 characters with digits)" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <div style="text-align: center;">
                <input type="submit" value="Add Student" style="background-color: #4CAF50; color: white; padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer;">
                <button type="button" onclick="closeAddModal()" style="background-color: #f44336; color: white; padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer;">Cancel</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="modal" style="background-color: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
    <div class="modal-content" style="font-size: 18px; padding: 20px; border-radius: 10px; border: 1px solid #ccc;">
        <span class="close" onclick="closeModal()" style="color: #888; float: right; font-size: 28px; font-weight: bold;">&times;</span>
        <form method="post" action="edit.php">
            <h1>UPDATE STUDENT DATA</h1>
            <br>
            <input type="hidden" id="editStudentId" name="id" value="">
            <label for="editStudentNumber" style="color: #333;">Student Number:</label><br>
            <input type="text" id="editStudentNumber" name="student_number" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="editStudentName" style="color: #333;">Student Name:</label><br>
            <input type="text" id="editStudentName" name="student_name" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="editEmail" style="color: #333;">Email:</label><br>
            <input type="text" id="editEmail" name="email" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="editUserType" style="color: #333;">UserType:</label><br>
            <select id="editUserType" name="usertype" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;">
                <option value="student">Student</option>
                <option value="admin">Admin</option>
            </select><br><br>
            <label for="editUsername" style="color: #333;">Username:</label><br>
            <input type="text" id="editUsername" name="editUsername" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="editPassword" style="color: #333;">Password:</label><br>
            <input type="password" id="editPassword" name="editPassword" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <div style="text-align: center;">
                <input type="submit" value="Update" style="background-color: #4CAF50; color: white; padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer;">
                <button type="button" onclick="closeModal()" style="background-color: #f44336; color: white; padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer;">Cancel</button>
            </div>
        </form>
    </div>
</div>



    <header>
    <h1 class="head">Student Information</h1>       
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

    <main>
        <section class="content">
            <br>
        <h2 style="font-size: 37px;">Student List</h2>
        <br>
    <button class="was-1" onclick="openAddModal()">Enroll Student</button>
            <!-- Table to display student records -->
            <table style="font-size: 24px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Usertype</th>
            <th>Username</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
$sql = "SELECT * FROM `Students`";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['student_id'];
        $newStudentNumber = $row['student_number'];
        $newStudentName = $row['student_name'];
        $newEmail = $row['email'];
        $newUserType = $row['usertype'];
        $username = $row['username'];
        $password = $row['password'];

        echo '<tr>
                <td>'.$id.'</td>
                <td>'.$newStudentNumber.'</td>
                <td>'.$newStudentName.'</td>
                <td>'.$newEmail.'</td>
                <td>'.$newUserType.'</td>
                <td>'.$username.'</td>
                <td>'.$password.'</td>
                <td>';

        if ($newUserType === 'student') {
            echo '<button class="was-1" onclick="openEditModal('.$id.', \''.$newStudentNumber.'\', \''.$newStudentName.'\', \''.$newEmail.'\', \''.$newUserType.'\', \''.$username.'\', \''.$password.'\')">Edit</button>
                    <br><br>
                    <button class="was-2"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>';
        } elseif ($newUserType === 'admin') {
            echo '<span style="color: #999;"></span>'; // Or any other message for admins
        }

        echo '</td>
            </tr>';
    }
}
?>

    </tbody>
</table>

        </section>
    </main>
<br><br><br>
    <footer>
        <p>&copy; 2023 iLearn Hub</p>
    </footer>
</body>
</html>