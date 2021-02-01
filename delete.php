<?php
require_once('database.php');
$id = $_GET['id'];

$delete="DELETE FROM `information` WHERE `information`.`id` = $id";
$res=mysqli_query($connection,$delete);

if($res){
    header("Location:index1.php");
    echo "delete done";
}else{
    echo "Error : Can't delete your information !!";
}

?>