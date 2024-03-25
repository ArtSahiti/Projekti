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

        if(isset($_GET["action"]) && $_GET["action"] == "delete"){
            $productName = $_GET["name"];
            $deleteQuery = "DELETE FROM `product_second` WHERE description ='$productName'";
            mysqli_query($conn, $deleteQuery);
        }
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>"LEVELUP"</title>
  <style>
/*Responsiveeeeeee*/

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
  
  header{
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
    
    nav a {
      text-decoration: none;
      color: #fff;
    }
    nav ul :hover{
      transform: scale(1.1);
      color: red;
      transition: 0.5s;
    }
    main h2{
        text-align: center;
    }
   
    table{
      width: 100%;
      padding: 20px;
      background-color:lightgrey;
  }
  h3{
      text-align: center;
  }
    

    footer {
        display: flex;
        flex-direction:column;
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
    
    
    
      /*
      Testojme
      Testojme
      Testojme
    
      */
    
    .aboutustext{
      display: flex;
        width: 100%;
        justify-content: space-evenly;
        align-items: center;
        flex-wrap: wrap;
        padding-bottom: 10px;
        
        
        
    }
    .aboutustext p {
      margin-left: 350px;
      margin-right: 350px;
      border-radius: 15px;
      box-shadow: 7px 7px 15px rgba(0, 0, 0, 0.3);
      padding: 15px;
      margin-bottom: 15px;
    
      
    }
    
    
    
    
  </style>
</head>
<body>

  <header>
    <h1><img src="./photo/LUP2_Asset-7.png" alt=""></h1>
  </header>

  <nav>
    <ul>
      <li><a href="./userhome.php" target="_blank" >Home</a></li>
      <li><a href="./aboutus.html" >About Us</a></li>
      <li><a href="review.html">Reviews</a></li>
      <li><a href="./logout.php">Logout</a></li>
      <li><a href="./cart.php">Cart</a></li>
      </a></li>
    </ul>
  </nav>
  <h3>Cart</h3>
  <div clas ="table_container">
    <table>
         <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Total Price</th>
            <th>Remove Item</th>
         </tr>
         <?php
         $query = "SELECT * FROM `product_second` ORDER BY id ASC";
      $result = mysqli_query($conn, $query);
      $total = 0;
      if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><img src="photo/<?php echo $row["image"];?>" alt=""></td>
            <td><?php echo $row["description"];?></td>
            <td><?php echo $row["price"];?></td>
            <td><?php echo $row["quantity"];?></td>
            <td><?php echo number_format($row["quantity"]*$row["price"],2);?></td>
            <td><a href="cart.php?action=delete&name=<?php echo $row["description"];?>"><span>Remove Item</span></a></td>
            <?php
            $total = $total + ($row["quantity"]*$row["price"]);
            
        
      }
    }
    ?>
    </tr>
    <tr></tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total</td>
        <td><?phpecho number_format($total, 2);?></td>
        <td><button>Proceed to Payment</button></td>
    </tr>
    </table>
  </div>
</body>

