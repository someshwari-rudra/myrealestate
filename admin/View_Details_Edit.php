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
                    <h1>Edit Admin Registration Details</h1>
                </div>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <?php
                    if (isset($_POST['View_edit_btn'])) {
                        $id = $_POST['View_Details_Edit_id'];
                        echo $id;
                        $query = mysqli_query($connection, "select * from propery_details where p_id='$id'");
                        while ($row = mysqli_fetch_row($query)) {
                    ?>
                            <div class="row row-col-1 row-col-md-2 row-col-lg-2">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <form method="POST" enctype="multipart/form-data">
                                        <label> property Name </label>
                                        <input type="text" class="form-control" name="Pname" value="<?php echo $row['1'] ?>" required>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label> property Type </label>
                                    <select id="Property_type" class="form-control" name="Ptype" id="exampleFormControlSelect1">
                                        <option value="">Select Type</option>
                                        <option value="appartment">Appartment</option>
                                        <option value="flat">Flat</option>
                                        <option value="bunglow">Bunglow</option>
                                        <option value="house">House</option>
                                        <option value="villa">Villa</option>
                                        <option value="office">Office</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> BHK </label>
                                    <select id="BHK" class="form-control" name="bhk" id="exampleFormControlSelect1">
                                        <option value="select">Select BHK</option>
                                        <option value="1 BHK">1 BHK</option>
                                        <option value="2 BHK">2 BHK</option>
                                        <option value="3 BHK">3 BHK</option>
                                        <option value="4 BHK">4 BHK</option>
                                        <option value="5 BHK">5 BHK</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> Selling Type</label>
                                    <select id="selling_type" class="form-control" name="selling_type" id="exampleFormControlSelect1">
                                        <option value="select">Select Status</option>
                                        <option value="Rent">Rent</option>
                                        <option value="Sell">Sell</option>
                                    </select>
                                </div>
                                <div class=" col-md-6 form-group">
                                    <label>property Owner</label>
                                    <input type="text" name="p_owner" class="form-control checking_email" value="<?php echo $row['4'] ?>" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> description </label>
                                    <input type="text" class="form-control" name="p_discription" value="<?php echo $row['5'] ?>" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> Floor </label>
                                    <select id="Property_type" class="form-control" name="floor" id="exampleFormControlSelect1">
                                        <option value="select">Select Floor</option>
                                        <option value="1st floor">1st Floor</option>
                                        <option value="2nd floor">2nd Floor</option>
                                        <option value="3rd floor">3rd Floor</option>
                                        <option value="4th Floor">4th Floor</option>
                                        <option value="5th Floor">5th Floor</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> Total Floor </label>
                                    <select id="BHK" class="form-control" name="t_floor" id="exampleFormControlSelect1">
                                        <option value="select">Select Floor</option>
                                        <option value="1st floor">1st Floor</option>
                                        <option value="2nd floor">2nd Floor</option>
                                        <option value="3rd floor">3rd Floor</option>
                                        <option value="4th Floor">4th Floor</option>
                                        <option value="5th Floor">5th Floor</option>
                                        <option value="6th Floor">6th Floor</option>
                                        <option value="7th Floor">7th Floor</option>
                                        <option value="8th Floor">8th Floor</option>
                                        <option value="9th Floor">9th Floor</option>
                                        <option value="10th Floor">10th Floor</option>
                                        <option value="11th Floor">11th Floor</option>
                                        <option value="12th Floor">12th Floor</option>
                                        <option value="13th Floor">13th Floor</option>
                                        <option value="14th Floor">14th Floor</option>
                                        <option value="15th Floor">15th Floor</option>
                                    </select>
                                </div>
                                <div class="col-md-6  form-group">
                                    <label> Price</label>
                                    <input type="text" class="form-control" name="price" value="<?php echo $row['8'] ?>" required>
                                </div>
                                <div class=" col-md-6 form-group">
                                    <label>Area Size</label>
                                    <input type="text" class="form-control" name="Area_size" value="<?php echo $row['9'] ?>" required>
                                </div>
                                <div class=" col-md-6 form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city" value="<?php echo $row['10'] ?>" required>
                                </div>
                                <div class=" col-md-6 form-group">
                                    <label>address</label>
                                    <input type="text" class="form-control" name="address" value="<?php echo $row['11'] ?>" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> State </label>
                                    <input type="text" class="form-control" name="state" value="<?php echo $row['12'] ?>" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> Property age </label>
                                    <input type="text" class="form-control" name="property_age" value="<?php echo $row['14'] ?>" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> Swimming Pool </label>
                                    <select id="Property_type" class="form-control" name="swimming_pool" id="exampleFormControlSelect1">
                                        <option value="select">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> parking </label>
                                    <select id="Property_type" class="form-control" name="parking" id="exampleFormControlSelect1">
                                        <option value="select">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> gym </label>
                                    <select id="Property_type" class="form-control" name="gym" id="exampleFormControlSelect1">
                                        <option value="select">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> Alivator </label>
                                    <select id="Property_type" class="form-control" name="Alivator" id="exampleFormControlSelect1">
                                        <option value="select">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> cctv </label>
                                    <select id="Property_type" class="form-control" name="cctv" id="exampleFormControlSelect1">
                                        <option value="select">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> water supply </label>
                                    <select id="Property_type" class="form-control" name="water_supply" id="exampleFormControlSelect1">
                                        <option value="select">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label> security </label>
                                    <select id="Property_type" class="form-control" name="security" id="exampleFormControlSelect1">
                                        <option value="select">Select</option>
                                        <option value="yes">Yes</option>
                                        <option value="NO">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="customFile">Image 1</label>
                                    <input type="file" class="form-control" name="img1" id="customFile" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="customFile">Image 2</label>
                                    <input type="file" class="form-control" name="img2" id="customFile" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="customFile">Image 3</label>
                                    <input type="file" class="form-control" name="img3" id="customFile" />
                                </div>
                                <input type="hidden" name="id" class="form-control bg-success text-white w-50 mb-5" value="<?php echo $row['0'] ?>" />
                                <input type="submit" name="edit_Save" class="form-control bg-success text-white w-50 mb-5" value="save" />

                </form>
            </div>
    <?php
                        }
                    }
    ?>