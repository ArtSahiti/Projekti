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
$errorMessage = "";
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
$successMessage = "Client added correctly";



}while (false);


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>create</title>
    
</head>
<body>
     
<div class="continer my-5">
<h2>New Client</h2>

<?php 
if(!empty($errorMessage)){
    echo 
    "
    <div class='row mb-3'>;
    <div class='offset-sm-3 col-sm-6'>
    <div class='alert alert-warning alert-dismissible fade show' role= 'alert'>
    <strong>$errorMessage</strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></br> 
    </div>
    </div>
    </div>
    
    ";


}

?>

<form method="post">
    <div class="row mb-3">
<label class="col-sm-3 col-form-label">Name</label>
<div class="col-sm-6">
    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
</div>
</div>

<form method="post">
    <div class="row mb-3">
<label class="col-sm-3 col-form-label">Surname</label>
<div class="col-sm-6">
    <input type="text" class="form-control" name="surname" value="<?php echo $surname; ?>">
</div>
</div>

<form method="post">
    <div class="row mb-3">
<label class="col-sm-3 col-form-label">Email</label>
<div class="col-sm-6">
    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
</div>
</div>

    <div class="row mb-3">
<label class="col-sm-3 col-form-label">Password</label>
<div class="col-sm-6">
    <input type="password" class="form-control" name="password" value="<?php echo $password; ?>">
</div>
</div>

 

        <?php  
        if ( !empty($successMessage)){
            echo " <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
            <div class='alert alert-warning alert-dismissible fade show' role= 'alert'>
            <strong>$successMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> 
            </div>
            </div>
            </div>
            ";
        }
        ?>


    <div class="row mb-3">
        <div class="offset-sm-3 col-sm-3 d-grid">
<button type="submit" class="btn btn-primary" >Submit</button>
</div>
<div class="offset-sm-3 col-sm-3 d-grid">
    <a class="btn btn-outline-primary" href="./adminhome.php" role="button">Cancel</a>
</div>
</div>

</form>
</div>
</body>
</html>