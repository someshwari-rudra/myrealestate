<?php
include 'php/include/links.php';
include 'php/include/navbar.php';
include "./config.php";

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} else {

    $error = "";
    $msg = "";

    if (isset($_POST['AddPSubmit'])) {
        $p_name = $_POST['Pname'];
        $p_type = $_POST['Ptype'];
        $BHK = $_POST['bhk'];
        $Selling_type = $_POST['selling_type'];
        $p_owner = $_POST['p_owner'];
        $p_discription = $_POST['p_discription'];
        $floor = $_POST['floor'];
        $t_floor = $_POST['t_floor'];
        $price = $_POST['price'];
        $area_size = $_POST['Area_size'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $property_age = $_POST['property_age'];
        $swimming_pool = $_POST['swimming_pool'];
        $parking = $_POST['parking'];
        $gym = $_POST['gym'];
        $Alivator = $_POST['Alivator'];
        $cctv = $_POST['cctv'];
        $water_supply = $_POST['water_supply'];
        $security = $_POST['security'];
        $uname = $_SESSION['username'];
        $sql = mysqli_query($con, "SELECT * FROM  registration WHERE username= '$uname' ");
        if (mysqli_num_rows($sql) > 0) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $id = $row['id'];
            }
        }

        $aimage1 = $_FILES['img1']['name'];
        $aimage2 = $_FILES['img2']['name'];
        $aimage3 = $_FILES['img3']['name'];

        $temp_name1  = $_FILES['img1']['tmp_name'];
        $temp_name2 = $_FILES['img2']['tmp_name'];
        $temp_name3 = $_FILES['img3']['tmp_name'];

        move_uploaded_file($temp_name1, "property/$aimage1");
        move_uploaded_file($temp_name2, "property/$aimage2");
        move_uploaded_file($temp_name3, "property/$aimage3");

        $sql = "INSERT INTO propery_details (p_name,bhk,selling_type,p_owner,p_discription,floor,total_floor,price,area_size,city,address,state,p_type,property_age,swimming_pool,parking,gym,Alivator,cctv,water_supply,security,img1,img2,img3,status,uid)
    values ('$p_name','$BHK','$Selling_type','$p_owner','$p_discription','$floor','$t_floor','$price','$area_size','$city','$address','$state','$p_type','$property_age','$swimming_pool','$gym','$parking','$Alivator','$cctv','$water_supply','$security','$aimage1','$aimage2','$aimage3','Not_Approved','$id')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "<p class='alert alert-success'>Property Inserted Successfully</p>";
        } else {
            $error = "<p class='alert alert-warning'>Property Not Inserted Some Error </p>";
            echo "error" . $connection->error;
        }
    }
?>
    <div class="container bg-white p-5 shadow my-5 rounded">
        <h1> Enter Property Details</h1>
        <?php echo $error; ?>
        <?php echo $msg; ?>

        <div class="row row-col-1 row-col-md-2 row-col-lg-2">
            <div class="col-md-6 col-sm-12 form-group">
                <form method="POST" enctype="multipart/form-data">
                    <label class="form-label"> property Name </label>
                    <input type="text" class="form-control" name="Pname" placeholder="Enter property name" required>
            </div>
            <div class="col-md-6 col-sm-12 form-group p-2">
                <label class="form-label"> property Type </label>
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
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> BHK </label>
                <select id="BHK" class="form-control" name="bhk" id="exampleFormControlSelect1">
                    <option value="select">Select BHK</option>
                    <option value="1 BHK">1 BHK</option>
                    <option value="2 BHK">2 BHK</option>
                    <option value="3 BHK">3 BHK</option>
                    <option value="4 BHK">4 BHK</option>
                    <option value="5 BHK">5 BHK</option>
                </select>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> Selling Type</label>
                <select id="selling_type" class="form-control" name="selling_type" id="exampleFormControlSelect1">
                    <option value="select">Select Status</option>
                    <option value="Rent">Rent</option>
                    <option value="Sell">Sell</option>
                </select>
            </div>
            <div class=" col-md-6 form-group p-2">
                <label class="form-label">property Owner</label>
                <input type="text" name="p_owner" class="form-control checking_email" placeholder="enter property type" required>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> description </label>
                <input type="text" class="form-control" name="p_discription" placeholder="Enter description" required>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> Floor </label>
                <select id="Property_type" class="form-control" name="floor" id="exampleFormControlSelect1">
                    <option value="select">Select Floor</option>
                    <option value="1st floor">1st Floor</option>
                    <option value="2nd floor">2nd Floor</option>
                    <option value="3rd floor">3rd Floor</option>
                    <option value="4th Floor">4th Floor</option>
                    <option value="5th Floor">5th Floor</option>
                </select>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> Total Floor </label>
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
            <div class="col-md-6  form-group p-2">
                <label class="form-label"> Price</label>
                <input type="text" class="form-control" name="price" placeholder="enter price" required>
            </div>
            <div class=" col-md-6 form-group p-2">
                <label class="form-label">Area Size</label>
                <input type="text" class="form-control" name="Area_size" placeholder="enter Area size (in sqrt)" required>
            </div>
            <div class=" col-md-6 form-group p-2">
                <label class="form-label">City</label>
                <input type="text" class="form-control" name="city" placeholder="enter city" required>
            </div>
            <div class=" col-md-6 form-group p-2">
                <label class="form-label">address</label>
                <input type="text" class="form-control" name="address" placeholder="enter address" required>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> State </label>
                <input type="text" class="form-control" name="state" placeholder="Enter State" required>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> Property age </label>
                <input type="text" class="form-control" name="property_age" placeholder="Enter property age (years)" required>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> Swimming Pool </label>
                <select id="Property_type" class="form-control" name="swimming_pool" id="exampleFormControlSelect1">
                    <option value="select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> parking </label>
                <select id="Property_type" class="form-control" name="parking" id="exampleFormControlSelect1">
                    <option value="select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> gym </label>
                <select id="Property_type" class="form-control" name="gym" id="exampleFormControlSelect1">
                    <option value="select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> Alivator </label>
                <select id="Property_type" class="form-control" name="Alivator" id="exampleFormControlSelect1">
                    <option value="select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> cctv </label>
                <select id="Property_type" class="form-control" name="cctv" id="exampleFormControlSelect1">
                    <option value="select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> water supply </label>
                <select id="Property_type" class="form-control" name="water_supply" id="exampleFormControlSelect1">
                    <option value="select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label"> security </label>
                <select id="Property_type" class="form-control" name="security" id="exampleFormControlSelect1">
                    <option value="select">Select</option>
                    <option value="yes">Yes</option>
                    <option value="NO">No</option>
                </select>
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label" for="customFile">Image 1</label>
                <input type="file" class="form-control" name="img1" id="customFile" />
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label" for="customFile">Image 2</label>
                <input type="file" class="form-control" name="img2" id="customFile" />
            </div>
            <div class="col-md-6 form-group p-2">
                <label class="form-label" for="customFile">Image 3</label>
                <input type="file" class="form-control" name="img3" id="customFile" />
            </div>
            <div class="col-md-6 m-2">
                <input type="submit" name="AddPSubmit" class="form-control bg-success text-white " value="Submit" />
            </div>
            </form>
        </div>
    </div>

<?php
}
?>
<?php
include "./footer.php";
include "php/include/scripts.php"
?>