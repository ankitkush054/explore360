<?php
include "conn.php";

if (isset($_GET['name'])) {

    $name = $_GET['name']; 
    
  }

if (isset($_GET['member'])) {

    $member = $_GET['member']; 
    
  }

if (isset($_GET['price'])) {

    $price = $_GET['price']; 
    
  }

if (isset($_GET['total'])) {

    $total = $_GET['total']; 
    
  }

if (isset($_GET['date'])) {

    $date = $_GET['date']; 
    
  }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    

    <!-- Font Awesome -->
    <!-- <script
      src="https://kit.fontawesome.com/bb515311f9.js"
      crossorigin="anonymous"
    ></script> -->

    <div class="checkout-container">
      <!-- <div class="left-side"> -->
        <!-- <div class="text-box"> -->
          <!-- <h1 class="home-heading">Modern Home</h1> -->
          <!-- <p class="home-price"><em>249.50 USD </em>/ 1 night</p>
          <hr class="left-hr" />
          <p class="home-desc"><em>Entire home </em>for <em>2 guest</em></p>
          <p class="home-desc">
            <em>Tue, July 23, 2022 </em>to <em>Thu, July 25, 2022</em>
          </p>
        </div> -->
      <!-- </div> -->

      <div class="right-side">
        <div class="receipt">
          <h1 class="receipt-heading">Purchase Package</h1>
          <div>
            <table class="table">
              <tr>
                <td>Package name</td>
                <td class="price"><?php echo $name;?></td>
              </tr>
              <tr>
                <td>Member</td>
                <td class="price"><?php echo $member;?></td>
              </tr>
              <tr>
                <td>Date</td>
                <td class="price"><?php echo $date;?></td>
              </tr>
              <tr>
                <td>Price</td>
                <td class="price"><?php echo $price;?></td>
              </tr>
              <tr class="total">
                <td>Total</td>
                <td class="price"><?php echo $total;?></td>
              </tr>
            </table>
          </div>
        </div>

        <div class="payment-info">
          <h3 class="payment-heading">Payment Information</h3>
          <form
            class="form-box"
            enctype="text/plain"
            method="get"
            target="_blank"
          >
            <!-- <div>
              <label for="full-name">Full Name</label>
              <input
                id="full-name"
                name="full-name"
                placeholder="Satoshi Nakamoto"
                required
                type="text"
              />
            </div> -->

            <!-- <div>
              <label for="credit-card-num"
                >Card Number
                <span class="card-logos">
                  <i class="card-logo fa-brands fa-cc-visa"></i>
                  <i class="card-logo fa-brands fa-cc-amex"></i>
                  <i class="card-logo fa-brands fa-cc-mastercard"></i>
                  <i class="card-logo fa-brands fa-cc-discover"></i> </span
              ></label>
              <input
                id="credit-card-num"
                name="credit-card-num"
                placeholder="1111-2222-3333-4444"
                required
                type="text"
              />
            </div> -->

            <div>
              <p class="expires">Payment type</p>
              <!-- <label for="expiration-month"></label> -->
              <select style="width:100%; height:40%" id="expiration-month" name="expiration-month" required>
                  <option value="">Payment type:</option>
                  <option value="">Online</option>
                  <option value="">On-site</option>
                  <!-- <option value="">February</option>
                  <option value="">March</option>
                  <option value="">April</option>
                  <option value="">May</option>
                  <option value="">June</option>
                  <option value="">July</option>
                  <option value="">August</option>
                  <option value="">September</option>
                  <option value="">October</option>
                  <option value="">November</option>
                  <option value="">Decemeber</option> -->
                </select>
                <div class="card-experation">
                
                <!-- <label class="expiration-year">Year</label>
                <select id="experation-year" name="experation-year" required>
                  <option value="">Year</option>
                  <option value="">2023</option>
                  <option value="">2024</option>
                  <option value="">2025</option>
                  <option value="">2026</option>
                </select> -->
              </div>
            </div>

            
        </form>
        <!-- <p class="footer-text">
            <i class="fa-solid fa-lock"></i>
            Your credit card infomration is encrypted
        </p> -->
    </div> <br>
    <hr style="border: solid 1px white;">
   <form action="" method="post"> <button type="submit" name="submit" value="submit" class="btn">
      <i class="fa-solid fa-lock"></i> Book Securely
    </button> </form>   <hr style="border: solid 1px white;">

      </div>
    </div>
  </body>





  <style>
/* 
* {
  box-sizing: border-box;
  margin: 0;
  background:linear-gradient(to right, #0d7377,#00838f,#0097a7);
  padding: 0;
} */

html {
    font-size: 62.5%; /* 10/16 = 0.625 * 100 */
}

body {
    background:linear-gradient(to right, #0d7377,#00838f,#0097a7);
  /* background: url('https://images.pexels.com/photos/2876787/pexels-photo-2876787.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'); */
  background-position: center;
  background-size: cover;
  backdrop-filter: blur(8px);
  color: white;
width: 95%;
  display: flex;
  justify-content: center;
  height: 95%;
  
  font-family: 'Monsterrat', sans-serif;
  position: relative;
  padding: 2rem 0;
}

.checkout-container {
  /* background-color: red; */
  max-width: 80%;
  height: 50rem;
  display: grid;
  width: 100%;
margin-top:5%;
  grid-template-columns: 1fr 1fr;
  justify-content: center;
  /* margin-bottom: 10rem; */
}

em {
  font-style: normal;
  font-weight: 70%;
}

hr {
  color: black;
  margin-bottom: 1.2rem;
}

/* Left Side Of Container */
.left-side {
  background: url('https://images.pexels.com/photos/2876787/pexels-photo-2876787.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
  background-position: center;
  background-size: cover;
  position: relative;
}

.text-box {
  background: rgba(95, 121, 134, 0.8);
  width: 100%;
  padding: 1rem 2rem;
  position: absolute;
  bottom: 0;
}

/* Left container text */

.home-heading {
  color: #e8e8e1;
  font-size: 3.2rem;
  font-weight: 700;
  line-height: 1;
  margin-bottom: 1rem;
}

.home-price {
  color: #aeae97;
  font-size: 2rem;
  margin-bottom: 1.2rem;
}

.home-desc {
  color: #e8e8e1;
  font-size: 1.2rem;
  line-height: 1.5;
  letter-spacing: 0.5px;
}

/* Right Side of container */

.right-side {
  /* background-color: black; */
  /* padding: 1.8rem 3.2rem; */
}

.receipt {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  border-bottom: solid 1px;
  margin-bottom: 1rem;
}

.receipt-heading {
  font-size: 5rem;
  text-align: center;
}

.table {
    
  border-collapse: separate;
  border-spacing: 0 1.5rem;
  color: #white;
  font-size: 250%;
  margin-bottom: 0.5rem;
  width: 100%;
}

.total td {
    font-style:bold;
  font-size: 250%;
  font-weight: 700;
}

.price {
  text-align: end;
}

/* Payment Section */

.payment-heading {
  font-size: 1.4rem;
  margin-bottom: 1rem;
}

.form-box {
  display: grid;
  grid-template-rows: 1fr;
  gap: 1.5rem;
}

.card-logo {
  font-size: 2rem;
}

.expires,
.form-box label {
  font-size: 200%;
  font-weight: 700;
}

.form-box input {
  font-family: inherit;
  font-size: 1.2rem;
  padding: 0.5rem;
  width: 100%;
}

.form-box select {
  padding: 0.5rem;
}

.form-box #cvv {
  width: 25%;
}

.cvv-info:link,
.cvv-info:visited {
  color: inherit;
  text-decoration: underline;
}

.cvv-info:hover,
.cvv-info:active {
  color: #5f7986;
  text-decoration: none;
}

.btn {
  background-color: #4c616b;
  border: none;
  border-radius: 8px;
  color: #eff2f3;
  
  font-size: 1.6rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  margin-bottom: 1rem;
  margin-left: 40rem;
  padding: 1.5rem;
  cursor: pointer;
}

.btn:hover {
  background-color: #5f7986;
  transition: ease-out 0.1s;
}

.footer-text {
  font-size: 1rem;
  text-align: center;
}

.form-box *:focus {
  outline: none;
  box-shadow: 0 0 0 0.8rem rgba(139, 139, 107, 0.5);
  border-radius: 8px;
}
  </style>


<?php
if(isset($_POST['submit']))
{
    echo "<script>alert('purchase');</script>";
}