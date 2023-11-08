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
  $statement = $con->prepare("SELECT * FROM payments_list WHERE id = $id");
  $statement->execute();
  $table = $statement->fetch();

  ?>
  <div class="container w-50">


    <form method="POST" action="update_3.php" enctype="multipart/form-data">

      <div class="">
        <label for="recipient-name" class="col-form-label">Tên học viên:</label>
        <input type="text" class="form-control" id="recipient-name" name="Name" value="<?php echo $table['Name'] ?>">
      </div>
      
      <div class="">
        <label for="recipient-name" class="col-form-label">Lịch trình thanh toán:</label>
        <input type="date" class="form-control" id="recipient-name" name="PaymentSchedule" value="<?php echo $table['PaymentSchedule'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Số Hóa Đơn:</label>
        <input type="text" class="form-control" id="recipient-name" name="BillNumber" value="<?php echo $table['BillNumber'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Số tiền đã thanh toán:</label>
        <input type="text" class="form-control" id="recipient-name" name="AmountPaid" value="<?php echo $table['AmountPaid'] ?>">
      </div>
      <div class="">
        <label for="recipient-name" class="col-form-label">Số tiền còn nợ::</label>
        <input type="text" class="form-control" id="recipient-name" name="BalanceAmount" value="<?php echo $table['BalanceAmount'] ?>">
      </div>
      <div class="">
                    <label for="recipient-name" class="col-form-label">Ngày thanh toán:</label>
                    <input type="date" class="form-control" id="recipient-name" name="Date">
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