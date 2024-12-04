

<?php 

include "conn.php"; 



    $user_id = $_GET['tour_id'];
   

    $query = " DELETE FROM tour_package WHERE tour_id = '$user_id'";

     $result =mysqli_query($con,$query);

  
    if($result == TRUE)
    {
       // unlink("upload/".$img);
       echo "data delete";
      echo "<script>alert('Data Deleted Sucessfully')</script>";
      ?>
      <META http-equiv="Refresh" content="0; url=http://localhost/web1/admin/tour_package.php">
      <?php
     
     
    }
    else
    {
    
    echo "error ";
    }


?>





