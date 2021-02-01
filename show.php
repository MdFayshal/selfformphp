
<?php 
include('header.php');
require_once('database.php');
?>
<?php

$id=$_GET['id'];

$show = "SELECT * FROM information WHERE id = $id";
$result = mysqli_query($connection,$show); 

?>


<div class=" container-fluid bg-secondary">
<div class="container bg-dark  p-5 mt-5">
    <div class="jumbotron">
    <h1 class="display-4 text-center bg-dark text-info pb-3"><?php echo"Your ID - ".$id;?></h1>
        <table class="table table-dark table-striped text-info">
        <tbody>
        <?php
                while ($sh=mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <th class="text-info ">First Name</th>
            <td class="text-light "><?php echo $sh['first_name'];?></td>

            </tr>
            <tr>
            <th class="text-info "> Last Name</th>
            <td class="text-light "><?php echo $sh['last_name'];?></td>

            </tr>
            <tr>
            <th class="text-info ">Address</th>
            <td class="text-light "><?php echo $sh['uaddress'];?></td>
        
            </tr>
            <tr>
            <th class="text-info ">Email</th>
            <td class="text-light "><?php echo $sh['email'];?></td>
        
            </tr>
        <?php }?>
        </tbody>
        </table>   
    <div class="text-end">
    <a href="index1.php" class="btn btn-info text-light">Back</a>
    </div>
    </div>
</div>
</div>







<?php include('footer.php')?>
