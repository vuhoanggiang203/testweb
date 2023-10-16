<?php

require('admin/inc/db_config.php');
require('admin/inc/essential.php')

?>

<?php

$contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
$value = [1];
$contact_r = mysqli_fetch_assoc(select($contact_q, $value, 'i'));

?>

<div class="container-fluid  mt-5" id="footer" style="background:antiquewhite ;">
    <footer class=" text-lg-start bg-light text-muted">

        <section class="" style="background: antiquewhite;">
            <div class="container text-md-start mt-5" style="background: antiquewhite; padding-top: 40px">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class=" fw-bold mb-4">
                            <a class="me-5 fw-bold fs-3 header-font d-flex align-items-center text-decoration-none"
                                href="index.php">
                                <img src="./images/Logo/logo.png" class="rounded-circle me-2"
                                    style="width: 40px; height: 40px;">
                                Travel
                            </a>
                            <br>
                            <p class="lh-smz">
                                ZTravel is a travel company that specializes in budget-friendly group tours.
                                The company offers a variety of tours, from short weekend getaways to longer multi-week
                                itineraries. Contiki tours are known for their lively atmosphere and their emphasis on
                                meeting new people from all over the world.
                            </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h5 class="text-uppercase fw-bold mb-4">
                            About ZTravel
                        </h5>
                        <p>
                            <a href="#" class="text-reset mb-2 text-dark text-decoration-none">Help Center</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset mb-2 text-dark text-decoration-none">How to book</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset mb-2 text-dark text-decoration-none">Sales</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset mb-2 text-dark text-decoration-none">News</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset mb-2 text-dark text-decoration-none">About Us</a>
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h5 class="text-uppercase fw-bold mb-4">
                            Others
                        </h5>
                        <p>
                            <a href="#" class="text-reset mb-2 text-dark text-decoration-none">FAQ</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset mb-2 text-dark text-decoration-none">Payment</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset mb-2 text-dark text-decoration-none">Privacy Policy</a>
                        </p>

                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h5 class="text-uppercase fw-bold mb-4">Contact</h5>
                        <p><i class="bi bi-house"></i> <?php echo $contact_r['address'] ?></p>
                        <p><i class="bi bi-telephone"></i> <?php echo $contact_r['pn1'] ?></p>
                        <p><i class="bi bi-telephone"></i> <?php echo $contact_r['pn2'] ?></p>
                    </div>
                </div>
                <div
                    class="d-flex flex-column flex-md-column flex-lg-row  justify-content-lg-between  align-items-sm-center ">
                    <div class=" p-4">
                        © 2023 Copyright
                        <a class="text-reset  text-dark text-decoration-none" href="#">Red Technology</a>
                    </div>
                    <div class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                        <a href="<?php echo $contact_r['meta'] ?>" class="me-4 text-reset">
                            <i class="bi bi-meta"></i>
                        </a>
                        <a href="<?php echo $contact_r['ins'] ?>" class="me-4 text-reset">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="<?php echo $contact_r['github'] ?>" class="me-4 text-reset">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="<?php echo $contact_r['linkedin'] ?>" class="me-4 text-reset">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
        </section>
    </footer>
</div>