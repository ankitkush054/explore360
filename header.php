<?php
session_start();
// include "admin/check.php";
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Explore360</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min - Copy.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style - Copy.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive - Copy.css">
      <!-- fevicon -->
     
      <link rel="stylesheet" href="css/niceCountryInput - Copy.css">
         <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> -->
      <!-- <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--> 
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
   <body class="main-layout">
      
      <!-- header -->
      <div class="header">
         
         <div class="header_midil">
            <div class="container">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index">
                                 <!-- <img src="images/logo.png" alt="#" /> -->
                                 <img src="images/explore2.PNG" alt="#" />
                               </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-9 col-md-8">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="plan.php">Places </a>
                              </li>
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="gallery.php">Gallery </a>
                              </li> -->
                              <li class="nav-item">
                                 <a class="nav-link" href="service.php">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact_us.php">Contact Us</a>
                              </li>

                           </ul>
                        </div>
                        <div class="col-md-2  d_none"><?php if(isset($_SESSION['name'])){
                              ?>
                              
                           <ul class="email text_align_right">
                              <li><a href="user_profile.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                              <!-- <li><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i>   </a></li> -->
                             
                           </ul>
                           <?php }else{
                           ?>
                           <ul class="email text_align_right">
                              <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                              <!-- <li><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i>   </a></li> -->
                           </ul><?php }?>
                        
                        </div>
                        </div>
                     </nav>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
      <!-- end header -->
      <!-- top -->
    <!-- background-color:#0027ff59; -->
      <div class="full_bg1" style="background-color:#0027ff59">
         <div class="slider_main">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <!-- carousel code -->
                     <div id="carouselExampleIndicators" class="carousel slide">
                        <ol class="carousel-indicators">
                           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <!-- first slide -->
                           <div class="carousel-item active">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    
                                 </div>
                              </div>
                           </div>
                                    </div>
                                 </div>
                              </div>
                           </div> 
                        </div>
                        </div>
                        </div>
                        <script src="js/jquery.min.js"></script> 
                        <script src="js/bootstrap.bundle.min.js"></script> 
                        
                        <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
                        <script src="js/bootstrap-datepicker.min.js"></script>
                        <script src="js/niceCountryInput.js"></script>
                        <script src="js/custom.js"></script> 
                        
                     </body>
                     </html>
                       </footer>