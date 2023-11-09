<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses_list</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Thêm khóa học</button>
                        <p></p>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm khóa học</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <form method="POST" action="add_course.php" enctype="multipart/form-data" onsubmit="return validateForm();">
                                <div class="">
                                  <label for="recipient-name" class="col-form-label">Tên khóa học:</label>
                                  <input type="text" class="form-control" id="recipient-name" name="Name" required>
                                </div>
                                <div class="">
                                  <label for="description" class="col-form-label">Mô tả:</label>
                                  <input type="text" class="form-control" id="description" name="Description" required>
                                </div>
                                <div class="">
                                  <label for="subject-code" class="col-form-label">Giá bán:</label>
                                  <input type="text" class="form-control" id="subject-code" name="Prix" required>
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
                <div class="courses">
                <div class="table-responsive">
    <table class="table table-striped table-bordered">
      
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tên khóa học</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Giá bán</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conixion.php';
            $requete = "SELECT * FROM courses";
            $result = $con->query($requete);

            foreach ($result as $value) :
            ?>

                <tr>
                    <td><?php echo $value['Name'] ?></td>
                    <td><?php echo $value['Description'] ?></td>
                    <td><?php echo $value['Prix'] ?></td>
                    <td>
                        <a href="modifier_2.php?id=<?php echo $value['id'] ?>" class="btn btn-primary" >
                        <i class="far fa-pen" style="color: white;">  <span style="color: white;">Chỉnh sửa</span></i>
                        </a>
                        <button class="btn btn-danger" onclick="confirmDelete1(<?php echo $value['id'] ?>)">
                            <i class="far fa-trash"></i> Xóa
                        </button>
                        
                       
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