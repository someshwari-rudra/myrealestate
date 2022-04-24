<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'myrealestate');
if (isset($_POST['sign_in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where email = '$email' and status = 'active' ";
    $query = mysqli_query($con, $email_search);
    $email_count = mysqli_num_rows($query);

    if ($email_count) {
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $_SESSION['username'] = $email_pass['username'];
        $pass_decode = password_verify($password, $db_pass);
        if ($pass_decode) {
            echo 'login successful';
?>
            <script>
                location.replace("home.php");
            </script>
        <?php
        } else {
            $_SESSION['msg'] = "password incorrect ";
        ?>
            <script>
                location.replace("login.php")
            </script>
<?php
        }
    } else {
        $_SESSION['msg'] = 'invalid email';
        header('location:login.php');
    }
}
?>