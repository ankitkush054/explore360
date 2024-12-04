<?php
include "header.php";
include "conn.php";

if(isset($_POST['submit']))
{
$img1=$_FILES['img1']['name'];  
$img2=$_FILES['img2']['name'];  
$img3=$_FILES['img3']['name'];  
 

$pc_name=$_POST['pc_name'];
$pc_day=$_POST['pc_day'];
$dis=$_POST['dis'];
$brerakfast=$_POST['breakfast'];
$lunch=$_POST['lunch'];
$dinner=$_POST['dinner'];
$allowed_exttension = array('gif','png','jpg','jpeg','avif');
$filename1 = $_FILES['img1']['name']; 
$filename2 = $_FILES['img2']['name']; 
$filename3 = $_FILES['img3']['name']; 
 
$file_extension = pathinfo($filename1, PATHINFO_EXTENSION);
if(!in_array($file_extension, $allowed_exttension))
{

  echo "<script>alert('you are allowed with only jpg jpeg png and gif')</script>";
  ?>
<META http-equiv="Refresh" content="0; url=http://localhost/web1/admin/package_detail.php">
<?php

}

else
{






if(file_exists("upload/" . $_FILES['img1']['name'].$_FILES['img2']['name'].$_FILES['img3']['name']))
{
    $filename1 = $_FILES['img1']['name'];
    $filename2 = $_FILES['img2']['name'];
    $filename3 = $_FILES['img3']['name'];


    echo "<script>alert('Image Already exists')</script>";
    ?>
  <META http-equiv="Refresh" content="0; url=http://localhost/web1/admin/package_detail.php">
   <?php
}

else
{





$query="INSERT INTO `package_details`(`package_details_id`, `package_day`, `package_name`,`package_discription`, `brakfast`, `lunch`, `dinner`,`img1`,`img2`,`img3`) VALUES (null,'$pc_day','$pc_name','$dis','$brerakfast','$lunch','$dinner','$img1','$img2','$img3')";

$res=mysqli_query($con,$query);
if($res)
{
move_uploaded_file($_FILES['img1']["tmp_name"], "upload/".$_FILES['img1']["name"]);
move_uploaded_file($_FILES['img2']["tmp_name"], "upload/".$_FILES['img2']["name"]);
move_uploaded_file($_FILES['img3']["tmp_name"], "upload/".$_FILES['img3']["name"]);

  echo "<script>alert('Data Insert Sucessfully')</script>";
  ?>
  <META http-equiv="Refresh" content="0; url=http://localhost/web1/admin/package_detail.php">
  <?php
  
}
else
{


}
}
}
} 

$sql = "select * from `package_details`";
$result=mysqli_query($con,$sql);


?>







<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap'); */

   		
@media screen and (min-width: 10%) {


    /* CSS for header */
    .header {
      display: flex;
      /* justify-content: space-between; */
      align-items: left;
      background-color:;
      box-shadow: ;
      font-size :200%;
      
      /* text-align:center; */

transition: 0.5s;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: ;
      text-decoration: none;
      margin-left: 85px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #990f02;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #ffff;
      padding: 35px 20px;
    }


    /* CSS for footer */
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #302f49;
      padding: 40px 80px;
      margin-top:33px;
    }

    .footer .copy {
      color: #fff;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }

    body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.bt{
  background-color: blue;
  color: white;
  padding: 8px 14px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  height:30%;
}

.frm
{

margin-top:35 px; 
   box-shadow: 0 5px 30px rgba(75, 75, 75, 0.6);
font-size:180%;
 transition: 0.5s;
}

.frm1
{

margin-top:35 px; 
   box-shadow: 0 5px 30px rgba(75, 75, 75, 0.6);
/* font-size:200%; */
 transition: 0.5s;
}



.bt:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.mer
{

  margin-top:33px;
}
}
  </style>
</head>
<body >
<!-- <header class="header"><h1>Places form</h1>
  
      
  </header> -->
  <main  >


<form  method="post" class="frm" style="margin-top:80px;" enctype="multipart/form-data">
  
<h2 style="margin-left:433px; margin-top:12px;"><b> Package Detail form</b></h2>
  <div class="container"><table   colspan="12" cellpadding="7" align="center">
<!-- 
  <tr>
  <div class="mb-3">
  <label for="formFile" class="form-label">Place image</label>
  <input class="form-control" name="img"  accept="image/*" type="file" id="formFile">
</div>
    </tr><br> -->

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> image1</label>
    <input class="form-control" name="img1"  accept="image/*" type="file" id="formFile">
  </div>
      </tr>
  

      <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> image2</label>
    <input class="form-control" name="img2"  accept="image/*" type="file" id="formFile">
  </div>
      </tr>
  

      <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label"> image3</label>
    <input class="form-control" name="img3"  accept="image/*" type="file" id="formFile">
  </div>
      </tr>
  
  

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">package Name</label>
    <input type="text" placeholder="Enter package name" class="form-control" name="pc_name" required> </td>
    </div>
    </tr>
    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">package day</label>
    <input type="text" placeholder="Enter package day" class="form-control" name="pc_day" required> </td>
    </div>
    </tr>

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">package description</label>
    <input type="text" placeholder="Enter package description" class="form-control" name="dis" required> </td>
    </div>
    </tr>

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">breakfast</label>
    <input type="text" class="form-control" placeholder="Enter breakfast" name="breakfast" required></td>
    </div>
    </tr>

    
        <tr>
        <div class="mb-3">
        <label for="formFile" class="form-label">lunch</label>
        <input type="boolen" class="form-control" placeholder="lunch" name="lunch" required></td>
        </div>
        </tr>
    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">dinner</label>
    <input type="text" class="form-control" placeholder="Enter dinner" name="dinner" required></td>
    </div>
    </tr>
    
     

  <tr><td>
  <div class="mb-3">
  
    <input class="btn btn-primary"  style="width:240%; border:none; font-size:155%; background-color:#A32CC4; margin-left:-140%; " class="form-control" type="submit" value="submit" name="submit"></td>
    </div>
  </tr>     
    </div>
 
    </table>
 
  </div>
</form>


<form class="frm1 mer" style="margin-bottom:80px;">
<div class="container p-3 my-5 bg-light border border-primary" >
<h2>package detail Data Tabels</h2>
        <!-- DataTable Code starts -->
        <table id="example" class="table table-striped nowrap frm" style="width:100% " >
            <thead>
                <tr>
                    <th>id</th>
                    <th>package Name</th>
                    <th>package day</th>
                    <th>package discription</th>
                    <th>break fast</th>
                    <th>lunch </th>
                    <th>img1</th>
                    <th>$img2</th>
                    <th>img3</th>
                    
                    <!-- <th>price</th> -->
                    
                    <th>Update</th>
                    <th>Delete</th>
                   
                </tr>
            </thead>
            <tbody>
            <?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

        <tr>

        <td><?php echo $row['package_details_id']; ?></td>
        <td><?php echo $row['package_name']; ?></td>
        <td><?php echo $row['package_day']; ?></td>

        <td><?php echo $row['package_discription']; ?></td>
        <td><?php echo $row['brakfast']; ?></td>
        <td><?php echo $row['lunch']; ?></td>
        <td><?php echo $row['dinner']; ?></td>

        <td><img src="<?php echo "upload/".$row['img1'];?>" width="100px; "alt="Image"></td>
        <td><img src="<?php echo "upload/".$row['img2'];?>" width="100px; "alt="Image"></td>
        <td><img src="<?php echo "upload/".$row['img3'];?>" width="100px; "alt="Image"></td>

        
        <!-- <td><?php //$row['tour_price']; ?></td> -->




        <td><a href="update_package_detail.php?package_details_id=<?php echo $row['package_details_id'];?>" class="btn btn-info">Update</a></td>
       

       <td>
       
        <a href="delete_package_detail.php?package_details_id=<?php echo $row['package_details_id'];?>" class="btn btn-danger">Delete</a>

      </td>
        
         </tr>                       

<?php       }

}

?>                
            </tbody>
        </table>
    </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

    <!-- Custom JS -->
    <script src="script.js"></script>
    </main>
 
</body>
</html>
