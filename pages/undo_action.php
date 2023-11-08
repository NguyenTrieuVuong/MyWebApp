<?php
// Kết nối đến cơ sở dữ liệu
include 'conixion.php';

// Kiểm tra xem có tham số "id" được truyền vào từ URL không
if (isset($_GET['id'])) {
    $courseId = $_GET['id'];

    // Truy vấn dữ liệu ban đầu từ cơ sở dữ liệu
    $originalDataQuery = "SELECT description FROM courses WHERE id = $courseId";
    $originalDataResult = $con->query($originalDataQuery);
    
    if ($originalDataResult) {
        $originalData = $originalDataResult->fetch(PDO::FETCH_ASSOC);

        if ($originalData) {
            // Lấy mô tả ban đầu
            $originalDescription = $originalData['description'];
            
            // Cập nhật cơ sở dữ liệu với mô tả ban đầu để hoàn nguyên
            $updateQuery = "UPDATE courses SET description = :description WHERE id = :id";
            $updateStatement = $con->prepare($updateQuery);
            $updateStatement->bindParam(':description', $originalDescription, PDO::PARAM_STR);
            $updateStatement->bindParam(':id', $courseId, PDO::PARAM_INT);

            if ($updateStatement->execute()) {
                echo "Thao tác hoàn nguyên thành công!";
            } else {
                echo "Lỗi khi thực hiện thao tác hoàn nguyên.";
            }
        } else {
            echo "Không tìm thấy dữ liệu ban đầu.";
        }
    } else {
        echo "Lỗi khi truy vấn dữ liệu ban đầu.";
    }
} else {
    echo "ID không được truyền vào.";
}
?>
