<?php
include 'php/include/links.php';
include 'php/include/navbar.php';
include "./config.php";


?>
<div class="backgroundsmall">
    <img src="images/breadcromb.jpg" alt="">
    <div class="overlay1">
        <h1 class="text-white">Your property</h1>
    </div>
</div>

<div class="container-fluid mb-5 mt-3">
    <h1>Properties Details</h1>
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
    $uname = $_SESSION['username'];
    $sql = mysqli_query($con, "SELECT * FROM  registration WHERE username= '$uname' ");
    if (mysqli_num_rows($sql) > 0) {
        while ($row = mysqli_fetch_assoc($sql)) {
            $id = $row['id'];
        }
    }
    $query = "SELECT * FROM propery_details where uid='$id'";
    $query_run = mysqli_query($con, $query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>p_name</th>
                <th>bhk</th>
                <th>selling_type</th>
                <th>p_owner</th>
                <th>p_discription</th>
                <th>floor</th>
                <th>total_floor</th>
                <th>price</th>
                <th>area_size</th>
                <th>city</th>
                <th>address</th>
                <th>state</th>
                <th>p_type</th>
                <th>property_age</th>
                <th>Swimming Pool</th>
                <th>Parking</th>
                <th>GYM</th>
                <th>Alivator</th>
                <th>CCTV</th>
                <th>Water_supply</th>
                <th>Security</th>
                <th>img1</th>
                <th>img2</th>
                <th>img3</th>
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
                        <td><?php echo $row['p_id']; ?></td>
                        <td><?php echo $row['p_name']; ?></td>
                        <td><?php echo $row['bhk']; ?></td>
                        <td><?php echo $row['selling_type']; ?></td>
                        <td><?php echo $row['p_owner']; ?></td>
                        <td><?php echo $row['p_discription']; ?></td>
                        <td><?php echo $row['floor']; ?></td>
                        <td><?php echo $row['total_floor']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['area_size']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><?php echo $row['p_type']; ?></td>
                        <td><?php echo $row['property_age']; ?></td>
                        <td><?php echo $row['swimming_pool']; ?></td>
                        <td><?php echo $row['parking']; ?></td>
                        <td><?php echo $row['gym']; ?></td>
                        <td><?php echo $row['Alivator']; ?></td>
                        <td><?php echo $row['cctv']; ?></td>
                        <td><?php echo $row['water_supply']; ?></td>
                        <td><?php echo $row['security']; ?></td>
                        <td><?php echo $row['img1']; ?></td>
                        <td><?php echo $row['img2']; ?></td>
                        <td><?php echo $row['img3']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <form action="UserPro_Details_Edit.php" method="post">
                                <input type="hidden" name="View_Details_Edit_id" value="<?php echo $row['p_id']; ?>">
                                <button type="submit" name="View_edit_btn" class="btn btn-success"> EDIT</button>
                            </form>
                        </td>
                        <td>
                            <form action="user_pDelete.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['p_id']; ?>">
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
</div>
<script src="bootstrap/js/app.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>