<?php
include "conn.php";
// include "chec2k.php";

// session_start();
if (isset($_GET['package_details_id'])) {

  $user_id = $_GET['package_details_id']; 
  
  $que = "SELECT * FROM `package_details` WHERE `package_details_id`='$user_id'";
  
  $res=mysqli_query($conn,$que);
  
  if ($res->num_rows > 0) {        
      
      while ($row = $res->fetch_assoc()) {
          
         $name = $row['package_name']; 
          //  $price = $row['tour_price']; 
       
      //    $place=$row['place_name']; 

      } 
  }}
  $quer = "SELECT * FROM `tour_package` WHERE `tour_name`='$name'";
  
  $res1=mysqli_query($conn,$quer);
  
  if ($res1->num_rows > 0) {        
      
      while ($row = $res1->fetch_assoc()) {
          
        $price1=$row['tour_price']; 
        $total=intval($price1);
          //  $price = $row['tour_price']; 
       
      //    $place=$row['place_name']; 

      } 
  }
?>
<div class="row">
  <div class="col-75">
    <div class="container">
      
      <form method="post">

        <div class="row">
          <div class="col-50">
            <h3>Parchase package</h3>
           
            <label for="email"><i class="fa fa-envelope"></i> Member's</label>
            <input type="number" id="member" name="member" placeholder="" required>
            <label>
          <input type="checkbox" checked="checked" name="sameadr"> Confirm Package
        </label>
        <label for="date">Select a Date:</label>
        <input type="date" id="date" name="date" required>
        <!-- <input type="submit" value="Submit"> -->
        <input type="submit" value="submit" name=Checkout class="btn">


  </div>
  <style >

  
  .stylish-button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  margin-left: 87%;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 8px;
  border: 2px solid #4CAF50;
}

.stylish-button:hover {
  background-color: white;
  color: #4CAF50;
}

</style>     
  <style>
            .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
          </style>

        </div>
       
      </form>
    </div> 
  </div>

 
</div>
<?php

if(isset($_POST['Checkout']))
{
  error_reporting(0);
  $date = $_POST['date'];

  $member=$_POST['member'];
  $to=$member*$total;
  $quee="INSERT INTO `member`(`id`, `member`, `date`,`package_name`,`price`,`total`) VALUES (null,'$member','$date','$name','$total','$to')";

  $res1=mysqli_query($conn,$quee);

  // $member=;
  echo "<div class='col-25'>
  <div class='container'>
  <h4>Cart
    <span class='price'style='color:black'>
      <i class='fa fa-shopping-cart'></i>
      <b>1</b>
    </span>
  </h4>
  <p>".$name."<span class='price'>".$price1."</span></p>
  
  <hr>
  <p>Total <span class='price' style='color:black'><b>
   ".
    
    // error_reporting(0);
  
$to."</b></span></p>";


    // echo "<a  class='stylish-button' href='purchase_now.php?name=".$name."&& price=".$price1."&& member=".$member."&& total=".$to."&& date=".$date."button class='stylish-button'>Purchase Now </a></button>";
?>
<a  class="stylish-button" href='purchase_now.php?name=<?php echo $name;?>&& price=<?php echo $price1;?> && member=<?php echo $member;?> && total=<?php echo $to;?> && date=<?php echo $date;?>' button class='stylish-button'>Purchase Now </a></button>

      


  
 <?php 
  }
  ?>
</div>
  </div>


  
  
  
  
  <?php

      include_once "footer.php";
      ?>