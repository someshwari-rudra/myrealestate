<?php
session_start();
include 'includes/db.php';

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($con, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: dashboard.php');
    } else {
        if ($password === $cpassword) {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($con, $query);

            if ($query_run) {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                header('Location: dashboard.php');
            } else {
                $_SESSION['status'] = "Admin Profile Not Added";
                header('Location: dashboard.php');
            }
        } else {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            header('Location: dashboard.php');
        }
    }
}

if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: dashboard.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: dashboard.php');
    }
}

if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: dashboard.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: dashboard.php');
    }
}



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

    move_uploaded_file($temp_name1, "../property/$aimage1");
    move_uploaded_file($temp_name2, "../property/$aimage2");
    move_uploaded_file($temp_name3, "../property/$aimage3");

    $sql = "UPDATE propery_details SET p_name = '$p_name' ,bhk ='$BHK',selling_type= '$Selling_type', p_owner='$p_owner',
            p_discription='$p_discription',floor='$floor',total_floor='$t_floor',price='$price',area_size='$area_size',
            city='$city',address='$address',state='$state',p_type='$p_type',property_age='$property_age',swimming_pool='$swimming_pool',parking='$parking',gym='$gym',Alivator='$Alivator',
            cctv='$cctv',water_supply='$water_supply',security='$security', img1='$aimage1',img2='$aimage2',img3='$aimage3' WHERE p_id='$id' ";
    $query_run = mysqli_query($connection, $sql);
    if ($query_run) {
        $_SESSION['status'] = "Your Data is Updated successfully";
        $_SESSION['status_code'] = "success";
        header("location:View_Details.php");
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated successfully";
        $_SESSION['status_code'] = "error";
        header("location:View_Details.php");
    }
}

// view delete
if (isset($_POST['View_delete_btn'])) {
    $id = $_POST['View_Details_Edit_id'];

    $query = "DELETE FROM propery_details WHERE p_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: View_Details.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: View_Details.php');
    }
}


// user details update

if (isset($_POST['UserD_updatebtn'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE registration SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: User_Details.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: User_Details.php');
    }
}

// user details delete

if (isset($_POST['User_delete_btn'])) {
    $id = $_POST['User_delete_id'];

    $query = "DELETE FROM registration WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: User_Details.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: User_Details.php');
    }
}
