<?php
include 'php/include/links.php';
include 'php/include/navbar.php';
include "./config.php";
if (!isset($_SESSION['username'])) {
    header("location:login.php");
} else {
?>

<div class="backgroundsmall">
    <img src="images/breadcromb.jpg" alt="">
    <div class="overlay1">
        <h1 class="text-white">Property Details</h1>
    </div>
</div>



<div class="container my-5">
    <div class="row">
        <?php
        if (isset($_POST['SeeDetails_btn'])) {
            $id = $_POST['seeD_id'];
            $query = mysqli_query($con, "SELECT * FROM propery_details WHERE p_id='$id' ");
            while ($row = mysqli_fetch_array($query)) {
        ?>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="property/<?php echo $row['img1']; ?>" class="d-block w-100" alt="backimg">
                        </div>
                        <div class="carousel-item">
                            <img src="property/<?php echo $row['img2']; ?>" class="d-block w-100" alt="images/background1.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="property/<?php echo $row['img3']; ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8 d-flex justify-content-between align-content-center">
                        <button class="btn btn-primary">For <?php echo $row['selling_type'] ?></button>
                        <div class="d-flex justify-content-center align-content-center">
                            <i class="fa-solid fa-indian-rupee-sign p-2 fs-5 text-color"></i>
                            <p class="fs-5 text-color"><?php echo $row['price'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-5 text-color"><?php echo $row['p_name'] ?></p>
                        <div class="d-flex justify-center align-content-center">
                            <i class="fa-solid fa-location-dot p-1"></i>
                            <p class="text-secondary"><?php echo $row['address'] ?></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-5 text-color">Description</p>
                        <p class="text-secondary"><?php echo $row['p_discription'] ?></p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8">
                        <p class="mb-4 fs-5 text-color">Property Summary</p>
                        <div class="table-striped font-14 pb-2">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold">BHK</td>
                                        <td class="text-capitalize">
                                            <?php echo $row['bhk'] ?>
                                        </td>
                                        <td class="fw-bold">Property Type</td>
                                        <td class="text-capitalize">
                                            <?php echo $row['p_type'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Floor</td>
                                        <td class="text-capitalize">
                                            <?php echo $row['floor'] ?>
                                        </td>
                                        <td class="fw-bold">Total Floor</td>
                                        <td class="text-capitalize">
                                            <?php echo $row['total_floor'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">City</td>
                                        <td class="text-capitalize">
                                            <?php echo $row['city'] ?>
                                        </td>
                                        <td class="fw-bold">State</td>
                                        <td class="text-capitalize">
                                            <?php echo $row['state'] ?>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-8">
                        <p class="fs-5 text-color">propery Features</p>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="d-flex align-content-center">
                                    <p class="fw-bold">Property Age : </p>
                                    <p><?php echo $row['property_age'] ?></p>
                                </div>
                                <div class="d-flex align-content-center">
                                    <p class="fw-bold">Swimming Pool : </p>
                                    <p><?php echo $row['swimming_pool'] ?></p>
                                </div>
                                <div class="d-flex align-content-center">
                                    <p class="fw-bold">Parking : </p>
                                    <p><?php echo $row['parking'] ?></p>
                                </div>
                                <div class="d-flex align-content-center">
                                    <p class="fw-bold">GYM : </p>
                                    <p><?php echo $row['gym'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-content-center">
                                    <p class="fw-bold">Alivator : </p>
                                    <p><?php echo $row['Alivator'] ?></p>
                                </div>
                                <div class="d-flex align-content-center">
                                    <p class="fw-bold">CCTV : </p>
                                    <p><?php echo $row['cctv'] ?></p>
                                </div>
                                <div class="d-flex align-content-center">
                                    <p class="fw-bold">Security : </p>
                                    <p><?php echo $row['security'] ?></p>
                                </div>
                                <div class="d-flex align-content-center">
                                    <p class="fw-bold">Water Supply : </p>
                                    <p><?php echo $row['water_supply'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p class="fs-5 m-3 text-color ">Property Images</p>
                    <div class="col-md-8">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Image 1
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <img src="property/<?php echo $row['img1']; ?>" alt="Not Available" class="img-fluid">
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Image 2
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <img src="property/<?php echo $row['img2']; ?>" alt="Not Available" class="img-fluid">
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Image 3
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <img src="property/<?php echo $row['img3']; ?>" alt="Not Available" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
    }
        ?>