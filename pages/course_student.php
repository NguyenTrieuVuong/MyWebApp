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
            include "component/sidebar_student.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
        <?php 
            include "component/header.php";
        ?>
          
        
            <!-- start student list table -->
            <!-- <div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add course</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add courses</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <form method="POST" action="add_course.php" enctype="multipart/form-data" onsubmit="return validateForm();">
                                <div class="">
                                  <label for="recipient-name" class="col-form-label">Name:</label>
                                  <input type="text" class="form-control" id="recipient-name" name="Name">
                                </div>
                                <div class="">
                                  <label for="description" class="col-form-label">Description:</label>
                                  <input type="text" class="form-control" id="description" name="Description">
                                </div>
                                <div class="">
                                  <label for="subject-code" class="col-form-label">Subject code:</label>
                                  <input type="text" class="form-control" id="subject-code" name="Prix">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" name="submit" class="btn btn-primary">Add courses</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div> -->
                <div class="courses">
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
                        <a href="mua.php?Id=<?php echo $value['id'] ?>" class="btn btn-primary" >
                        <i class="far fa-pen" style="color: white;">  <span style="color: white;">Mua</span></i>
                        </a>
                        
                        
                       
                    </td>
              </tr>

          <?php endforeach; ?>
      </tbody>
  </table>
                </div>
            
            </div>
               
        </div>
        <!-- end content page -->
    </main>

    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>