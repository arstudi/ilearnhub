<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Section</title>
    <!-- Link your CSS files here -->
    <link rel="stylesheet" type="text/css" href="assess.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="quizcss.css">
    <link rel="icon" type="image/x-icon" href="main_icon.png">
    <!-- Your CSS styles can go here -->
    <style>
        /* Define your styles for the table here */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: black;
        }

        .edit-btn, .delete-btn {
            padding: 5px 10px;
            margin-right: 5px;
            cursor: pointer;
        }
        #editQuestionText {
        width: 300px; /* Set your desired width */
        height: 120px; /* Set your desired height */
        resize: none; /* Prevent resizing by users if needed */
    }
    </style>
</head>
<body>
<div id="editModal" class="modal" style="display: none;">
    <div class="modal-content">
        <!-- Add your form elements for editing here -->
        <h2>Edit Question</h2>
        <form id="editForm">
            <input type="hidden" id="editQuestionId" name="editQuestionId">
            <!-- Add input fields for editing -->
            <label for="editQuestionText">Question:</label>
            <textarea id="editQuestionText" name="editQuestionText" rows="4" cols="50"></textarea><br>
            <label for="editOption1">Option 1:</label>
            <input type="text" id="editOption1" name="editOption1"><br>
            <label for="editOption2">Option 2:</label>
            <input type="text" id="editOption2" name="editOption2"><br>
            <label for="editOption3">Option 3:</label>
            <input type="text" id="editOption3" name="editOption3"><br>
            <label for="editOption4">Option 4:</label>
            <input type="text" id="editOption4" name="editOption4"><br>
            <label for="editCorrectAnswer">Correct Answer (1-4):</label><br>
            <input type="number" id="editCorrectAnswer" name="editCorrectAnswer" min="1" max="4"><br><br>
            <button type="submit">Submit</button>
            <button type="button" onclick="closeEditModal()">Cancel</button>
        </form>
    </div>
</div>
    <header>
        <h1 class="head">Assessment Section</h1>
        <!-- Navigation Links -->
        <nav>
            <ul class="navigation">
                <li><a href="admin.php" class="bn62" >Dashboard</a></li>
                <li><a href="student_list.php" class="bn62" >Student List</a></li>
                <li><a href="test.php" class="bn62" >Test</a></li>
                <li><a href="exam.php" class="bn62" >Exam Generator</a></li>
                <li><a href="QueList.php" class="bn62">Question List</a></li>
                <li><a href="logout.php" class="bn62">LOGOUT</a></li>
                <!-- Add more links for additional functionalities -->
            </ul>
        </nav>
    </header>

    <div class="quiz-container">
        <h2>Questions List</h2>
        <?php
        // Include your database connection file
        include 'connect.php';

        // Query to fetch questions from the database
        $query = "SELECT * FROM questions";
        $result = mysqli_query($conn, $query);

        // Check if there are questions to display
        if ($result && mysqli_num_rows($result) > 0) {
            echo '<table>
                    <tr>
                        <th>Question</th>
                        <th>Option 1</th>
                        <th>Option 2</th>
                        <th>Option 3</th>
                        <th>Option 4</th>
                        <th>Correct Answer</th>
                        <th>Action</th>
                    </tr>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <td>'.$row['question_text'].'</td>
                                <td>'.$row['option1'].'</td>
                                <td>'.$row['option2'].'</td>
                                <td>'.$row['option3'].'</td>
                                <td>'.$row['option4'].'</td>
                                <td>'.$row['correct_answer'].'</td>
                                <td>
                                    <button class="edit-btn" onclick="editQuestion('.$row['id'].')">Update</button>
                                    <button class="delete-btn" onclick="deleteQuestion('.$row['id'].')">Delete</button>
                                </td>
                            </tr>';
                    }
                    

            echo '</table>';
        } else {
            echo '<p>No questions found.</p>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>
 

    


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function editQuestion(questionId) {
        $('#editQuestionId').val(questionId);

        $.ajax({
            url: 'fetch_question.php', // Replace with your endpoint to fetch question details
            method: 'POST',
            data: { questionId: questionId },
            success: function(response) {
                const questionData = JSON.parse(response);
                $('#editQuestionText').val(questionData.question_text);
                $('#editOption1').val(questionData.option1);
                // Set other fields similarly
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Error fetching question details. Please try again.');
            }
        });

        document.getElementById('editModal').style.display = 'block';
    }

    function closeEditModal() {
        document.getElementById('editModal').style.display = 'none';
    }

    $('#editForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: 'update_question.php', // Replace with your endpoint to update the question
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert('Question updated successfully!');
                closeEditModal();
                // Optionally reload the questions list or update it after successful update
                // Implement a function to reload questions or re-fetch the list here
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Error updating question. Please try again.');
            }
        });
    });
    function deleteQuestion(questionId) {
    if (confirm("Are you sure you want to delete this question?")) {
        $.ajax({
            url: 'delete_question.php', // Endpoint to delete the question
            method: 'POST',
            data: { questionId: questionId },
            success: function(response) {
                alert('Question deleted successfully!');
                // Optionally, you can remove the deleted row from the table
                $('button.delete-btn').filter(function() {
                    return $(this).attr('onclick').includes(questionId);
                }).closest('tr').remove();
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('Error deleting question. Please try again.');
            }
        });
    } else {
        // Do something when the deletion is canceled
        console.log('Deletion canceled');
    }
}

    

</script>

</body>
</html>
