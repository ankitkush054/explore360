<?php
// session_start();
include_once("header1.php");


// echo $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	
	<!-- gallery light box -->
	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="css/lightbox.css">
	<!-- <link href="css/style.css" type="text/css" rel="stylesheet" media="all"> -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">

</head>
<body>
	<!-- packages -->
	<div class="packages">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>World Place Packages</h2>
                  </div>
               </div>
            </div>
			<div class="row">
				<?php
			// if (session_status() == PHP_SESSION_NONE) {
			// 	session_start();
			// }
				// echo $_SESSION['name'];
      include "conn.php";
      $q="select * from letest_place where status='1'";
      $re=mysqli_query($conn,$q);
      
	  if ($re->num_rows > 0) {
		  
		  while ($row = $re->fetch_assoc()) {
			  
			  ?>
			  <div class=" col-md-6">
                  <div id="ho_img" class="packages_box" data-aos="fade-right" >
                     <figure><img src="<?php echo "admin/upload/". $row['img'];?>" style="width:190%; " alt="#"/></figure>
                     <div class="tuscany">
                        <div class="tusc text_align_left">
                           <div class="italy">
                              <h3><?php echo $row['name'];?></h3>
                              <span><img src="images/loca.png"  alt="#"/> <?php echo $row['country'];?></span>
                           </div>
                           <!-- <div class="italy_right">
                              <h3>Price</h3>
                              <span>$1000.0</span>
                           </div> -->
                        </div>
                        <p><?php echo $row['dis'];?></p>
                        <div class="tusc">
                           <!-- <a class="read_more" href="">Read More</a> -->
                           <a class="read_more" style="margin-left:70%;" href="plan.php"> Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
			   <?php
   }}
   ?>
               
               <div class="col-md-12">
                  <a class="read_more" href="Javascript:void(0)">See More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end packages -->

    <!-- gallery -->
	<div class="agile-section gallery" id="gallery">
		<div class="container">
			<h3 class="agileits-title text-center">gallery</h3>
<?php

include "conn.php";
$qu="select * from `gallery`";
$re=mysqli_query($conn,$qu);
if ($re->num_rows > 0) {

	while ($row = $re->fetch_assoc()) {
?> 

			<div class="gallery-grids-top">
				<div class="gallery-grids agileits-w3layouts">
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img">
						<a class="example-image-link w3-agilepic" href="<?php echo "admin/upload/".$row['img'];?> " data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="<?php echo "admin/upload/".$row['img'];?> "alt="" />
							<div class="w3ls-overlay">
								<h4><?php echo $row['name'];?></h4>
							</div>
						</a>
					</div>
					<?php
	}}
					?>
					<!-- <div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/g2.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/g2.jpg" alt="" />
							<div class="w3ls-overlay">
								<h4>Our Gallery</h4>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/g3.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/g3.jpg" alt="" />
							<div class="w3ls-overlay">
								<h4>Our Gallery</h4>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img gallery-mdl hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/g3.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/g3.jpg" alt="" />
							<div class="w3ls-overlay">
								<h4>Our Gallery</h4>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img gallery-mdl hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/g4.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/g4.jpg" alt="" />
							<div class="w3ls-overlay">
								<h4>Our Gallery</h4>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/g5.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/g5.jpg" alt="" />
							<div class="w3ls-overlay">
								<h4>Our Gallery</h4>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/g6.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/g6.jpg" alt="" />
							<div class="w3ls-overlay">
								<h4>Our Gallery</h4>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/g2.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/g2.jpg" alt="" />
							<div class="w3ls-overlay">
								<h4>Our Gallery</h4>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img gallery-mdl hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/g1.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/g1.jpg" alt="" />
							<div class="w3ls-overlay">
								<h4>Our Gallery</h4>
							</div>
						</a>
					</div> -->
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //gallery -->
	

	<!--services-->
	<div class="agileits-services agile-section" id="service">
		<div class="container">
			<h3 class="agileits-title text-center">services</h3>
			<div class="agileits-services-row">
				<div class="col-md-3 col-sm-6 agileits-services-grids">
					<div class="service-grid1">
						<!-- <span class="fa fa-phone effect-1" aria-hidden="true"></span> -->
						<h4>Overview of Services:</h4>
						<p>Begin with a brief introduction or overview of the services Explore360 provides. This can include the types of travel experiences you specialize in, such as adventure travel, luxury vacations, budget travel, family-friendly trips, etc.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 agileits-services-grids">
					<div class="service-grid1">
						<!-- <span class="fa fa-user effect-1" aria-hidden="true"></span> -->
						<h4>Booking and Reservation Assistance</h4>
						<p>Describe how your company assists travelers with booking flights, hotels, rental cars, and other accommodations. Highlight any special deals or partnerships you have with airlines, hotels, and travel agencies.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 agileits-services-grids">
					<div class="service-grid1">
						<!-- <span class="fa fa-list-alt effect-1" aria-hidden="true"></span> -->
						<h4>Customized Travel Packages</h4>
						<p> If your company offers customized travel packages or itineraries, explain how travelers can request personalized trips tailored to their interests, preferences, and budget.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 agileits-services-grids">
					<div class="service-grid1">
						<!-- <span class="fa fa-check effect-1" aria-hidden="true"></span> -->
						<h4>Destination Information:</h4>
						<p>Provide information about the destinations your company covers. Include details about popular tourist attractions, cultural experiences, outdoor activities, dining options, and local customs and traditions</p>
					</div>
				</div>
				<!-- <div class="clearfix"> </div> -->

	</div>
	</div>
	</div>
	<!--//services-->
	<br>

	
    <!-- about -->
	<div class="jarallax agileits-about agile-section" id="about">
		<div class="container">
			<span class="wthree-line wthree-left"></span>
			<h3 class="agileits-title text-center">about us</h3>
			<!-- <div class="w3agile-about"> -->
				<div class="col-md-6 col-sm-6  w3_agileits-about-left">
					<!-- <div class="agile-about-left"> -->
						<h4 class="agileits-title">Explore360</h4>
						<p>Tour and Travel planner</p>
						<br>
						<img src="images/traval1.png" width="65%">
					<!-- </div> -->
					<div class="w3_agileits-about-bottom">
					</div>
				</div>
				<div class="col-md-6 col-sm-6 w3_agileits-about-right">
                    <span class="w3ls-abt" ></span>
					<p>Welcome to [Explore360], your gateway to unforgettable travel experiences around the world. We are passionate about creating memorable journeys that inspire, excite, and enrich the lives of our travelers.o</p>
					<span class="w3ls-txt">Our Mission<br>
At [Explore360], our mission is to make travel dreams a reality. We believe that travel has the power to broaden horizons, foster cultural understanding, and create lifelong memories. Through our dedication to exceptional service, attention to detail, and commitment to sustainable travel practices, we strive to exceed the expectations of every traveler who chooses to explore the world with us.</span>
					<ul class="w3l-list">
					What Sets Us Apart
						<li>
							<span class="w3ls-type fa fa-angle-double-right" aria-hidden="true"></span><b>Personalized Service:</b> We understand that no two travelers are alike, which is why we take the time to tailor each journey to the unique preferences and interests of our customers.</li>
						<li>
							<span class="w3ls-type fa fa-angle-double-right" aria-hidden="true"></span><b>Expert Guidance:</b> Our team of experienced travel professionals is dedicated to providing expert guidance and insider knowledge to ensure that every trip exceeds expectations.</li>
						<li>
							<span class="w3ls-type fa fa-angle-double-right" aria-hidden="true"></span><b>Global Network:</b>With a global network of trusted partners and suppliers, we have the resources and connections to offer unparalleled access to some of the world's most captivating destinations and experiences</li>
						<li>
							<span class="w3ls-type fa fa-angle-double-right" aria-hidden="true"></span><b>Sustainability: </b>We are committed to responsible travel practices that minimize our environmental footprint and support the communities and cultures we visit.</li>
						<li>
							<span class="w3ls-type fa fa-angle-double-right" aria-hidden="true"></span><b>24/7 Support:</b> Our dedicated team is available around the clock to provide assistance and support, ensuring that your journey is seamless from start to finish.</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about -->

<!-- contact -->
	<!-- <script>window.location.reload();</script> -->
<?php
// include_once "header.php";
include 'conn.php';
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $number=$_POST['number'];
   $msg=$_POST['words'];
   
   // $insert="INSERT INTO `contact_us` (`id`,`first_name`,`email`,`number`,`your_message`) VALUES(NULL,'$name','$email','$number,'$msg')";
   $query="INSERT INTO `contact_us`(`id`, `first_name`, `email`, `number`, `your_message`) VALUES (null,'$name','$email','$number','$msg')";
   $res=mysqli_query($conn,$query);
   if($res)
   {
      echo "<script>alert('Your message send succssful');</script>";
      ?>
   <META http-equiv="Refresh" content="0; url=http://localhost:801/web1/contact_us.php">
   <?php
   
}
else
{
   echo "<script>alert('Your message send not succssful');</script>";
}

}

?>
<div class="footer" id="contact">
   <div class="container">
      <div class="row">
         <!-- <div class="col-md-5"> -->
            <!-- <div id="request" class="main_form"> -->
               

            <div class="container00">
    <form id="contactus" method="post">
        <h3>Contact us form</h3>
        <fieldset> <input placeholder="name" type="text" name="name" tabindex="1" required > </fieldset>
        <fieldset> <input placeholder="Email Address" type="email" name="email" tabindex="2" required> </fieldset>
        <fieldset> <input placeholder="Phone Number" type="tel" name="number" tabindex="3" required> </fieldset>
        <fieldset> <textarea placeholder="Type your message here..." name="words" tabindex="5" required></textarea> </fieldset>
        <fieldset> <button name="submit" type="submit" value="submit" id="contactus-submit" data-submit="...Sending"><i id="icon" class=""></i> Send Now</button> </fieldset>
    </form>
</div>

<style>
 

.container00 {
    /* max-width: 400px; */
    width: 90%;
    margin: 0 auto;
    position: relative
}

#contactus {
    font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    background: #F9F9F9;
    padding: 25px;
    margin: 150px 0;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24)
}

#contactus {}

#contactus h3 {
    display: block;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 10px
}

#contactus h4 {
    margin: 5px 0 15px;
    display: block;
    font-size: 13px;
    font-weight: 400
}

fieldset {
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%
}

#contactus input[type="text"],
#contactus input[type="email"],
#contactus input[type="tel"],
#contactus input[type="url"],
#contactus textarea {
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px
}

#contactus input[type="text"]:hover,
#contactus input[type="email"]:hover,
#contactus input[type="tel"]:hover,
#contactus input[type="url"]:hover,
#contactus textarea:hover {
    -webkit-transition: border-color 0.3s ease-in-out;
    -moz-transition: border-color 0.3s ease-in-out;
    transition: border-color 0.3s ease-in-out;
    border: 1px solid #aaa
}

#contactus textarea {
    height: 100px;
    max-width: 100%;
    resize: none
}

#contactus button[type="submit"] {
    cursor: pointer;
    width: 100%;
    border: none;
    background: #f0715f;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px
}

#contactus button[type="submit"]:hover {
    background: #f07150;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out
}

#contactus button[type="submit"]:active {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5)
}

</style>

<!-- </div> -->


<div class="col-md-4 ">
   <ul class="conta">
      <li><i class="fa fa-map-marker" aria-hidden="true"></i>Locations 
   </li>
   <li><i class="fa fa-phone" aria-hidden="true"></i>+91~7987395075</li>
   <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> explore360@gmail.com</a></li>
</ul>
</div>
<div class="col-md-3">
   <div class="follow text_align_left">
      <h3>Follow Us</h3>
      <ul class="social_icon ">
         <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
         <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
         <li><a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
         <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
   </div>
</div>
<!-- <script src="https://cdn.tailwindcss.com"></script> -->
               </div>
            </div>


                   <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2024 All Rights Reserved. Design by Explore360</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>