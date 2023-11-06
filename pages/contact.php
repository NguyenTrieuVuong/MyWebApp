<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->

        <?php
        include "component/sidebar.php";
        include 'conixion.php';
        $nbr_students = $con->query("SELECT * FROM students_list");
        $nbr_students = $nbr_students->rowCount();

        $nbr_cours = $con->query("SELECT * FROM courses");
        $nbr_cours = $nbr_cours->rowCount();

        $nbr_user = $con->query("SELECT * FROM users");
        $nbr_user = $nbr_user->rowCount();


        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px">
            <?php
            // include "component/header.php";
            ?>
            <div class="container-fluid px">
                <?php
                include "component/header.php";
                ?>
                <div class="container fs-5 mt-3 ms-5">
                    <!-- <p class="mt-3"> -->
                    <p class="text-dark">Địa chỉ: Phòng 308C toà T1, Số 334, Đường Nguyễn Trãi, Quận Thanh Xuân, TP. Hà Nội, Việt Nam</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.461782056931!2d105.80571008950531!3d20.99570086417419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbf0df2c0e5%3A0xd740a66998e1a0ed!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6puLCDEkOG6oWkgaOG7jWMgUXXhu5FjIGdpYSBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1698721409426!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br>
                    <!-- </p> -->
                </div>
            </div>
            <!-- end contentpage -->
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>