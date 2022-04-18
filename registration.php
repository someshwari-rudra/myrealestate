<?php
include 'php/include/links.php';
include 'php/include/navbar.php';
?>
<section class="reg_section_bg mt-5">
    <div class="container shadow rounded">
        <div class="row">
            <div class="col-md-6 bg-light">
                <h1 class="ms-4 mt-3 textcolorReg">Registration</h1>
                <div class="card-body">
                    <form id="validate_form" method="POST" class="d-inline" data-parsley-validate="parsley" data-parsley-trigger="focusout">
                        <div class="alert collapse" id="response" role="alert">
                            <strong id="message"></strong>
                            <button type="button" class="btn-close msg_closebtn" data-bs-dismiss="alert"></button>
                        </div>
                        <div class="form-group m-3">
                            <label>User Name</label>
                            <input type="text" name="username" id="username" placeholder="Enter First Name" required data-parsley-pattern="^[A-Za-z][A-Za-z0-9_]{3,29}$" data-parsley-trigger="focusout" class="form-control shadow-none" />
                        </div>
                        <div class="form-group m-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" required data-parsley-type="email" data-parsley-trigger="focusout" data-parsley-checkemail data-parsley-checkemail-message="Email Address already Exists" class="form-control shadow-none" />
                        </div>
                        <div class="form-group m-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" required data-parsley-length="[8, 16]" data-parsley-trigger="focusout" class="form-control shadow-none" />
                        </div>
                        <div class="form-group m-3">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" data-parsley-equalto="#password" data-parsley-trigger="focusout" required class="form-control shadow-none" />
                        </div>
                        <div class="form-group m-3 d-flex justify-content-center align-items-center">
                            <input type="submit" id="submit" name="submit" value="Submit" class="btn button_style ms-5 w-100" />
                        </div>
                        <p class="text-center">Or Sign Up with</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <span><i class="fab fa-facebook mx-4"></i></span>
                            <span><i class="fab fa-google-plus-g mx-4"></i></span>
                            <span><i class="fab fa-apple mx-4"></i></span>
                        </div>
                        <p class="mt-3 text-center">already a member? <a href="login.php">Sign In</a> </p>
                </div>
            </div>
            </form>
            <div class="col-md-6">
                <img src="images/registration.jpg" alt="reg_image" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
</section>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/reg_validation.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://parsleyjs.org/dist/parsley.js"></script>