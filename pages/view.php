<?php
include 'conixion.php';

if (isset($_GET['Id'])) {
    $studentId = $_GET['Id'];
    $result = $con->query("SELECT * FROM students_list WHERE Id = $studentId");
    $student = $result->fetch(PDO::FETCH_ASSOC);

    if ($student) {
        echo '<a href="javascript:history.back()" class="back-button" style="color=red">Back</a>'; // Thêm nút Back
        echo '<table class="student-details">';
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

 <link rel="stylesheet" href="../css/style.css">