<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->

        <?php
        include "component/sidebar_student.php";
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
            include "component/header.php";
            ?>
            <div class="fs-5 ms-5">
                <p class = "mt-3">E-LEARNING-APPLICATION-V1.0:
                    <br>
                    dashboard simple pour gestion des course,students,payments...
                    <br>
                    ## lien de vedeo in youtube :
                    https://www.youtube.com/watch?v=bDfINmhpzd0
                    <br>
                    ## technologie utiliser
                    <br>
                    ### front end :
                    <br>
                    html,css,framework bootstrap .
                    <br>
                    ### back end:
                    php,sql server.
                    <br>
                    ## les pages du site:
                    <br>
                    ### sign in:
                    email ,password:
                    <br>
                    ### home:
                    statistique: nombre des course ,user,students,payments
                    <br>
                    ### students list:
                    les informations des students: img,username,email...
                    <br>
                    ### payments:
                    les informations de payments:
                </p>
            </div>
        </div>
        <!-- end contentpage -->
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>