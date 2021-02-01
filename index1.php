<?php 
include('header.php');
require_once('database.php');

$info = "SELECT * FROM information";
$result = mysqli_query($connection,$info); 
?>


<div class=" container-fluid bg-secondary">
    <div class="container p-5">
        <div class="jumbotron">
            <h1 class="display-4 text-center text-info pb-3 bg-dark">All Information</h1>
        
            <table class="table table-dark table-striped text-info">
                <thead>
                    <tr>
                    <th scope="col"class="text-info">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($lop=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                    <th scope="row"class="text-info"><?php echo $lop['id'];?></th>
                    <td class="text-info "><?php echo $lop['first_name'];?></td>
                    <td class="text-info "><?php echo $lop['last_name'];?></td>
                    <td class="text-info "><?php echo $lop['uaddress'];?></td>
                    <td class="text-info "><?php echo $lop['email'];?></td>
                    <td class="text-info ">
                    <a href="editinfo.php?id=<?php echo $lop['id'];?>" class="btn btn-sm btn-warning">Edit</a> ||
                    <a href="delete.php?id=<?php echo $lop['id']?>" class="btn btn-sm btn-danger text-light">Delete</a> ||
                    <a href="show.php?id=<?php echo $lop['id'];?>" class="btn btn-sm btn-success">Show</a>
                    </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
            <table class=" float-end text-info">
                    <tr>
                        <td>
                            <div class="container-fluid">
                                <form class=" collapse multi-collapse" id="multiCollapse1" action="insert.php" method="POST">
                                    <div class="row g-3">
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required=''>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="last_name"placeholder="Last Name" required=''>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="uaddress" placeholder="Address" required=''>
                                        </div>
                                        <div class="col-sm-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required=''>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" name="submit" id="multiCollapse1" class="btn btn-form-control btn-primary collapse multi-collapse">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>                       
                        </td>
                        <td>
                            <a class="btn btn-primary float-end" data-bs-toggle="collapse" href="#multiCollapse1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">AddNew</a>
                        </td>
                    </tr>                             
            </table>            
        </div>
    </div>
</div>



<?php include('footer.php')?>