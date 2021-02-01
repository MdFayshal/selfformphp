<?php
include('header.php');
require_once('database.php');

$id = $_GET['id'];
$show = "SELECT * FROM information WHERE id = $id";
$result = mysqli_query($connection,$show); 
 
?>


<div class="container my-5 ">
    <div class="jumbotron bg-dark py-5 ">
        <h1 class="display-4 text-center text-light bg-info py-3 my-5">EditForm</h1>
        <form class="form-horizontal offset-3" action="editinfo.php" method="GET" name="form">
        <?php
                while ($sh=mysqli_fetch_assoc($result)){
            ?>
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label text-info">ID-Number</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="id" value="<?php echo $id;?>">
                </div>
            </div>       
        <div class="row mb-3">
                <label class="col-sm-2 col-form-label text-info ">First Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="fn" value="<?php echo $sh['first_name'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label text-info">Last Name</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="ln" value="<?php echo $sh['last_name'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label text-info">Address</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="ad" value="<?php echo $sh['uaddress'];?>">
                </div>
            </div>
            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label text-info">Email</label>
                <div class="col-sm-6">
                <input type="email" class="form-control" name="em" value="<?php echo $sh['email'];?>">
                </div>
            </div>
            <div class="offset-2">
            <button type="submit" name="submit" class="btn btn-info text-light mr-2">Update</button>
            <button type="reset" class="btn btn-info text-light ">Reset</button>
            <a href="index1.php"type="submit"  class="btn btn-info text-light">Show All</a>
            </div>
            <?php } ?>
        </form>
            


    </div>
</div>

<?php
if(isset($_GET["submit"])){
    $name1  = $_GET['fn'];
    $name2  = $_GET['ln'];
    $add    = $_GET['ad'];
    $email  = $_GET['em'];
    $id     = $_GET['id'];


    $update = "UPDATE information SET first_name = '$name1', last_name = '$name2',uaddress=' $add', email = '$email' WHERE id = $id";
    $updated = mysqli_query($connection,$update);

    if($updated){
        
        echo "<script>alert('Update Done.')</script>";
        //header("Location:index1.php");
        
    }else{
        echo "--------------------------------File To Updated";
    }
                             
}

?>


<?php include('footer.php')?>