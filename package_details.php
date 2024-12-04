<?php
// include_once "header.html";
include "conn.php";
        
if (isset($_GET['tour_id'])) {

    $user_id = $_GET['tour_id']; 
    
    $que = "SELECT * FROM `tour_package` WHERE `tour_id`='$user_id'";
    
    $res=mysqli_query($conn,$que);
    
    if ($res->num_rows > 0) {        
        
        while ($row = $res->fetch_assoc()) {
            
            $place = $row['tour_name']; 
            $price = $row['tour_price']; 
            $day = $row['tour_days']; 
         
        //    $place=$row['place_name']; 

        } 
    }


        $sql = "SELECT * FROM `package_details` WHERE package_name='$place';";
        // $sql="SELECT tour_package.tour_id,tour_package.tour_name,tour_package.tour_days,tour_package.tour_place,tour_package.tour_tranport_type,tour_package.tour_price FROM tour_package RIGHT JOIN places on tour_package.tour_place=places.place_name;";
// $sql="select  p.place_name , t.*from places p,tour_package t where tour_place=$place";
        $result=mysqli_query($conn,$sql);
?>

        <table id="example" class="table table-striped nowrap frm" style="width:100% " >

            <?php

if ($result->num_rows > 0) {        

    while ($row = $result->fetch_assoc()) {

?>


<!-- create new purchase page -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min - Copy.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style - Copy.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive - Copy.css">
      <!-- fevicon -->
     
      <link rel="stylesheet" href="css/niceCountryInput - Copy.css">

<div class="package-heading" style="font-size:1200%;"> <h1 style=" font-size:40%; width:90%;    margin:auto; padding:10px; ">
  
<?php echo $row['package_name']; ?></h1>

</div>

<div class="container-fluid mt-5">
<div class="row">
  <div class="col-md-5">
      <div class="carousel slide" data-ride="carousel" id="carousel-1">
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item active"><img class="img-thumbnail w-100 d-block" src="<?php echo  "admin/upload/".$row['img1'];?>" alt="Slide Image" loading="lazy"></div>
              <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="<?php echo "admin/upload/". $row['img2'];?>" alt="Slide Image"></div>
              <div class="carousel-item"><img class="img-thumbnail w-100 d-block" src="<?php echo "admin/upload/". $row['img3'];?>" alt="Slide Image"></div>
          </div>
          <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
          <ol class="carousel-indicators">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1"></li>
              <li data-target="#carousel-1" data-slide-to="2"></li>
          </ol>
      </div>
  </div>
  <div class="col-md-7">

      <!-- <h1 style=" font-size:100%;"><?php// echo $row['package_name']; ?></h1> -->
      
      
<div  style="width:90%;    margin:auto; padding:10px; font-size:200%;">
 <div >
    
   <?php echo $row['package_discription']; ?><hr style="border-top: 6px double black ;">
   <br>
<div class="box12">
  <div>
    <p style="width:90%; font-size:125%;">Package tour day</p> 
    <p style="padding-top:10%;font-size:140%;"> <?php echo $day;?></p>

  </div>
  <div>
   
   <div class="price flex" style="margin-left:50%;"><span class="mr-2">&nbsp;<?php echo "&#8377;".$price."/<br>Per person"; ?></span>
  </div>
</div>
<a href="plan.php" class="btn btn-info">Back</a>
<a button class="stylish-button" href="purchase.php?package_details_id=<?php echo $row['package_details_id'];?>"<button class="stylish-button">Purchase Now </a></button>
<hr style="border-top: 6px double black ;"> </div>

</div>
</div>
<style >
  /* Custom CSS for Carousel within Existing Classes */

/* Carousel Images */
.carousel-item img {
    border-radius: 10px; /* Add rounded corners to images */
}

/* Carousel Controls */
.carousel-control-prev,
.carousel-control-next {
    width: 5%; /* Adjust width of control buttons */
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    height: 30px; /* Adjust height of control icons */
    width: 30px; /* Adjust width of control icons */
    background-size: 100%, 100%;
    background-image: none; /* Remove default background image */
    border: 1px solid #000; /* Add border to control icons */
    border-radius: 50%; /* Make control icons circular */
}

.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
    background-color: rgba(0, 0, 0, 0.5); /* Change background color on hover */
}

/* Carousel Indicators */
.carousel-indicators li {
    background-color: #fff; /* Change background color of indicators */
    border: 1px solid #000; /* Add border to indicators */
    border-radius: 50%; /* Make indicators circular */
    width: 12px; /* Adjust width of indicators */
    height: 12px; /* Adjust height of indicators */
    margin-right: 5px; /* Adjust spacing between indicators */
    cursor: pointer; /* Change cursor to pointer */
}

.carousel-indicators .active {
    background-color: #000; /* Change background color of active indicator */
}

 .box12 {
  width:100%;
  /* overflow:; */
}
.box12 div {
  width:50%; 
  float:left;
}
  .stylish-button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  margin-left: 60%;
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
        
<!-- create end purchase page -->


      <style>

           .package-heading{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            border: 4px solid black;
            background-color: lightblue;
            margin-bottom: 20px;
            margin-top: 20px;
            
           }
            
            div.mycontainer1 {
              width:100%;
              /* overflow:auto; */
            }
            div.mycontainer div {
              width:30%;  
              margin-left:60%;
              font-size:350%;
              float:left;
              
            }
            </style>
        
      
           
<style>
    .bton{
        position: relative;
        background-color:#4CAF50;
        color:#fff;
        padding:10px 20px;
        border:none;
        border-radius:5px;
        cursor:pointer;
    }
    .bton:hover{
        transform:scal(1.1);
        transition:transform 0.3s ease-out;
    }
    </style>
   
 

        
        
        
        <?php
    }
    }

} 


?>
<script>
    // JavaScript for Carousel
    $(document).ready(function() {
        // Activate Carousel
        $('.carousel').carousel();
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</div>
</div>
<br>

</body>
</html> 

<?php
      include_once "footer.php";
      ?>