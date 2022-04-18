<?php
include "./config.php";
// view edit details page 


if (isset($_POST['edit_Save'])) {

    $id = $_POST['id'];
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


    $aimage1 = $_FILES['img1']['name'];
    $aimage2 = $_FILES['img2']['name'];
    $aimage3 = $_FILES['img3']['name'];

    $temp_name1  = $_FILES['img1']['tmp_name'];
    $temp_name2 = $_FILES['img2']['tmp_name'];
    $temp_name3 = $_FILES['img3']['tmp_name'];

    move_uploaded_file($temp_name1, "property/$aimage1");
    move_uploaded_file($temp_name2, "property/$aimage2");
    move_uploaded_file($temp_name3, "property/$aimage3");

    $sql = "UPDATE propery_details SET p_name = '$p_name' ,bhk ='$BHK',selling_type= '$Selling_type', p_owner='$p_owner',
            p_discription='$p_discription',floor='$floor',total_floor='$t_floor',price='$price',area_size='$area_size',
            city='$city',address='$address',state='$state',p_type='$p_type',property_age='$property_age',swimming_pool='$swimming_pool',parking='$parking',gym='$gym',Alivator='$Alivator',
            cctv='$cctv',water_supply='$water_supply',security='$security', img1='$aimage1',img2='$aimage2',img3='$aimage3' WHERE p_id='$id' ";
    $query_run = mysqli_query($con, $sql);
    if ($query_run) {
        $_SESSION['status'] = "Your Data is Updated successfully";
        $_SESSION['status_code'] = "success";
        header("location:UserProperty.php");
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated successfully";
        $_SESSION['status_code'] = "error";
        header("location:UserProperty.php");
    }
}
