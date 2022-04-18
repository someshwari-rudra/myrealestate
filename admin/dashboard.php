<?php

include 'code.php';
include 'includes/db.php';
include('includes/header.php');
include('includes/navbar.php');
?>
<!-- End of Sidebar -->
<link rel="stylesheet" href="./css/dashboard.css">
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->

        <!-- End of Topbar -->
        <?php

        $clients = mysqli_query($connection, "SELECT * FROM registration ");
        $total_clients =mysqli_num_rows($clients);

        $sell = mysqli_query($connection, "SELECT selling_type FROM propery_details where selling_type='Sell' ");
        $total_sell =mysqli_num_rows($sell);
        
        $rent = mysqli_query($connection, "SELECT selling_type FROM propery_details where selling_type='Rent' ");
        $total_rent = mysqli_num_rows($rent);
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="main">
                    <div class="rec">
                        <h4 id="record">Total Users</h4>
                        <h5 id="num"><?php echo $total_clients?></h5>

                    </div>
                    <div class="rec">
                        <h4 id="record">Total Sell</h4>
                        <h5 id="num"><?php echo $total_sell?></h5>
                    </div>
                    <div class="rec">
                        <h4 id="record">Total Rent</h4>
                        <h5 id="num"><?php echo $total_rent?></h5>
                    </div>
            </div>



            <div class="container-fluid">
                <div class="row">
                    <div class="card shadow mb-4">
                        <div class="m-0 font-wight-bold text-primary">
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">Add Admin Profile</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="code.php" method="POST">

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label> Username </label>
                                        <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email" required>
                                        <small class="error_email" style="color: red;"></small>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
                                    </div>


                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="registerbtn" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>



            <div class="card-body">
                <h3 class="text-dark bg-success">
                    <?php
                    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                        echo ($_SESSION['success']);
                        unset($_SESSION['success']);
                    }
                    ?>
                </h3>
                <h3 class=" text-white bg-warning">
                    <?php
                    if (isset($_SESSION['status']) && $_SESSION['status'] != '')
                        echo ($_SESSION['status']);
                    unset($_SESSION['status']);
                    ?>
                </h3>
            </div>
            <div class="table-responsive">
                <?php
                $query = "SELECT * FROM register";
                $query_run = mysqli_query($con, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td>
                                        <form action="Admin_register_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>
            </div>



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


    <!-- End of Content Wrapper -->


    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>