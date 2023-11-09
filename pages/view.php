<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses_list</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<?php
include 'conixion.php';

if (isset($_GET['Id'])) {
    $studentId = $_GET['Id'];
    $result = $con->query("SELECT * FROM students_list WHERE Id = $studentId");
    $student = $result->fetch(PDO::FETCH_ASSOC);
    
    if ($student) {
        // Hiển thị thông tin chi tiết của học sinh
        echo '<table>';
        echo '<tr><th>Ảnh</th><td><img src="../assets/img/' . $student['img'] . '" alt="img" height="50" width="50"></td></tr>';
        echo '<tr><th>Tên</th><td>' . $student['Name'] . '</td></tr>';
        echo '<tr><th>Email</th><td>' . $student['Email'] . '</td></tr>';
        echo '<tr><th>Điện thoại</th><td>' . $student['Phone'] . '</td></tr>';
        echo '<tr><th>Mã học sinh</th><td>' . $student['EnrollNumber'] . '</td></tr>';
        echo '<tr><th>Ngày nhập học</th><td>' . $student['DateOfAdmission'] . '</td></tr>';

        echo '</table>';
    } else {
        echo "Học sinh không tồn tại.";
    }
} else {
    echo "Thiếu thông tin Id của học sinh.";
}
?>
<script src="../js/script.js"></script>