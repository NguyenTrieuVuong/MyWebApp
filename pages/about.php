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
            include "component/header.php";
            ?>
            <div class="fs-5 ms-5">
            <div class="mt-3">
            <h2>E-LEARNING-APPLICATION-V1.0</h2>
            <p>Dashboard simple pour la gestion des cours, des étudiants, des paiements...</p>

            <h3>Lien de la vidéo sur YouTube :</h3>
            <a href="https://www.youtube.com/watch?v=bDfINmhpzd0">Regardez la vidéo ici</a>

            <h3>Technologies utilisées</h3>

            <div class="row">
                <div class="col-md-6">
                    <h4>Front-end :</h4>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Framework Bootstrap</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h4>Back-end :</h4>
                    <ul>
                        <li>PHP</li>
                        <li>SQL Server</li>
                    </ul>
                </div>
            </div>

            <h3>Les pages du site :</h3>

            <h4>Sign In :</h4>
            <p>E-mail, mot de passe</p>

            <h4>Home :</h4>
            <p>Statistiques : Nombre de cours, d'utilisateurs, d'étudiants, de paiements</p>

            <h4>Liste des étudiants :</h4>
            <p>Informations sur les étudiants : Image, nom d'utilisateur, e-mail...</p>
            <img src="../assets/img/Truong.jpg" alt="Description de l'image">

            <h4>Paiements :</h4>
            <p>Informations sur les paiements</p>
        </div>

            </div>
        </div>
        <!-- end contentpage -->
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>