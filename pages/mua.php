<?php
include 'conixion.php';

// Kiểm tra xem bảng mua đã tồn tại hay chưa
$tableCheck = $con->query("SHOW TABLES LIKE 'purchases'");
if ($tableCheck->rowCount() == 0) {
    // Nếu bảng chưa tồn tại, hãy tạo nó
    $con->exec("CREATE TABLE purchases (
        id INT AUTO_INCREMENT PRIMARY KEY,
        student_id INT,
        purchase_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (student_id) REFERENCES students_list(Id)
    )");
}

// Kiểm tra xem có thông tin ID học viên được chuyển qua hay không
if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    // Kiểm tra xem học viên có tồn tại không
    $result = $con->query("SELECT * FROM students_list WHERE Id = $studentId");
    $student = $result->fetch(PDO::FETCH_ASSOC);

    if ($student) {
        // Thêm thông tin mua vào bảng purchases
        $con->exec("INSERT INTO purchases (student_id) VALUES ($studentId)");

        echo "Mua thành công!";
    } else {
        echo "Học viên không tồn tại.";
    }
} else {
    echo "Thiếu thông tin ID học viên.";
}
?>
