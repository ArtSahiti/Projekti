<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <h1>Log In</h1><br><br>
        <form action="#" method="POST">

            <label style="color: red; font-size: 20px; opacity: 0;" id="labelUsername">Username</label><br><br>
            <input type="text" name="username"  id="username" placeholder="Username"><br>

            <label style="color: red; font-size: 20px; opacity: 0;" id="labelPassword">Password</label><br><br>
            <input type="password" name="password" id="password" placeholder="Password"><br><br>

            <input type="submit" value="Login" id="submit" onclick="validateLogin()"><br>

            <div class="Register">
                <a href="register.php"><input type="button" value="Register" id="href"></a>
            </div>
            <h6>Nuk keni Account? Klikoni ketu per tu regjistruar</h6>
        </form>
    </div>

    <script>
    function validateLogin() {
        let usernameInput = document.getElementById('username');
        let passwordInput = document.getElementById('password');
        let labelUsername = document.getElementById('labelUsername');
        let labelPassword = document.getElementById('labelPassword');

        labelUsername.style.opacity = '0';
        labelPassword.style.opacity = '0';

        if (usernameInput.value.trim() === "" || passwordInput.value.trim() === "") {
            
            labelUsername.innerText = 'All fields should be filled';
            labelUsername.style.opacity = '1';
            return false; 
        }

   
        return true;
    }
</script>


    <script src="scrips.js"></script>
</body>

</html>




<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];


    $sql="select * from login where username='".$username."' AND password='".$password."' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);


    if (empty($username) || empty($password)) {
        echo '<script type="text/javascript">validateLogin();</script>';
    } else {

        if($row["usertype"]=="user")
    {

        $_SESSION["username"]=$username;

        header("location:userhome.php");
    }
    elseif($row["usertype"]=="admin")
    {

        $_SESSION["username"]=$username;

        header("location:adminhome.php");
    }
 
}


    }



?>