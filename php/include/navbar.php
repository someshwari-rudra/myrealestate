<?php
session_start();
?>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#"><img src="images/real estate logo.png" alt="logo" class="logo"></a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white" href="./sellProperty.php">SELL PROPERTY</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white" href="./Property.php">PROPERTIES</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white" href="#">ABOUT US</a>
                    </li>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username'] ?> My Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="userProperty.php">Your Property</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="./logout.php">Log Out</a></li>
                            </ul>
                        </li>
                    <?php } else { ?>

                    <?php } ?>


                </ul>
                <?php if (isset($_SESSION['username'])) { ?>
                    <button class="btn button_style shadow-none" id="Show-login" type="submit"> <a href="./logout.php">Logout</a></button>
                <?php } else { ?>
                    <button class="btn button_style shadow-none" id="Show-login" type="submit"> <a href="./login.php">Login</a></button>
                <?php } ?>
            </div>
        </div>
    </nav>