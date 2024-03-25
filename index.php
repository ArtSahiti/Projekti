<?php
session_start();
$servername="localhost";
        $username="root";
        $password="";
        $dbname="productdb";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn){
          echo "Failed to connect";  
        }

        if(isset($_POST["add"])){
          $productId = $_GET["id"];
          $productName = $_POST["hidden_name"];
          $productImage = $_POST["hidden_image"];
          $productPrice = $_POST["hidden_price"];
          $productQuantity = $_POST["quantity"];
          
          $sql = "INSERT INTO `product_second` (`description`, `image`, `price`, `quantity`) VALUES ('$productName', '$productImage', '$productPrice', '$productQuantity');";
          mysqli_query($conn, $sql);
        }

        ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylecart.css">
  <title>"LEVELUP"</title>
</head>
<body>

  <header>
    <h1><img src="./photo/LUP2_Asset-7.png" alt=""></h1>
  </header>

  <nav>
    <ul>
      <li><a href="./index.php" target="_blank" >Home</a></li>
      <li><a href="./aboutus.html" >About Us</a></li>
      <li><a href="review.html">Reviews</a></li>
      <li><a href="./login.php" target="blank">Log in</a></li>
      <li><a href="./cart.php">Cart</a></li>
      </a></li>
    </ul>
  </nav>
<main>
 
   <h2>Black Friday Deals!<h2>
    <div class="container">

      <?php
      $query = "SELECT * FROM `product_first` ORDER BY id ASC";
      $result = mysqli_query($conn, $query);

      if(mysqli_num_rows($result)>0){
           while($row = mysqli_fetch_array($result)){
            ?>
            <div class="product">
              <form action="index.php?action=add&id=<?php echo $row["id"]?>" method="post">
              <div class="product">
                <img src="photo/<?php echo $row["image"];?>" alt="">
                <h3><?php echo $row["description"]?></h3>
                <p>€<?php echo $row["price"];?></p>
                <input type="text" id="quantity" name="quantity" value="1">
                <input type="hidden" name="hidden_image" value="<?php echo $row["image"];?>">
                <input type="hidden" name="hidden_name" value="<?php echo $row["description"];?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
                <input type="submit" id="butoni" name="add" value="Add to Cart">
           </div>
           </form>
            </div>
            <?php
           }
      }
?>
      </div>





  
<hr>
 <div class="sllajder" >
   <header>
   <h1 style="color: aliceblue;"><b>White Friday !</b></h1>
   <img id="slideshow" name="mySlide"/>
   <button onclick="next()" id="button1" >→ </button></header>
 </div>
 <hr>
 <br>
 

 
    </main>


<br>

  
<footer>
  <div class="footer0">
    <h1>LEVELUP</h1>
  </div>
  <div class="footer1">
    Connect with us at
    <div class="social-media">
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
        <div class="div">Product Business</div>
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
  