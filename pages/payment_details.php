<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payments_list</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
  <main class="dashboard d-flex">
    <!-- start sidebar -->
    <?php
    include "component/sidebar.php";
    ?>
    <!-- end sidebar -->

    <!-- start content page -->
    <div class="container-fluid px-4">
      <?php
      include "component/header.php";
      ?>


      <!-- start student list table -->
      <div class="button-add-student">
        <p></p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Thêm thanh toán</button>
        <p></p>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm thanh Toán</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="add_payment.php" enctype="multipart/form-data">

                  <div class="">
                    <label for="recipient-name" class="col-form-label">Tên học viên:</label>
                    <input type="text" class="form-control" id="recipient-name" name="Name" required>
                  </div>
                  <div class="">
                    <label for="recipient-name" class="col-form-label">Lịch trình thanh toán:</label>
                    <input type="date" class="form-control" id="recipient-name" name="PaymentSchedule" required>
                  </div>
                  <div class="">
                    <label for="recipient-name" class="col-form-label">Số Hóa Đơn:</label>
                    <input type="text" class="form-control" id="recipient-name" name="BillNumber" required>
                  </div>
                  <div class="">
                    <label for="recipient-name" class="col-form-label">Số tiền đã thanh toán</label>
                    <input type="text" class="form-control" id="recipient-name" name="AmountPaid" required>
                  </div>
                  <div class="">
                    <label for="recipient-name" class="col-form-label">Số tiền còn nợ:</label>
                    <input type="text" class="form-control" id="recipient-name" name="BalanceAmount" required> 
                  </div>
                  <div class="">
                    <label for="recipient-name" class="col-form-label">Ngày thanh toán:</label>
                    <input type="date" class="form-control" id="recipient-name" name="Date" required>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="courses">
      <div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tên học viên</th>
                <th scope="col">Lịch trình thanh toán</th>
                <th scope="col">Số hóa đơn</th>
                <th scope="col">Số tiền đã thanh toán</th>
                <th scope="col">Số tiền còn nợ</th>
                <th scope="col">Ngày thanh toán</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conixion.php';
            $requete = "SELECT * FROM payments_list";
            $result = $con->query($requete);

            foreach ($result as $value) :
            ?>

                <tr>
                    <td><?php echo $value['Name'] ?></td>
                    <td><?php echo $value['PaymentSchedule'] ?></td>
                    <td><?php echo $value['BillNumber'] ?></td>
                    <td><?php echo $value['AmountPaid'] ?></td>
                    <td><?php echo $value['BalanceAmount'] ?></td>
                    <td><?php echo $value['Date'] ?></td>
                    <td class="d-md-flex gap-3 mt-3">
                                  <a href="modifier_3.php?id=<?php echo $value['id']?>"><i class="far fa-pen"></i></a>
                                  <a style="color: red;" href="javascript:void(0);" onclick="confirmDelete(<?php echo $value['id']?>)"><i class="far fa-trash"></i></a>

                               </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>

      </div>

    </div>

    </div>
    <!-- end content page -->
  </main>

  <script src="../js/script.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>