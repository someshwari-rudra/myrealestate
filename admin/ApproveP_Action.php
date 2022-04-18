<?php
session_start();
include 'includes/db.php';
if (isset($_POST['Approve_btn'])) {
    $id = $_POST['Approve_id'];
    $query = "UPDATE propery_details SET status = 'Approved' WHERE p_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Your Status is Approved";
        $_SESSION['status_code'] = "success";
        header('Location: Approve_Property.php');
    } else {
        $_SESSION['status'] = "Your Status is NOT Approved";
        $_SESSION['status_code'] = "error";
        header('Location: Approve_Property.php');
    }
}
