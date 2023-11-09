<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    if (empty($username) || empty($email)) {
        echo "Vui lòng điền đầy đủ thông tin để tìm mật khẩu.";
    } else {
        include './pages/conixion.php';
        $requete = "SELECT * FROM users WHERE username = '$username' and Email = '$email'";
        $statment = $con->prepare($requete);
        $statment->execute();
        $result = $statment->fetch();

        if ($result && $username == $result['username'] && $email == $result['Email']) {

            echo $result['username'];
            echo $result['Email'];
            header("location:newpass.php");
        } else {
            echo "Không tìm thấy thông tin người dùng.";
        }
    }



    $newPassword = isset($_POST['new-password']) ? $_POST['new-password'] : '';
    $confirmPassword = isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';

    if (!empty($newPassword) && !empty($confirmPassword)) {
        if ($newPassword === $confirmPassword) {
            // Kết nối cơ sở dữ liệu
            include 'pages/conixion.php';
            // Đặt lại mật khẩu cho người dùng mã hóa
            // $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            // Thực hiện truy vấn SQL để kiểm tra xem tên người dùng đã có hay chưa
            $checkQuery = "SELECT * FROM users WHERE username = :username";
            $checkStmt = $con->prepare($checkQuery);
            $checkStmt->bindParam(':username', $username);
            $checkStmt->execute();

            if ($checkStmt->fetch()) {
                // Tên người dùng đã tồn tại, bạn có thể tiến hành cập nhật mật khẩu
                // Thực hiện truy vấn SQL để cập nhật mật khẩu
                $updateQuery = "UPDATE users SET Password = :password WHERE username = :username";
                $stmt = $con->prepare($updateQuery);
                $stmt->bindParam(':password', $newPassword);
                $stmt->bindParam(':username', $username);

                if ($stmt->execute()) {
                    // Mật khẩu đã được đặt lại thành công
                   
                    header("location:index.php");
                } else {
                    // Xảy ra lỗi khi cập nhật mật khẩu
                    echo "Đã xảy ra lỗi khi đặt lại mật khẩu.";
                }
            } else {
                echo "Tên người dùng không tồn tại.";
            }
        } else {
            echo "Mật khẩu và mật khẩu xác nhận không khớp. Vui lòng thử lại.";
        }
    } else {
        echo "Vui lòng điền mật khẩu và mật khẩu xác nhận để đặt lại mật khẩu.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset mật khẩu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light d-flex justify-content-center align-items-center" id="pass" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Reset mật khẩu</h2>
                        <form method="POST">
                            <div class="form-group">
                                <label for="username">Nhập username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="email">Nhập Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="new-password">Mật khẩu mới</label>
                                <input type="password" class="form-control" id="new-password" name="new-password" placeholder="Mật khẩu mới">
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Xác nhận mật khẩu">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Reset mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

