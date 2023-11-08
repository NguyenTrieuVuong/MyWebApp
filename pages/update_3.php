<?php
session_start();
$id = $_SESSION['id'];
include 'conixion.php';
if (isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $PaymentSchedule = $_POST['PaymentSchedule'];
    $BillNumber = $_POST['BillNumber'];
    $AmountPaid = $_POST['AmountPaid'];
    $BalanceAmount = $_POST['BalanceAmount'];
    $Date = $_POST['Date'];
    $requete = $con -> prepare("UPDATE payments_list
    SET 
    Name = '$Name',
    PaymentSchedule= '$PaymentSchedule',
    BillNumber = '$BillNumber',
    AmountPaid='$AmountPaid',
    BalanceAmount='$BalanceAmount',
    Date='$Date'
    
    WHERE id = $id");
    $res = $requete -> execute();
    header("location:payment_details.php");
}
?>