<?php 
session_start();
    // echo $_SESSION['role'];
// if(!isset($_SESSION['name']) ){
    if(!$_SESSION['name'])
    {

        header('Location:login1.php');

    }
    else{
        // header('Location: purchase.php');
        header('Location:purchase.php'); }


// }
?>