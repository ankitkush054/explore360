<?php 
session_start();
    echo $_SESSION['role'];
// if(!isset($_SESSION['name']) ){
    if(!$_SESSION['role'] == '1')
    {

        header('Location:../../web1/login.php');
    }


// }
?>