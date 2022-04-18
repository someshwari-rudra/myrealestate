<?php
session_start();
//action.php

sleep(5);

if (isset($_POST['username'])) {
    $con = mysqli_connect('localhost', 'root', '', 'myrealestate');

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con,  $_POST['password']);
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $token = bin2hex(random_bytes(15));


    $email_query = "select * from registration where email = '$email'";
    $equery = mysqli_query($con, $email_query);

    $email_count = mysqli_num_rows($equery);
    if ($email_count > 0) {
        echo 'email allready exist';
    } else {
        $query = "INSERT INTO registration  (username, email, password,token,status) 
        VALUES('$username', '$email', '$pass','$token','Inactive')";
        $iquery = mysqli_query($con, $query);
        if ($iquery) {
            $subject = "Email Activation";
            $body = "Hi, $username. click here to activate your account http://localhost/somya/email_Activate.php?token=$token";
            $sender = "From:somyarealestate@gmail.com";
            if (mail($email, $subject, $body, $sender)) {
                $_SESSION['msg'] = "check Your Email to activate your account $email";
                // header('location:login.php');
                echo "check Your Email to activate your account $email";
            } else {
                echo "Sorry, failed while sending mail!";
            }
            // echo nl2br ("An email has been sent to your given address.\n Please click the link in the mail to continue.");

        } else {
            echo 'insertion failed';
        }
    }
}
