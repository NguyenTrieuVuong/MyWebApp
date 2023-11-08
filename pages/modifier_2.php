<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <?php
  session_start();
  include 'conixion.php';
  $_SESSION["id"] = $_GET['id'];
  $id = $_SESSION["id"];
  $statement = $con->prepare("SELECT * FROM courses WHERE id = $id");
  $statement->execute();
  $table = $statement->fetch();

  ?>
  <div class="container w-50">


    <form method="POST" action="update_2.php" enctype="multipart/form-data">

      <div class="">
        <label for="recipient-name" class="col-form-label">Tên khóa học:</label>
        <input type="text" class="form-control" id="recipient-name" name="Name" value="<?php echo $table['Name'] ?>">
      </div>
      
      <div class="">
        <label for="recipient-name" class="col-form-label">Mô tả:</label>
        <input type="text" class="form-control" id="recipient-name" name="Description" value="<?php echo $table['Description'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Giá bán:</label>
        <input type="text" class="form-control" id="recipient-name" name="Prix" value="<?php echo $table['Prix'] ?>">
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
      </div>
    </form>
  </div>
  <script src="../js/script.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>