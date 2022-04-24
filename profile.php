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
    <h1 class="text-color text-center">Profile</h1>
    <section class="mt-4">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">USer Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">somya</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">somyarudra18@gmail.com</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Password</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">12222</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                            <form action="profile_edit.php" method="post">
                                <input type="hidden" name="profile_edit_id" value="">
                                <button type="submit" name="profile_edit_btn" class="btn btn-success"> EDIT</button>
                            </form>
                            <form action="user_pDelete.php" method="post">
                                <input type="hidden" name="delete_id" value="">
                                <button type="submit" name="delete_btn" class="btn btn-danger mx-2"> DELETE</button>
                            </form>
                        </div>
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