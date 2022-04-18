<?php
include 'php/include/links.php';
include 'php/include/navbar.php';
include "./config.php";
?>
<div class="background">
    <img src="images/breadcromb.jpg" alt="">
    <div class="container overlay">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="text-white">
                    <h1 class="mb-4"><span class="text-primary">Find</span><br>
                        Your dream house</h1>
                    <form method="post" action="propertySearch.php">
                        <div class="row">
                            <div class="col-md-6 col-lg-2">
                                <div class="form-group">
                                    <select class="form-control" name="type">
                                        <option value="">Select Type</option>
                                        <option value="appartment">appartment</option>
                                        <option value="flat">Flat</option>
                                        <option value="bunglow">Bunglow</option>
                                        <option value="house">House</option>
                                        <option value="villa">Villa</option>
                                        <option value="office">Office</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <div class="form-group">
                                    <select class="form-control" name="stype">
                                        <option value="">Select Status</option>
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sell</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" placeholder="Enter City or Enter State" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-2">
                                <div class="form-group">
                                    <button type="submit" name="filter" class="btn btn-primary w-100">Search Property</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
        </div>
        <div class="row">

            <?php

            if (isset($_REQUEST['filter'])) {

                $type = $_REQUEST['type'];
                $stype = $_REQUEST['stype'];
                $city = $_REQUEST['city'];
                // $sql = "SELECT * FROM propery_details WHERE city='{$city}'";
                $sql = "SELECT * FROM propery_details WHERE p_type='{$type}' and selling_type='{$stype}' and city='{$city}'";
                //SELECT * FROM `property` WHERE type='office' or type='office' and stype='sale' or stype='rent' and city='valsad' OR state='mumbai'
                //SELECT * FROM `property` WHERE type='office' and stype='sale'  and city='valsad' OR state='mumbai'
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    if ($result == true) {
                        while ($row = mysqli_fetch_array($result)) {
            ?>
                            <div class="col-md-4">
                                <div class="card m-3 " style="width: 25rem;">
                                    <div class="p-2">
                                        <img src="property/<?php echo $row['img1']; ?>" alt="pimage" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-details">
                                            <a href="" class="text-decoration-none text-secondary">
                                                <h4 class="px-2 py-1">
                                                    <?php echo $row['p_name'] ?>
                                                </h4>
                                            </a>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <i class="fas fa-map-marker-alt fs-5 m-2"></i>
                                            <p class="text-secondarym-2">
                                                <?php echo $row['address'] ?>
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <ul class="d-flex justify-content-around list-unstyled">
                                                <li><span>
                                                        <?php echo $row['price'] ?>
                                                    </span> price</li>
                                                <li><span>
                                                        <?php echo $row['bhk'] ?>
                                                    </span></li>
                                                <li><span>
                                                        <?php echo $row['area_size'] ?>
                                                    </span> sqft</li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-around mt-3">
                                            <p>BY <span>
                                                    <?php echo $row['p_owner'] ?>
                                                </span></p>
                                            <form action="properties_details.php" method="post">
                                                <input type="hidden" name="seeD_id" value="<?php echo $row['p_id']; ?>">
                                                <button type="submit" name="SeeDetails_btn" class="btn btn-success"> See Details</button>
                                            </form>
                                            <!-- <button class="btn btn-success"><a href="properties_details.php" class="text-decoration-none text-white">See Details</a></button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>


            <?php
                        }
                    }
                } else {

                    echo "<h1 class='mb-5'><center>No Property Available</center></h1>";
                }
            }

            ?>

        </div>
    </div>
</div>