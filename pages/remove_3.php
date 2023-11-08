<?php 
    include 'conixion.php';
    $id = $_GET['id'];

    if(isset($id)){
        $stmt = $con ->prepare("DELETE FROM payments_list WHERE id=$id");
        $stmt -> execute();

    }
    header('location:payment_details.php');
?>