<?php
include 'php/include/links.php';
include 'php/include/navbar.php';
?>
<section class="reg_section_bg">
    <div class="container reg_section shadow rounded">
        <div class="row">
            <div class="col-md-6 bg-light">
                <h1 class="ms-4 mt-3 textcolorReg">Welcome back</h1>
                <div class="card-body">
                    <div class="alert alert-warning" role="alert">
                        <h4><?php
                            if (isset($_SESSION['msg']) && $_SESSION['msg'] != '')
                                echo $_SESSION['msg'];
                            unset($_SESSION['msg']); ?></h1>
                            <!-- <button type="button" class="btn-close msg_closebtn" data-bs-dismiss="alert"></button> -->
                    </div>
                    <div class="form-group m-3">
                        <form id="validate_form" method="POST" action="login_action.php" class="d-inline" data-parsley-validate="parsley" data-parsley-trigger="focusout">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control shadow-none" />
                    </div>
                    <div class="form-group m-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control shadow-none" />
                    </div>
                    <div class="form-group m-3 d-flex justify-content-center align-items-center">
                        <button class="btn button_style w-100 ms-5" name="sign_in">Sign In</button>
                        <!-- <input type="submit" id="submit" name="sign_in" value="Submit" class="btn button_style ms-5 w-100" /> -->
                    </div>
                    <p class="text-center">Or Sign Up with</p>
                    <div class="d-flex justify-content-center align-items-center">
                        <span><i class="fab fa-facebook mx-4"></i></span>
                        <span><i class="fab fa-google-plus-g mx-4"></i></span>
                        <span><i class="fab fa-apple mx-4"></i></span>
                    </div>
                    <p class="mt-3 text-center  already_meamber">Don't have an Account <a href="registration.php">Sign Up</a> </p>
                </div>
                <!-- </div> -->
                </form>
                <!-- </div> -->
            </div>
            <div class="col-md-6">
                <img src="images/login.jpg" alt="" class="img-fluid w-75 ms-5">
            </div>
        </div>
    </div>
</section>

</div>
</div>
