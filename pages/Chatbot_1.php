<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eclasse";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}


if (isset($_POST['message'])) {

    $userMessage = $_POST['message'];

    // Thực hiện lưu tin nhắn vào cơ sở dữ liệu
    $query = "INSERT INTO messages (user_id, message) VALUES (1, '$userMessage')";
    $result = $conn->query($query);

    if ($result) {
        // echo "Tin nhắn đã được gửi thành công!";
    } else {
        echo "Có lỗi xảy ra khi gửi tin nhắn.";
    }
    
}

$conn->close();
?>
