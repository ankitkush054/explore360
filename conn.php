<?php
$sn="localhost";
$un="root";
$pass="";
$db="explore360";
$conn=mysqli_connect($sn,$un,$pass,$db);


// function generateHash($pass) {
//     // Ek consistent salt value
//     $salt = "explore360"; // Yahaan apna salt value daalein
    
//     // Salt ke saath text ko combine karein
//     $combined_string = $pass . $salt;
    
//     // SHA-256 hash generate karein
//     $hash = hash('sha256', $combined_string);
    
//     return $hash;
// }



?>