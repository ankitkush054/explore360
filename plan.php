<?php
include_once "header.php";


?>

<!-- packages -->
<!-- <div class="packages">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>World Place Packages</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class=" col-md-6">
                  <div id="ho_img" class="packages_box" data-aos="fade-right" >
                     <figure><img src="images/packag1.jpg" alt="#"/></figure>
                     <div class="tuscany">
                        <div class="tusc text_align_left">
                           <div class="italy">
                              <h3>Tuscany</h3>
                              <span><img src="images/loca.png" alt="#"/> Italy</span>
                           </div>
                           <div class="italy_right">
                              <h3>Price</h3>
                              <span>$1000.0</span>
                           </div>
                        </div>
                        <p>Content here, content here', making it look like readable English. Many desktop publishing packagesContent here, content here', making it look like readable English. Many desktop publishing packages and web page editors now us</p>
                        <div class="tusc">
                           <a class="read_more" href="Javascript:void(0)">Read More</a>
                           <a class="read_more" href="Javascript:void(0)">Book Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=" col-md-6">
                  <div id="ho_img" class="packages_box" data-aos="fade-left">
                     <figure><img src="images/packag2.jpg" alt="#"/></figure>
                     <div class="tuscany">
                        <div class="tusc text_align_left">
                           <div class="italy">
                              <h3>Pais</h3>
                              <span><img src="images/loca.png" alt="#"/> Italy</span>
                           </div>
                           <div class="italy_right">
                              <h3>Price</h3>
                              <span>$1000.0</span>
                           </div>
                        </div>
                        <p>Content here, content here', making it look like readable English. Many desktop publishing packagesContent here, content here', making it look like readable English. Many desktop publishing packages and web page editors now us</p>
                        <div class="tusc">
                           <a class="read_more" href="Javascript:void(0)">Read More</a>
                           <a class="read_more" href="Javascript:void(0)">Book Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=" col-md-6">
                  <div id="ho_img" class="packages_box" data-aos="fade-right" >
                     <figure><img src="images/packag3.jpg" alt="#"/></figure>
                     <div class="tuscany">
                        <div class="tusc text_align_left">
                           <div class="italy">
                              <h3>San Francisco</h3>
                              <span><img src="images/loca.png" alt="#"/> United States
                              </span>
                           </div>
                           <div class="italy_right">
                              <h3>Price</h3>
                              <span>$1000.0</span>
                           </div>
                        </div>
                        <p>Content here, content here', making it look like readable English. Many desktop publishing packagesContent here, content here', making it look like readable English. Many desktop publishing packages and web page editors now us</p>
                        <div class="tusc">
                           <a class="read_more" href="Javascript:void(0)">Read More</a>
                           <a class="read_more" href="Javascript:void(0)">Book Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=" col-md-6">
                  <div id="ho_img" class="packages_box" data-aos="fade-left">
                     <figure><img src="images/packag4.jpg" alt="#"/></figure>
                     <div class="tuscany">
                        <div class="tusc text_align_left">
                           <div class="italy">
                              <h3>Phuket</h3>
                              <span><img src="images/loca.png" alt="#"/> Thailandia</span>
                           </div>
                           <div class="italy_right">
                              <h3>Price</h3>
                              <span>$1000.0</span>
                           </div>
                        </div>
                        <p>Content here, content here', making it look like readable English. Many desktop publishing packagesContent here, content here', making it look like readable English. Many desktop publishing packages and web page editors now us</p>
                        <div class="tusc">
                           <a class="read_more" href="Javascript:void(0)">Read More</a>
                           <a class="read_more" href="Javascript:void(0)">Book Now</a>
                        </div>
                     </div>
                  </div>
               </div> -->
               <!-- <div class="col-md-12">
                  <a class="read_more" href="Javascript:void(0)">See More</a>
               </div> -->
            <!-- </div>
         </div>
      </div> -->
      <!-- end packages -->      


      <div class="packages">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>World Place Packages</h2>
                  </div>
               </div>
            </div>

            <div class="row" style="">
      <?php
      include "conn.php";
      $q="select * from places where status='1'";
      $re=mysqli_query($conn,$q);
      
if ($re->num_rows > 0) {

   while ($row = $re->fetch_assoc()) {

?>

               <div class=" col-md-6">
                  <div id="ho_img" class="packages_box" data-aos="fade-right" >
                     <img src="<?php echo "admin/upload/".$row['place_img'];?>" width="100%"alt="Image"/>
                     <div class="tuscany">
                        <div class="tusc text_align_left">
                           <div class="italy">
                              <h3><?php echo $row['place_name'];?></h3>
                              <span><img src="images/loca.png" alt="#"/> <?php echo $row['place_country'];?></span>
                           </div>
                           <!-- <div class="italy_right">
                              <h3>Price</h3>
                              <span>$1000.0</span>
                           </div> -->
                        </div>
                        <p><?php echo $row['place_discription'];?></p>
                        <div class="tusc">
                           <!-- <a  href="Javascript:void(0)"></a> -->
                           <a class="read_more" href="tour_package.php?place_id=<?php echo $row['place_id'];?>&place_name=<?php echo $row['place_name'];?>">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
           



<?php
   }}
   ?>
    </div>
         </div>
      </div>


      <?php
      include_once "footer.php";
      ?>