<?php
include_once "header.php";
include "conn.php";
if (isset($_POST['update'])) {

$img1=$_FILES['img1']['name'];  
$img2=$_FILES['img2']['name'];  
$img3=$_FILES['img3']['name'];  


    $user_id=$_GET['package_details_id'];
    $pc_day=$_POST['pc_day'];
    $pc_name=$_POST['pc_name'];
    $dis=$_POST['dis'];
    $brerakfast=$_POST['breakfast'];
    $lunch=$_POST['lunch'];
    $dinner=$_POST['dinner'];
    

        $query = "UPDATE `package_details` SET `package_name`='$pc_name',`package_day`='$pc_day',`package_discription`='$dis',`brakfast`='$brerakfast',`lunch`='$lunch',`dinner`='$dinner',`img1`='$img1',`img2`='$img2',`img3`='$img3' WHERE `package_details_id`='$user_id'";

        $result=mysqli_query($con,$query);
        if($result == TRUE)
        {
          if($_FILES['img1']['name'] != '' && $_FILES['img2']['name'] != '' && $_FILES['img2']['name'] != '' )
          {
              move_uploaded_file($_FILES['img1']["tmp_name"], "upload/".$_FILES['img1']["name"]);
              move_uploaded_file($_FILES['img2']["tmp_name"], "upload/".$_FILES['img2']["name"]);
              move_uploaded_file($_FILES['img3']["tmp_name"], "upload/".$_FILES['img3']["name"]);
            //  unlink("upload/".$oldimg);
          }

           

            

            echo "<script>alert('Data Updated Sucessfully')</script>";
            ?>
            <META http-equiv="Refresh" content="0; url=http://localhost/web1/admin/package_detail.php">
            <?php
        
        }
        else
        {
        
        
        }
      

        
    }
        

if (isset($_GET['package_details_id'])) {

    $user_id = $_GET['package_details_id']; 

    $que = "SELECT * FROM `package_details` WHERE `package_details_id`='$user_id'";

    $res=mysqli_query($con,$que);

    if ($res->num_rows > 0)    {           

        while ($row = $res->fetch_assoc()) {

         

          
       $pc_day= $row['package_day'];
       $pc_name= $row['package_name'];

       $dis  =$row['package_discription']; 
       $brerakfast= $row['brakfast']; 
      $lunch=  $row['lunch']; 
       $dinner= $row['dinner']; 


        } 
    }
}
?>
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
  
<h2 style="margin-left:433px; margin-top:12px;"><b> update package details</b></h2>
  <div class="container"><table   colspan="12" cellpadding="7" align="center">


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
    <label for="formFile" class="form-label">package name</label>
    <input type="text" placeholder="Enter package name" class="form-control" name="pc_name" value="<?php echo $pc_name;?>" required> </td>
    </div>
    </tr>
  <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">package day</label>
    <input type="text" placeholder="Enter package day" class="form-control" name="pc_day" value="<?php echo $pc_day;?>" required> </td>
    </div>
    </tr>

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">Discription</label>
    <input type="text" placeholder="Enter discription" class="form-control" name="dis" value="<?php echo $dis;?>"required> </td>
    </div>
    </tr>

    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">breakfast</label>
    <input type="text" class="form-control" placeholder="Enter breakfast" name="breakfast" value="<?php echo $brerakfast;?>" required></td>
    </div>
    </tr>

    
        <tr>
        <div class="mb-3">
        <label for="formFile" class="form-label">lunch</label>
        <input type="boolen" class="form-control" placeholder="lunch" name="lunch" value="<?php echo $lunch;?>" required></td>
        </div>
        </tr>
    <tr>
    <div class="mb-3">
    <label for="formFile" class="form-label">dinner</label>
    <input type="text" class="form-control" placeholder="Enter dinner" name="dinner" value="<?php echo $dinner;?>"required></td>
    </div>
    </tr>
    
     

  <tr><td>
  <div class="mb-3">
  
    <input class="btn btn-primary"  style="width:240%; border:none; font-size:155%; background-color:#A32CC4; margin-left:-140%; " class="form-control" type="submit" value="update" name="update"></td>
    </div>
  </tr>     
    
    </div>
 
    </table>
 
  </div>
</form>

