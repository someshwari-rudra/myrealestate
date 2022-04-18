<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'myrealestate');
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $updateQuery = "update registration set status='active' where token='$token'";
    $query = mysqli_query($con, $updateQuery);
    if ($query) {
        if (isset($_SESSION['msg'])) {
            $_SESSION['msg'] = "account updated successfully";
            header('location:login.php');
        } else {
            $_SESSION['msg'] = "you are logged out";
            header('location:login.php');
        }
    } else {
        $_SESSION['msg'] = "account  not updated..";
        header('location:reg.php');
    }
}
