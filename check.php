<?php
// Kết nối với cơ sở dữ liệu MySQL
$mysqli = new mysqli('localhost', 'root', '', 'test');

// Lấy dữ liệu từ biểu mẫu đăng nhập
$email = $_POST['email'];
$password = $_POST['password'];
// Thực hiện truy vấn SQL để tìm kiếm dữ liệu trong cơ sở dữ liệu
$sql = "SELECT * FROM new_acc2 WHERE email = '$email' AND password = '$password'";
$result = $mysqli->query($sql);

// So sánh kết quả của truy vấn với dữ liệu từ biến $_POST
if ($result->num_rows > 0) {
   
    header('Location: w3_band/Trang_Chu.html');
  } else {
    $errorMessage = "Sai mật khẩu !";

// Hiển thị panel thông báo'
    
    echo '<div class="panel" style="position: fixed; top: 40%; left: 50%; transform: translate(-50%, -50%);background-color:skyblue;border: 1px solid black;width:1000px; height: 300px;">';
    echo '<h1 style="text-align: center;">SAI TÊN ĐĂNG NHẬP HOẶC MẬT KHẨU !</h1>';
    // echo '<p>' . $errorMessage . '</p>';
    echo '<button type="button"  style="position: fixed; top: 70%; left: 45%; width: 100px; height: 50px;border: 1px solid black; "onclick="location.href=\'index_login.html\'">Go back</button>';
    echo '</div>';
  }

?>
