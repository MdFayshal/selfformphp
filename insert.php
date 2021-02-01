<?php
require_once('database.php');

$first_name  = $_POST['first_name'];
$last_name   = $_POST['last_name'];
$uaddress    = $_POST['uaddress'];
$email       = $_POST['email'];

$info = "INSERT INTO information (first_name,last_name,uaddress,email) VALUES('$first_name','$last_name','$uaddress','$email')";

$result = mysqli_query($connection,$info) or die(mysqli_error($connection));

if($result == True){
    header("Location:index1.php");
}else{
    echo "Error";
}


?>