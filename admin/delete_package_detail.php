

<?php 

include "conn.php"; 



    $user_id = $_GET['package_details_id'];
   

    $query = " DELETE FROM package_details WHERE package_details_id = '$user_id'";

     $result =mysqli_query($con,$query);

  
    if($result == TRUE)
    {
       // unlink("upload/".$img);
       echo "data delete";
      echo "<script>alert('Data Deleted Sucessfully')</script>";
      ?>
      <META http-equiv="Refresh" content="0; url=http://localhost/web1/admin/package_detail.php">
      <?php
     
     
    }
    else
    {
    
    echo "error ";
    }


?>





