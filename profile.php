<?php
// Start session and include necessary files (e.g., database connection)
session_start();
include "conn.php";

// Check if user is logged in
// if(!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

// Fetch user data from the database
// $user_id = $_SESSION['user_id'];
$user_id = '1';
$query = "SELECT * FROM login WHERE login_id = '1'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {        
      
    while ($row = $result->fetch_assoc()) {

// $user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

.profile-info {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}

    </style>
    <div class="container">
        <h2>User Profile</h2>
        <div class="profile-info">
            <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
            <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
            <!-- Add more user information here -->
        </div>
        <a href="edit_profile.php">Edit Profile</a>
        <!-- Add logout button or link -->
    </div>
</body>
</html>
<?php
    }}
    ?>

    
<?php
      include_once "footer.php";
      ?>