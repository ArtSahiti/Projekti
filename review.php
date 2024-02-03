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
    <title>Product Reviews</title>
</head>
<body>
    
</body>
</html>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        @media only screen and (max-width: 600px) {
  
  body {
    font-size: 15px; 
  }
  nav {
    font-size: 10px;
  }
  .footer2 {
    display: flex;
    flex-direction: column;
  }
 
}


img {
  max-width: 100%;
  height: auto;
}

.product-container {
  display: flex;
  justify-content: space-around;
  
}






/*Responsiveeeeeeeee*/

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
  }
  
  nav {
    background-color: #555;
    color: #fff;
    padding: 10px;
  }
  
  nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-around;
  }
  nav ul :hover{
    transform: scale(1.1);
    color: red;
    transition: 0.5s;
  }
  
  nav a {
    text-decoration: none;
    color: #fff;
  }


  /* PJESA REVIEW */

        h1 {
            text-align: center;
            color: #333;
        }

        .review-container {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            justify-content: space-evenly;
            flex-direction: column;
        }

        .review {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
        }

        .review h2 {
            color: #333;
        }

        .review p {
            color: #555;
        }

        .user-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 10px;
            
        }

        .user-info span {
            color: #888;
        }

        /*FOTTERI*/


        footer {
    display: flex;
    flex-direction: column;
    background-color: black;
    align-items: center;
    color: white;
  }
  
  .footer1 {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
    margin-top: 15px;
  }
  .social-media {
    display: flex;
    justify-content: center;
    color: white;
    flex-wrap: wrap;
    
  }
  .social-media img {
    width: 40px;
    
  }
  .social-media a {
    color: white;
    margin: 20px;
    border-radius: 5px;
    margin-top: 10px;
    color: white;
  }
  .social-media a ion-icon {
    color: white;
    background-color: black;
  }
  .social-media a:hover ion-icon {
    color: red;
    transform: translateY(5px);
  }
  .footer2 {
    display: flex;
    width: 100%;
    justify-content: space-evenly;
    align-items: center;
    text-decoration: none;
    flex-wrap: wrap;
  }
  .footer0 {
    font-weight: 1200;
    transition-duration: 1s;
  }
  .footer0:hover {
    color: rgb(7, 101, 243);
  }
  .footer2 .heading {
    font-weight: 900;
    font-size: 18px;
  }
  .footer3 {
    margin-top: 60px;
    margin-bottom: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  .footer2 .heading:hover {
    color: rgb(7, 101, 243);
  }
  .footer2 .div:hover {
    transform: scale(1.05);
  }
  .footer3 h4 {
    margin: 0 10px;
  }
    </style>
</head>
<body>
    <header>
        <h1><img src="./photo/LUP2_Asset-7.png" alt=""></h1>
      </header>
    
      <nav>
        <ul>
          <li><a href="./userhome.php">Home</a></li>
          <li><a href="./aboutus.php" >About Us</a></li>
          <li><a href="./review.php">Reviews</a></li>
          <li><a href="login.php" >Log in</a></li>
          <li><a href="logout.php">Logout</a></li>
            
        </ul>
      </nav>
    

    <h1>Product Reviews</h1>

    <div class="review-container">
        <div class="review">
            <img src="./fotoart/userreview.png" width="50px" height="50px"  alt="">
            <h2>Great Laptop!</h2>
            <p>This laptop exceeded my expectations. It's fast, lightweight, and the battery life is amazing. Highly recommended!</p>
            <div class="user-info">
                <span>John Doe</span>
                <span>Posted on: January 15, 2023</span>
            </div>
        </div>

        <div class="review">
            <img src="./fotoart/userreview.png" width="50px" height="50px"  alt="">
            <h2>Excellent Build Quality</h2>
            <p>The build quality of this PC is outstanding. It feels robust and durable. I'm very satisfied with my purchase.</p>
            <div class="user-info">
                <span>Jane Smith</span>
                <span>Posted on: February 3, 2023</span>
            </div>
        </div>
       

<div class="review">
    <img src="./fotoart/userreview.png" width="50px" height="50px"  alt="">
    <h2>Impressive Performance</h2>
    <p>This PC's performance is outstanding, especially for gaming. It handles resource-intensive tasks with ease. Very happy with the purchase!</p>
    <div class="user-info">
        <span>Alice Johnson</span>
        <span>Posted on: March 10, 2023</span>
    </div>
</div>

<div class="review">
    <img src="./fotoart/userreview.png" width="50px" height="50px"  alt="">
    <h2>Sleek Design</h2>
    <p>The laptop's sleek and modern design caught my eye. It's not only powerful but also looks great. I'm delighted with my choice.</p>
    <div class="user-info">
        <span>Robert Davis</span>
        <span>Posted on: March 22, 2023</span>
    </div>
</div>

<div class="review">
    <img src="./fotoart/userreview.png" width="50px" height="50px"  alt="">
    <h2>Great Value for Money</h2>
    <p>This PC offers excellent value for money. The features it provides at this price point are unbeatable. Highly recommended for budget-conscious buyers.</p>
    <div class="user-info">
        <span>Lisa Turner</span>
        <span>Posted on: April 5, 2023</span>
    </div>
</div>

<div class="review">
    <img src="./fotoart/userreview.png" width="50px" height="50px"  alt="">
    <h2>Fast Shipping</h2>
    <p>I was pleasantly surprised by how quickly the laptop arrived. The shipping was fast, and the packaging was secure. A positive shopping experience overall.</p>
    <div class="user-info">
        <span>Michael Harris</span>
        <span>Posted on: April 18, 2023</span>
    </div>
</div>

<div class="review">
    <img src="./fotoart/userreview.png" width="50px" height="50px"  alt="">
    <h2>Responsive Customer Support</h2>
    <p>I had a few questions about the product, and the customer support team was quick to respond and very helpful. Great customer service!</p>
    <div class="user-info">
        <span>Sarah Miller</span>
        <span>Posted on: April 25, 2023</span>
    </div>
</div>


      

    </div>

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
          <div class="product">
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
          <div class="Company">
            <div class="heading">Company</div>
            <div class="div">Complaint</div>
            <div class="div">Careers</div>
            <div class="div">Affiliate Marketing</div>
            <div class="div">Support</div>
          </div>
          <div class="Get Help">
            <div class="heading">Get Help</div>
            <div class="div">Help Center</div>
            <div class="div">Privacy Policy</div>
            <div class="div">Terms</div>
            <div class="div">Login</div>
          </div>
        </div>
        <div class="footer3">Copyright © <h4>LEVELUP</h4> 2021-2028</div>
      </footer>
    <script src="slider.js"></script>
</body>
</html>
