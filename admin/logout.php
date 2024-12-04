<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('Location:../../web1/login.php');
//echo "<script>alert('logout')</script>";
//echo "<script>window.location.href='../../web1/login.php'</script>";

//include "../../web1/login.php";
?>