<?php
include "./config.php";
include "php/include/links.php";
include "php/include/navbar.php";
?>

<div class="background">
    <img src="images/breadcromb.jpg" alt="">
    <div class="container overlay">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="text-white">
                    <h1 class="mb-4"><span class="text-primary">Find</span><br>
                        Your dream house</h1>
                    <form method="post" action="propertySearch.php">
                        <div class="row">
                            <div class="col-md-6 col-lg-2">
                                <div class="form-group">
                                    <select class="form-control" name="type">
                                        <option value="">Select Type</option>
                                        <option value="appartment">Appartment</option>
                                        <option value="flat">Flat</option>
                                        <option value="bunglow">Bunglow</option>
                                        <option value="house">House</option>
                                        <option value="villa">Villa</option>
                                        <option value="office">Office</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2">
                                <div class="form-group">
                                    <select class="form-control" name="stype">
                                        <option value="">Select Status</option>
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sell</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" placeholder="Enter City or Enter State" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-2">
                                <div class="form-group">
                                    <button type="submit" name="filter" class="btn btn-primary w-100">Search Property</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ------------------------------slider_end---------------------------- -->

<!-- -------------------------------our service---------------------------------- -->
<section>
    <div class="container mt-5">
        <h1 class="text-center mb-4">OUR SERVICES</h1>
        <p class="mb-5 text-center fs-4">We provide a best service to our clients.</p>
        <div class="row row-col-md-3 row-col-lg-2 mx-4 mb-5 mt-5">
            <div class="col">
                <div class="card cardfront mb-3" style="width: 23rem;">
                    <img src="images/cards/buy home.PNG" class="card-img-top px-2  mx-auto" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title px-3 mx-2">BUY HOME</h5>
                        <p class="card-text px-3 mb-5">Find your Dream Home from 5 Lakh+ properties on
                            RealEstate.com.The most exciting part of the home-buying process is site visit, but it’s
                            also a big!</p>
                        <div class="mb-3"><a href="Property.php" class=" btn button_style px-5 mx-3 text-decoration-none align-content-center">BUY HOME</a></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cardfront mb-3" style="width: 23rem;">
                    <img src="images/cards/sell home.PNG" class="card-img-top px-2 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title px-3">SELL HOME</h5>
                        <p class="card-text px-3 mb-5">If you are selling a house or keen to rent a house, Makaan.com is
                            where you should be. When you open our site, continue to ‘list property’.</p>
                        <div class="mb-3"><a href="Property.php" class="btn button_style px-5  mx-3 text-decoration-none">SELL HOME</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cardfront mb-3 mx-2" style="width: 23rem;">
                    <img src="images/cards/rent.PNG" class="card-img-top px-2 mx-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title px-3">RENT HOME</h5>
                        <p class="card-text px-3 mb-5">rent a home easily by using aur website realesate.com and find
                            the perfect house to live with comfort.The rent agreement can help you.</p>
                        <div class="mb-3"><a href="Property.php" class="btn button_style  mx-3 text-decoration-none">RENT HOME</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- our service end---------------------------------- -->

<!-------------------------- How it works --------------------------------->
<section class="HIWsection">
    <div class="container ">
        <h1 class="text-center mt-4">HOW IT WORKS</h1>
        <div class="row row-col-1 row-col-md-2 row-col-lg-2 my-3">
            <div class="col-md-6">
                <img src="images/cards/no.png" alt="" class="img-fluid mt-5">
            </div>
            <div class="col-md-6 mb-4">
                <h1 class="text-center mt-5 text-Htwork">NO CALLS FROM BROKER</h1>
                <p class="fw-bold text-center"> Your information is kept confidential and you no longer have to
                    worry about call from brokers.</p>
                <ol type="1" class="noCallText">
                    <li class="m-3">We make sure that each property is verified and directly from owner. So, you can save on the brokerage that varies from
                        15 days to 2 month's rent. And most brokers charge this every year even if you are renewing the same property. </li>
                    <li class="m-3">All the information is available in a well-organized manner with photographs and a detailed analysis if the
                        surroundings. You can locate where is the nearest school, grocery shop, ATM etc. This information will help you
                        shortlist the property without taking an effort to visit the actual site. In case of brokers, they just want to make
                        sure that the property goes out fast.</li>
                </ol>
            </div>
            <div class="col-md-6 mt-4">
                <h1 class="text-center mt-5 text-Htwork">VERIFIED TENANTS</h1>
                <p class="fw-bold text-center"> Thanks to our technology, only verified and genuine tenants can
                    call you.</p>
                <ol type="1" class="noCallText">
                    <li class="m-3">checking of the tenant’s background represents an important part of the rental agreement process and is compulsory under
                        city authorities across all central districts in India. </li>
                    <li class="m-3">Before handing over the keys to the house, landlords must conduct a police verification for their tenants. The
                        verification form can be easily downloaded online through the state government or the city police department’s official
                        website.</li>
                    <li class="m-3">It is beneficial to conduct police verification so that any illegal or criminal activities within the premises can be
                        prevented due to the due legal process involved, as well as tracked in case such activities take place.</li>
                </ol>
            </div>
            <div class="col-md-6">
                <img src="images/cards/verified user.png" alt="" class="img-fluid mt-5 ms-4">
            </div>
            <div class="col-md-6">
                <img src="images/cards/save_money.png" alt="" class="img-fluid mt-5">
            </div>
            <div class="col-md-6 mb-4">
                <h1 class="text-center mt-5 text-Htwork">SAVE BROKERAGE</h1>
                <p class="fw-bold text-center"> No Brokers means No Brokerage! Buy yourself a gift</p>
                <ol type="1" class="noCallText">
                    <li class="m-3">We make sure that each property is verified and directly from owner. So, you can save on the
                        brokerage that varies from
                        15 days to 2 month's rent. And most brokers charge this every year even if you are renewing the same
                        property. </li>
                    <li class="m-3">All the information is available in a well-organized manner with photographs and a detailed
                        analysis if the
                        surroundings. You can locate where is the nearest school, grocery shop, ATM etc. This information will help
                        you
                        shortlist the property without taking an effort to visit the actual site. In case of brokers, they just want
                        to make
                        sure that the property goes out fast.</li>
                </ol>
            </div>
        </div>
    </div>
    </div>
</section>
<!-------------------------------- how it works end --------------------------->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Recent Proprties</h1>
        </div>
        <div class="row">
            <?php
            $query = mysqli_query($con, "SELECT  * FROM propery_details limit 6");
            foreach ($query as $row) {
            ?>
                <div class="col-md-4">
                    <div class="card m-3 " style="width: 25rem;">
                        <span class="new"><?php echo $row['selling_type'] ?></span>
                        <div class="p-2">
                            <img src="property/<?php echo $row['img1']; ?>" alt="pimage" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="card-details">
                                <a href="properties_details.php" class="text-decoration-none text-secondary">
                                    <h4 class="px-2 py-1"><?php echo $row['p_name'] ?></h4>
                                </a>
                            </div>
                            <div class="d-flex align-content-center">
                                <i class="fas fa-map-marker-alt fs-5 m-2"></i>
                                <p class="text-secondarym-2"><?php echo $row['address'] ?></p>
                            </div>
                            <div class="card-footer">
                                <ul class="d-flex justify-content-around list-unstyled">
                                    <li><span><?php echo $row['price'] ?></span> price</li>
                                    <li><span><?php echo $row['bhk'] ?></span></li>
                                    <li><span><?php echo $row['area_size'] ?></span> sqft</li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-around mt-3">
                                <p>BY <span><?php echo $row['p_owner'] ?></span></p>
                                <form action="properties_details.php" method="post">
                                    <input type="hidden" name="seeD_id" value="<?php echo $row['p_id']; ?>">
                                    <button type="submit" name="SeeDetails_btn" class="btn btn-success"> See Details</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>
<?php
include "./footer.php";
?>

<script src="bootstrap/js/app.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>