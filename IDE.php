<?php
session_start();
include 'connect.php';

$student_id = $_SESSION['student_id'];

if(!isset($student_id))
  header('location: login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iLearn Hub: Code Editor</title>
  <link rel="stylesheet" href="loggedin.css">
  <link rel="stylesheet" href="homestyle.css">
  <link rel="icon" type="image/x-icon" href="main_icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/codemirror.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/codemirror.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/htmlmixed/htmlmixed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.1/mode/css/css.min.js"></script>
  <style>
    /* Blue-themed styling */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    #editor-container {
      display: flex;
      height: 600px;
      margin: 20px;
    }
    .CodeMirror {
      width: 50%;
      height: 100%;
      border: 6px solid green;
      background-color: #e0e9f4;
      color: #1f7d24;
    }
    #code-preview {
      width: 50%;
      height: 100%;
      border: 6px solid green;
      box-sizing: border-box;
      padding: 10px;
      overflow: scroll;
      background-color: #d6e5f3;
    }
    h2 {
      color: #000000;
    }
    header{
        background-color: #004643;
        padding: 10px;
        border-radius: 16px;
        height: auto;
        margin-top: 2%;
    }
    .back-ground{
      background-color: #004643;

    }
    
  </style>
</head>
<body class="back-ground">
    <div class="section-1">
    <nav>
          <table>
            <tr>
            <td><a href="home.php"><img src="main_icon.png" class="main_icon"></td></a>
            <td><h1 class="logo"></h1></td>
            </tr>
            </table>
            <div class="navbar">
              <a href="home.php">Home</a>
              <a href="IDE.php">Compiler</a>
              <div class="dropdown">
                <a href="#">Courses</a>
                <div class="dropdown-content">
                  <a href="htmlcourse.php">HTML</a>
                  <a href="csscourse.php">CSS</a>
                </div>
              </div>
              <a href="tutorial.php">Tutorials</a> 
              <a href="team.php">About Us</a>
              <a href="student_portal.php">Classroom</a>
              <div class="dropdown">
              <a href="#">Assessments</a>
                <div class="dropdown-content">
                <a href="HtmlExam.php"> HTML EXAMINATION</a>
                <a href="cssexam.php"> CSS EXAMINATION</a>
                </div>
              </div> 
              <a href="logout.php">
               <i class="fas fa-sign-out-alt"></i> Log Out
              </a>
            </div>
        </nav>
<br><br>
<header><h1 style="color: rgb(255, 255, 255); text-align: center;">iLearn Hub - Compiler</h2></header>
<br>

<div id="editor-container">
    <textarea id="code-editor"></textarea>
    <div id="code-preview">
      <!-- Code output will be displayed here -->
      <h2 style="color: #1f7d2c;">Preview:</h2>
    </div>
  </div>

  <script>
    const codeEditor = CodeMirror.fromTextArea(document.getElementById('code-editor'), {
      mode: 'htmlmixed',
      theme: 'default',
      lineNumbers: true,
      autoCloseTags: true,
      matchTags: { bothTags: true },
      lineWrapping: true,
      tabSize: 2
    });

    const codePreview = document.getElementById('code-preview');

    // Function to update the code preview
    function updatePreview() {
      codePreview.innerHTML = codeEditor.getValue();
    }

    // Update preview on editor change
    codeEditor.on('change', updatePreview);

    // Initial update
    updatePreview();
  </script>

</body>
</html>
