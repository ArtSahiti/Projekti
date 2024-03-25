<?php
if( isset($_GET["I"])){
    $I = $_GET["I"];
$servername="localhost";
 $username="root";
 $password="";
 $db="user";

 $connection = new mysqli($servername,$username,$password,$db);

 $sql = "DELETE FROM login WHERE I=$I";
 $connection->query($sql);
}
 header("location: /Projekti/adminhome.php");
 exit;
?>