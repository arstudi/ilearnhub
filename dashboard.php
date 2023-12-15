<?php
include 'connect.php';

$sql = "SELECT COUNT(*) AS total_rows FROM Students";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalRows = $row['total_rows'];
} else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
include 'connect.php';

$sql = "SELECT COUNT(*) AS admin_count FROM Students WHERE usertype = 'admin'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $adminCount = $row['admin_count'];
} else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
include 'connect.php';

$sql = "SELECT COUNT(*) AS student_count FROM Students WHERE usertype = 'student'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $studentCount = $row['student_count'];
} else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>
