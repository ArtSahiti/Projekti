<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <title>"LEVELUP"</title>
</head>
<body>

  <header>
    <h1><img src="./photo/LUP2_Asset-7.png" alt=""></h1>
  </header>

  <nav>
    <ul>
      <li><a href="./adminhome.php" target="_blank" >Home</a></li>
      <li><a href="./aboutus.php" >About Us</a></li>
      <li><a href="./review.php">Reviews</a></li>
      <li><a href="./login.php" target="blank">Log in</a></li>
      <li><a href="./logout.php">Logout</a></li>
      

    </ul>
  </nav>

<center><h1>THIS IS ADMIN HOME PAGE</h1><?php echo $_SESSION["username"] ?></center>

<div class="container my-5">
<h2>Clients</h2>
<a class="btn btn-primary" href="\Projektifin\create.php" role="button">New Client</a>
<br>
<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Emri</th>
        <th>Gmail</th>
        <th>Number</th>
        <th>State</th>
        <th>Date</th>
    </tr>
</thead>

    <tbody>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $db="user";

        $connection = new mysqli($servername,$username,$password,$db);

        if($connection->connect_error)
        {
	    die("connection error");
        }
        $sql = "SELECT * FROM clients";
        $result = $connection->query($sql);

        if(!$result)
        {
	    die("connection error");
        }

        while($row = $result->fetch_assoc()){
            echo "
            <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[address]</td>
            <td>$row[created_at]</td>
            <td>
                <a  class='btn' href='/mypage/edit.php?id=$row[id]'>Edit</a>
                <a  class='btn'  href='/mypage/delete.php?id=$row[id]'>Delete</a>
            </td>
        </tr>

            
            ";
        }
        

        ?>
        

        

        

    </tbody>


</table>



</div>












<a href="logout.php">Logout</a>
<footer>
    <div class="footer0">
      <h1>LEVELUP</h1>
    </div>
    <div class="footer1 ">
      Connect with us at<div class="social-media">
        <a href="https://www.facebook.com/" target="_blank">
          <img src="./photo/fb_icon_325x325.png" alt="">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
        <a href="https://www.linkedin.com/" target="_blank">
          <img src="./photo/linkedin.png" alt="">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
        <a href="https://www.youtube.com/" target="_blank">
          <img src="./photo/youtube.png" alt="">
          <ion-icon name="logo-youtube"></ion-icon>
        </a>
        <a href="https://www.instagram.com/" target="_blank">
          <img src="./photo/Instagram_logo_2022.svg" alt="">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
        <a href="https://www.twitter.com/" target="_blank">
          <img src="./photo/Twitter_logo_blue.png" alt="">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </div>
    </div>
    <div class="footer2">

    
  <div class="product1">
    <div class="heading">Products</div>
    <div class="div">Sell your Products</div>
    <div class="div">Advertise</div>
    <div class="div">Pricing</div>
    <div class="div">Product Buisness</div>
    </div>
     
      
      <div class="services">
        <div class="heading">Services</div>
        <div class="div">Return</div>
        <div class="div">Cash Back</div>
        <div class="div">Affiliate Marketing</div>
        <div class="div">Others</div>
      </div>
      <div class="company">
        <div class="heading">Company</div>
        <div class="div">Complaint</div>
        <div class="div">Careers</div>
        <div class="div">Affiliate Marketing</div>
        <div class="div">Support</div>
      </div>
      <div class="gethelp">
        <div class="heading">Get Help</div>
        <div class="div">Help Center</div>
        <div class="div">Privacy Policy</div>
        <div class="div">Terms</div>
        <div class="div">Login</div>
      </div>
    </div>
    <div class="footer3">Copyright © <h4>"LEVELUP" team</h4> 2023-2025</div>
  </footer>
<script src="slider.js"></script>
</body>
</html> 