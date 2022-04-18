<?php
session_start();

if (!isset($_SESSION['usernm'])) {
    echo "you are logged out";
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php include "config.php" ?>
<?php
$query_totalclient = "select * from client";
$execute_query_totalclient = mysqli_query($con, $query_totalclient);
$totalclient = mysqli_num_rows($execute_query_totalclient);

$query_totalproduct = "select * from inventories";
$execute_query_totalproduct = mysqli_query($con, $query_totalproduct);
$totalproduct = mysqli_num_rows($execute_query_totalproduct);

$query_totaluser = "select * from reg";
$execute_query_totaluser = mysqli_query($con, $query_totaluser);
$totaluser = mysqli_num_rows($execute_query_totaluser);
?>

<body>
    <div class="outerdivindex">
        <div class="topleft">
            <p id="title">INVENTORY MANAGEMENT SYSTEM</p>
        </div>
        <div class="topright">
            <h4 id="wlcuser">Welcome, <?php echo $_SESSION['usernm']; ?></h4>
        </div>
        <div class="menu">
            <div class="innermenu">
                <input id="menu" type="button" onclick="window.location.href='dashboard.php'" value="Dashboard">
            </div>
            <div class="innermenu">
                <input id="menu" type="button" onclick="location.href='client.php'" value="Client">
            </div>
            <div class="innermenu">
                <input id="menu" type="button" onclick="window.location.href='product.php'" value="Inventories">
            </div>
            <div class="innermenu">
                <input id="menu" type="button" onclick="window.location.href='sales.php'" value="Sales">
            </div>
            <div class="innermenu">
                <input id="menu" type="button" onclick="window.location.href='purchase.php'" value="Purchase">
            </div>
            <div class="innermenu">
                <input id="menu" type="button" onclick="window.location.href='report.php'" value="Report">
            </div>
            <div class="innermenu">
                <input id="menu" type="button" onclick="window.location.href='logout.php'" name="logout" value="Logout">
            </div>
            <div class="extra">

            </div>
        </div>
        <div class="main">
            <div class="main2">
                <div class="rec">
                    <h4 id="record">Client Record</h4>
                    <h5 id="num"><?php echo $totalclient; ?></h5>

                </div>
                <div class="rec">
                    <h4 id="record">Product Record</h4>
                    <h5 id="num"><?php echo $totalproduct; ?></h5>
                </div>
                <div class="rec">
                    <h4 id="record">User Record</h4>
                    <h5 id="num"><?php echo $totaluser; ?></h5>
                </div>
            </div>
        </div>

    </div>
</body>

</html>