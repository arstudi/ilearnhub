<?php
include 'connect.php';

// Fetch exam records
$sqlExam = "SELECT * FROM assessment_links WHERE file_type = 'exam'";
$resultExam = $conn->query($sqlExam);

// Fetch quiz records
$sqlQuiz = "SELECT * FROM assessment_links WHERE file_type = 'quiz'";
$resultQuiz = $conn->query($sqlQuiz);

$successMessage = isset($_GET['success']) && $_GET['success'] === 'true' ? "Upload successful!" : "";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Assessment HUB</title>
    <link rel="stylesheet" type="text/css" href="assess.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" type="image/x-icon" href="main_icon.png">
    <script>
// Function to open modal and populate fields when edit button is clicked
function openEditModal(id, fileType, generatedLink, fileName, publisherName) {
    document.getElementById('editRecordId').value = id;
    document.getElementById('editFileType').value = fileType;
    document.getElementById('editGeneratedLink').value = generatedLink;
    document.getElementById('editFileName').value = fileName;
    document.getElementById('editPublisherName').value = publisherName;
    document.getElementById('editModal').style.display = 'block';
}

// Function to close modal
function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}
</script>
    <style>
        h3{
            margin-left: 1%;
        }
        form{
            background-color:#e8e4e6;
            width: 55%;
            margin: auto;
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
<!-- Modal for editing records -->
<div id="editModal" class="modal" style="background-color: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
    <div class="modal-content" style="font-size: 18px; padding: 20px; border-radius: 10px; border: 1px solid #ccc;">
        <span class="close" onclick="closeModal()" style="color: #888; float: right; font-size: 28px; font-weight: bold;">&times;</span>
        <form method="post" action="edit_record.php">
            <input type="hidden" id="editRecordId" name="id" value="">
            <label for="editFileType" style="color: #333;">File Type:</label><br>
            <input type="text" id="editFileType" name="file_type" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="editGeneratedLink" style="color: #333;">Generated Link:</label><br>
            <input type="text" id="editGeneratedLink" name="generated_link" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="editFileName" style="color: #333;">File Name:</label><br>
            <input type="text" id="editFileName" name="file_name" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <label for="editPublisherName" style="color: #333;">Publisher Name:</label><br>
            <input type="text" id="editPublisherName" name="publisher_name" style="width: 100%; padding: 8px; margin-bottom: 15px; border-radius: 5px;"><br>
            <div style="text-align: center;">
                <input type="submit" value="Update Record" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
            </div>
        </form>
    </div>
</div>

    <header>
    <h1 class="head">ASSESSMENT SECTION</h1>
        <!-- Navigation Links -->
        
    </header>
    <br>
    
    <h2 style="text-align: center; color: #001e1d;">ASSESSMENT TAB</h2>
    <form method="post" action="save_link.php">
    <label for="file_type">Select File Type:</label>
    <select name="file_type" id="file_type">
        <option value="exam">Exam</option>
        <option value="quiz">Quiz</option>
    </select>
    <br><br>
    <label for="generated_link">Link:</label>
    <input type="text" id="generated_link" name="generated_link" placeholder="Enter File ID">
    <br><br>
    <label for="file_name">File Name:</label>
    <input type="text" id="file_name" name="file_name" placeholder="Enter File Name">
    <br><br>
    <label for="publisher_name">Publisher Name:</label>
    <input type="text" id="publisher_name" name="publisher_name" placeholder="Enter Publisher Name">
    <br><br>
    <input type="submit" value="Generate Link">
</form>
    <h3>Exam Links</h3>
    <?php
    if ($resultExam->num_rows > 0) {
        echo "<table style='border: 1;'>";
        echo "<thead style='background-color: lightgreen;'>";
        echo "<tr>";
        echo "<th>File Type</th>";
        echo "<th>Links</th>";
        echo "<th>File Name</th>";
        echo "<th>Publisher Name</th>";
        echo "<th colspan='2'>Action</th>";
        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";
        while ($row = $resultExam->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["file_type"] . "</td>";
            echo "<td><a href='" . $row["generated_link"] . "' target='_blank'>" . $row["generated_link"] . "</a></td>";
            echo "<td>" . $row["file_name"] . "</td>";
            echo "<td>" . $row["publisher_name"] . "</td>";
            echo "<td><button onclick='openEditModal(" . $row['id'] . ", \"" . $row['file_type'] . "\", \"" . $row['generated_link'] . "\", \"" . $row['file_name'] . "\", \"" . $row['publisher_name'] . "\")'>Edit</button></td>";
            echo "<td><a href='delete_record.php?id=" . $row['id'] . "'><button>Delete</button></a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p style='text-align: center; color: red;'>No exam records found.</p>";
    }
    ?>
    <?php echo $successMessage; ?>
    <h3>Quiz Links</h3>
    <?php
    if ($resultQuiz->num_rows > 0) {
        echo "<table style='border: 1;'>";
        echo "<thead style='background-color: lightblue;'>";
        echo "<tr>";
        echo "<th>File Type</th>";
        echo "<th>Links</th>";
        echo "<th>File Name</th>";
        echo "<th>Publisher Name</th>";
        echo "<th colspan='2'>Action</th>";
        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";
        while ($row = $resultQuiz->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["file_type"] . "</td>";
            echo "<td><a href='" . $row["generated_link"] . "' target='_blank'>" . $row["generated_link"] . "</a></td>";
            echo "<td>" . $row["file_name"] . "</td>";
            echo "<td>" . $row["publisher_name"] . "</td>";
            echo "<td><button onclick='openEditModal(" . $row['id'] . ", \"" . $row['file_type'] . "\", \"" . $row['generated_link'] . "\", \"" . $row['file_name'] . "\", \"" . $row['publisher_name'] . "\")'>Edit</button></td>";
            echo "<td><a href='delete_record.php?id=" . $row['id'] . "'><button>Delete</button></a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        
    } else {
        echo "<p style='text-align: center; color: red;'>No quiz records found.</p>";
    }
    
    $conn->close();
    ?>
    <?php echo $successMessage; ?>
</body>

</html>
