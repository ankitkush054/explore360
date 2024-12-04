<?php
session_start();
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
    <style></style>
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
                              <a href="index.php">
                                 <!-- <h1>Explore360</h1> -->
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
                                 <a class="nav-link" href="#about">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="plan.php">Places </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#gallery">Gallery </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#service">Service</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <?php if(isset($_SESSION['name'])){?>

                  <div class="col-md-2  d_none">
                                             
                     <ul class="email text_align_right">
                        <
                        <li><a href="user_profile.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <!-- <li><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i>   </a></li> -->
                     </ul>
                    
                  </div>
                  <?php }else {?>
                     <div class="col-md-2  d_none">
                                             
                                             <ul class="email text_align_right">
                                                <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                                                <!-- <li><a href="Javascript:void(0)"><i class="fa fa-sign-in" aria-hidden="true"></i>   </a></li> -->
                                             </ul>
                                            
                                          </div>
                     <?php }?>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
      <!-- end header -->
      <!-- top -->
      <div class="full_bg">
         <!-- <div class="slider_main">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     carousel code
                     <div id="carouselExampleIndicators" class="carousel slide">
                        <ol class="carousel-indicators">
                           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           first slide
                           <div class="carousel-item active">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div  class="col-md-10 offset-md-1">
                                       <div class="board">
                                          <h1>Now start <br>Your traveling </h1>
                                          <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed towhen looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
                                          <a class="read_more" href="#">Read More</a>
                                          <a class="read_more" href="#">Contact us</a>
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
                         </div> -->
                        </div> 
                        <br>
                       
      <script src="js/jquery.min.js"></script> 
         <script src="js/bootstrap.bundle.min.js"></script> 
     
      <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/niceCountryInput.js"></script>
      <script src="js/custom.js"></script> 
      
   </body>
</html>