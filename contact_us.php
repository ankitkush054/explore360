<!-- <script>window.location.reload();</script> -->
<?php
include_once "header.php";
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
    <form id="contactus" action="" method="post">
        <h3>Contact us form</h3>
        <fieldset> <input placeholder="name" type="text" name="name" tabindex="1" required autofocus> </fieldset>
        <fieldset> <input placeholder="Email Address" type="email" name="email" tabindex="2" required> </fieldset>
        <fieldset> <input placeholder="Phone Number" type="tel" name="number" tabindex="3" required> </fieldset>
        <fieldset> <textarea placeholder="Type your message here..." name="words" tabindex="5" required></textarea> </fieldset>
        <fieldset> <button name="submit" type="submit" value="submit" id="contactus-submit" data-submit="...Sending"><i id="icon" class=""></i> Send Now</button> </fieldset>
    </form>
</div>

<style>
 

.container00 {
    /* max-width: 400px; */
    width: 100%;
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

#contactus input:focus,
#contactus textarea:focus {
    outline: 0;
    border: 1px solid #aaa
}

::-webkit-input-placeholder {
    color: #888
}

:-moz-placeholder {
    color: #888
}

::-moz-placeholder {
    color: #888
}

:-ms-input-placeholder {
    color: #888
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


           
      <?php
      include_once "footer.php";
      ?>