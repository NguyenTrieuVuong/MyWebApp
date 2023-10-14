<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test"; // Tên cơ sở dữ liệu
// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Truy vấn dữ liệu từ bảng
$sql = "SELECT firstName,lastName,gender,email,password,number FROM new_acc2 WHERE id=10"; // Thay thế "your_table" bằng tên thực sự của bảng của bạn
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    // echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
    //   echo "<th>ID: </th>";
    //   echo "<td>" . $row["id"] . "</td>";
      echo "<p></p>";
      echo "<th>FirstName: </th>";
      echo "<td>" . $row["firstName"] . "</td>";
      echo "<p></p>";
      echo "<th>LastName: </th>";
      echo "<td>" . $row["lastName"] . "</td>";
      echo "<p></p>";
      echo "<th>Gender: </th>";
      echo "<td>" . $row["gender"] . "</td>";
      echo "<p></p>";
      echo "<th>Email: </th>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<p></p>";
      echo "<th>Password: </th>";
      echo "<td>" . $row["password"] . "</td>";
      echo "<p></p>";
      echo "<th>Number: </th>";
      echo "<td>" . $row["number"] . "</td>";
      echo "</tr>\n";
    }
   
} else {
    echo "No records found";
}

// Đóng kết nối
$conn->close();
?>