<?php
include 'php/include/links.php';
include 'php/include/navbar.php';
include "./config.php";
?>
<div class="backgroundsmall">
    <img src="images/breadcromb.jpg" alt="">
    <div class="overlay1">
        <h1 class="text-white">Profile</h1>
    </div>
</div>
<div class="container my-4">
    <section class="mt-4">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-2">
                            <div class="my-3">
                                <h2>FEEDBACK FORM</h2>
                            </div>
                            <form method="post" data-form-title="CONTACT US">
                                <input type="hidden" data-form-email="true">
                                <div class="form-group mt-2">
                                    <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                                </div>
                                <div class="form-group mt-2">
                                    <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-lg btn-danger">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="card mb-4">
                                <h3 class="text-center text-color mt-3">Your Profile</h3>
                                <div class="card-body">
                                    <?php
                                    $uname = $_SESSION['username'];
                                    $query = mysqli_query($con, "SELECT * FROM registration where username = '$uname'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">USer Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['username']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['email']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Password</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['password']; ?></p>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<?php
include "./footer.php";
include "php/include/scripts.php"
?>