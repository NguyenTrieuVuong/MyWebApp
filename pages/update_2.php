<?php
session_start();
$id = $_SESSION['id'];
include 'conixion.php';
if (isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Prix = $_POST['Prix'];
    
    $requete = $con -> prepare("UPDATE courses
    SET 
    Name = '$Name',
    Description= '$Description',
    Prix = '$Prix'
    
    WHERE id = $id");
    $res = $requete -> execute();
    header("location:course.php");
}
?>