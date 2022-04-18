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



            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="m-0 mb-3 font-wight-bold text-primary">
                        <h1>User Details</h1>
                    </div>
                </div>
                <div class="table-responsive">
                    <?php
                    $query = "SELECT * FROM registration";
                    $query_run = mysqli_query($connection, $query);
                    ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>status</th>
                                <th>Edit</th>
                                <th>Delete</th>
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
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                            <form action="User_Details_Edit.php" method="post">
                                                <input type="hidden" name="User_Details_Edit_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="User_edit_btn" class="btn btn-success"> EDIT</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="code.php" method="post">
                                                <input type="hidden" name="User_delete_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="User_delete_btn" class="btn btn-danger"> DELETE</button>
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
                <?php
                include('includes/scripts.php');
                ?>