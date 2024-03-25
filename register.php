<?php

$servername="localhost";
        $username="root";
        $password="";
        $db="user";
        $connection = new mysqli($servername,$username,$password,$db);


$username = "";
$password = "";
$surname = "";
$email = "";
$successMessage = "";


if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"]; 
    $password = $_POST["password"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];

do{
if( empty($username) || empty($password) || empty($surname) || empty($email)){
    $errorMessage = "All the fields are required";
    break;
}

$sql = "INSERT INTO login (username, password, surname, email)" .
"VALUES ('$username', '$password', '$surname', '$email')";
$result = $connection->query($sql);



if(!$result) {
    $errorMessage = "Invalid query:" . $connection->error;
    break;
}



$username = "";
$password = "";
$surname = "";
$email = "";
$successMessage = "Client added sucessfuly";




}while (false);


}

?>




<!DOCTYPE html>
<html>
<head>
    <title>Regjistrimi</title>
    <link rel="stylesheet" href="style3.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="register"> 
<h1>Register</h1>



<form method="post">



<div class = 'nm'>    
<div class = 'namediv'>
<input type="text"  id="emri" name="username" placeholder="Emri" value="<?php echo $username; ?>">
<label id="nameError" ></label>
</div><br><br><br><br>



<div class = 'mbiemridiv'><form action="#" method="post">
<input type="text"  id="mbiemri" name="surname" placeholder="Mbiemri" value="<?php echo $surname; ?>">
<label id="mbiemriError"></label>
</div>
</div>





<div class = 'emaildiv' >
<input type="text" class="form-control" id="email" name="email" placeholder="Emaili"  value="<?php echo $email; ?>"  >
<label id="emailError"></label>
</div><br>



<div class = 'passdiv'>
<input type="password" id="password"  name="password" placeholder="Password"   value="<?php echo $password; ?>" >
<label id="passwordError"></label>
</div>



<br>
<div class="row mb-3">
    <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="button" class="btn btn-primary" onclick="register()">Submit</button>
    </div>
    <br>
    <div class="offset-sm-3 col-sm-3 d-grid">
        <a class="btn btn-outline-primary" href="./login.php" role="button">Cancel</a>
    </div>
</div>        
    



</div>
</form>



</div>


<script>

let nameRegex = /^[A-Z][a-z]{1,}$/;
    let mbiemriRegex = /^[A-Z][a-z]{1,}$/;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
    let passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

    function register() {
        let emriInput = document.getElementById('emri');
        let mbiemriInput = document.getElementById('mbiemri');
        let emailInput = document.getElementById('email');
        let passwordInput = document.getElementById('password');

        let nameError = document.getElementById('nameError');
        let mbiemriError = document.getElementById('mbiemriError');
        let emailError = document.getElementById('emailError');
        let passwordError = document.getElementById('passwordError');

        nameError.innerText = '';
        mbiemriError.innerText = '';
        emailError.innerText = '';
        passwordError.innerText = '';

        if (!nameRegex.test(emriInput.value)) {
            nameError.innerText = 'Invalid Emri';
            return;
        }
        if (!nameRegex.test(mbiemriInput.value)) {
            mbiemriError.innerText = 'Invalid Mbiemri';
            return;
        }
        if (!emailRegex.test(emailInput.value)) {
            emailError.innerText = 'Invalid Email';
            return;
        }
        if (!passwordRegex.test(passwordInput.value)) {
            passwordError.innerText = 'Invalid Password';
            return;
        }

       
        document.querySelector('form').submit();
    }
</script>

<script src="./scrips.js"></script>






    
</body>



</html>