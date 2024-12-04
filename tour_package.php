<?php
include_once "header.php";
include "conn.php";
// include "admin/check.php";

if (isset($_GET['place_id'])) {

    $user_id = $_GET['place_id']; 

    $que = "SELECT * FROM `places` WHERE `place_id`='$user_id'";

    $res=mysqli_query($conn,$que);

    if ($res->num_rows > 0) {        

        while ($row = $res->fetch_assoc()) {

         
         $img= $row['place_img'];
            $nam= $row['place_name'];
            $cont= $row['place_country'];
            $disc = $row['place_discription'];
            $pric = $row['price'];
            $st = $row['status'];
            ?>
            <style>
            
div.mycontainer1 {
  width:100%;
  /* overflow:auto; */
}
div.mycontainer div {
  width:45%;  
  float:left;

}
</style><br>
<div class="mycontainer">
    <div style="margin-left:5%;">

<img src="<?php echo "admin/upload/".$row['place_img'];?>"width="90%" height="40%"><br>
<h1><?php echo $row['place_name'];?></h1>
<p ><?php echo $row['place_discription'];?></p></div>
<?php
}}}
?>
<div style="margin-left:2%;">

<?php
      
        include  "conn.php";
        
if (isset($_GET['place_id'])) {

    $user_id = $_GET['place_id']; 
    
    $que = "SELECT * FROM `places` WHERE `place_id`='$user_id'";
    
    $res=mysqli_query($conn,$que);
    
    if ($res->num_rows > 0) {        
        
        while ($row = $res->fetch_assoc()) {
            
            $place = $row['place_name']; 
         
        //    $place=$row['place_name']; 

        } 
    }


        $sql = "SELECT * FROM `tour_package` WHERE tour_place='$place';";
        // $sql="SELECT tour_package.tour_id,tour_package.tour_name,tour_package.tour_days,tour_package.tour_place,tour_package.tour_tranport_type,tour_package.tour_price FROM tour_package RIGHT JOIN places on tour_package.tour_place=places.place_name;";
// $sql="select  p.place_name , t.*from places p,tour_package t where tour_place=$place";
        $result=mysqli_query($conn,$sql);
?>

        <table id="example" class="table table-striped nowrap frm" style="width:100% " >

            <thead><tr><th colspan="5"  >Best Selling Packages</th></tr>
                <tr>
                    <!-- <th>id</th> -->
                    
                    <th><?php echo $place;?>&nbsp;package name</th>
                    <th>Duration</th>
                    <th>place </th>
                    <!-- <th> tour place </th> -->
                    <!-- <th>transport type</th> -->
                    <th>price</th>
                    
                    <th>Details</th>
                    
                   
                </tr>
            </thead>
            <tbody>
            <?php

if ($result) {

    while ($row = $result->fetch_assoc()) {

?>
        <tr>

        <!-- <td><?php// echo $row['tour_id']; ?></td> -->

        <td><?php echo $row['tour_name']; ?></td>
        <td><?php echo $row['tour_days']; ?></td>
        
        <td><?php echo $row['tour_place']; ?></td>

        
        <!-- <td><?php //echo $row['tour_tranport_type']; ?></td> -->

        
        <td><?php echo $row['tour_price']; ?></td>




        <td><a href="package_details.php?tour_id=<?php echo $row['tour_id'];?>&tour_name=<?php echo $row['tour_name'];?>" class="btn btn-info">Buy Package</a></td>
        
        
        
        
        
        
        <?php
    }
}

} 


?>
        </tr>
            </tbody>
        </table>
<a href="plan.php" class="btn btn-info">Back</a>
</div>
</div>
<br> 
</div>


