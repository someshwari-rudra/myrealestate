<?php
session_start();
include 'includes/db.php';
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div> -->

            <!-- Content Row -->


            <!-- Content Row -->



            <div class="container-fluid mt-5">
                <div class="row">
                    <h1>Edit User Registration Details</h1>
                </div>
                <form action="code.php" method="POST">
                    <div class="modal-body">
                        <?php
                        if (isset($_POST['User_edit_btn'])) {
                            $id = $_POST['User_Details_Edit_id'];
                            echo $id;
                            $query = "SELECT * FROM registration WHERE id='$id' ";
                            $qyery_run = mysqli_query($connection, $query);

                            foreach ($qyery_run as $row) {
                        ?>
                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                <div class="form-group">
                                    <label> Username </label>
                                    <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control checking_email" placeholder="Enter Email" required>
                                    <small class="error_email" style="color: red;"></small>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password" required>
                                </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="UserD_updatebtn" class="btn btn-primary">Save</button>
                    </div>
                </form>
        <?php
                            }
                        }
        ?>

            </div>
            <?php
            include('includes/scripts.php');

            ?>