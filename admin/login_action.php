<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'restate_admin');
if (isset($_POST['sign_in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from register where email = '$email' ";
    $query = mysqli_query($con, $email_search);
    $email_count = mysqli_num_rows($query);


    if ($email_count) {
        if ($password) {
            echo 'login successful';
?>
            <script>
                location.replace("dashboard.php");
            </script>
        <?php
        } else {
            $_SESSION['messsage'] = "password incorrect ";
        ?>
            <script>
                location.replace("index.php")
            </script>
<?php
        }
    } else {
        $_SESSION['messsage'] = 'invalid email';
        header('location:index.php');
    }
}
?>