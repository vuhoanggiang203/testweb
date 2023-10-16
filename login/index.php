<?php 
    require('../inc/loginlogic.php');
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel - Home Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">

    <!-- Navigation -->

    <?php require('./inc/header.php') ?>

    <!-- Banner -->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/Carousel/1.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/Carousel/2.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/Carousel/3.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/Carousel/4.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/Carousel/5.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/Carousel/6.jpg" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <!-- Checker -->

    <div class="container avai-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Tour Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-medium">Starting point</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-geo-alt"></i>
                                </span>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Point of departure</option>
                                    <option value="1">HaNoi</option>
                                    <option value="2">SaiGon</option>
                                    <option value="3">HaiPhong</option>
                                    <option value="4">NhaTrang</option>
                                    <option value="5">DaNang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-medium">End point</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-geo-alt"></i>
                                </span>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Please choose a destination</option>
                                    <option value="1">Paris, France</option>
                                    <option value="2">Kyoto, Japan</option>
                                    <option value="3">Rio de Janeiro, Brazil</option>
                                    <option value="4">Sydney, Australia</option>
                                    <option value="5">Barcelona, Spain</option>
                                    <option value="6">New York City, USA</option>
                                    <option value="7">Machu Picchu, Peru</option>
                                    <option value="8">Dubai, UAE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label fw-medium">Check-In</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-calendar"></i>
                                </span>
                                <input type="date" class="form-control shadow-none">
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label fw-medium">Number of days</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-calendar"></i>
                                </span>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>All</option>
                                    <option value="1">1-3 days</option>
                                    <option value="2">4-7 days</option>
                                    <option value="3">8-14 days</option>
                                    <option value="4">Over 14 days</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn btn-primary rounded">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tour -->

    <h1 class="mt-5 pt-4 mb-4 text-center fw-bold header-font">Tours</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <p>29/08/2023 - 4 days</p>
                        <h5 class="card-title note-font fw-bold">Da Lat - Dambri Waterfall - Cau Dat Tea Hill - Samten
                            Hills Dalat - Boost tourism.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN548-055-290823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>3,790,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">3,490,000₫</p>
                            <button class="btn btn-sm btn-danger">8% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/2.jpg" class="card-img-top">
                    <div class="card-body">
                        <p>31/08/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">Flower and Sea Journey: Dalat - Nha Trang - Vietnam
                            National Day on September 2nd.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NDSGN5251-062-310823XE-V
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>5,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">5,990,000₫</p>
                            <button class="btn btn-sm btn-danger">5% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow rounded tour-item"
                    style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">
                    <img src="./images/Tours/3.jpg" class="card-img-top">
                    <div class="card-body">
                        <p>03/09/2023 - 5 days</p>
                        <h5 class="card-title note-font fw-bold">China: Zhangjiajie - Phoenix Ancient Town - Tianmen
                            Mountain - Yuanjiajie | 5-star hotel, 5 days 4 nights.</h5>
                        <p class="card-text">Tour code: <br>
                            <i class="bi bi-ticket"></i> NNSGN381-031-030923VJ-H
                        </p>
                        <p class="card-text">Place of departure: TP. Ho Chi Minh</p>
                        <p class="card-text fw-bold">Price: <del>15,990,000₫</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="price-color fw-bold mb-2">14,990,000₫</p>
                            <button class="btn btn-sm btn-danger">6% Discount</button>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Pick a Tour</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="tour.php" class="btn btn-md btn-outline-dark rounded fw-bold shadow-none btn-lg">Show More
                    >>></a>
            </div>
        </div>
    </div>

    <!-- Facilities -->

    <h1 class="mt-5 pt-4 mb-4 text-center fw-bold header-font">Facilities</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <img src="./images/Facilities/1.png" width="100px" height="100px">
                <h5 class="mt-2">Tour booking platform</h5>
                <p>First in Vietnam <br>
                    The latest technology application</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <img src="./images/Facilities/2.png" width="100px" height="100px">
                <h5 class="mt-2">Products & Services</h5>
                <p>Diversity - Quality - Safety</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <img src="./images/Facilities/3.png" width="100px" height="100px">
                <h5 class="mt-2">Price</h5>
                <p>Always the best price</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <img src="./images/Facilities/4.png" width="100px" height="100px">
                <h5 class="mt-2">Book a tour</h5>
                <p>Easy and fast, just 3 steps</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <img src="./images/Facilities/5.png" width="100px" height="100px">
                <h5 class="mt-2">Payment</h5>
                <p>Safety & flexibility</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <img src="./images/Facilities/6.png" width="100px" height="100px">
                <h5 class="mt-2">Support</h5>
                <p>Hotline & online (08:00 - 22:00)</p>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn btn-md btn-outline-dark rounded fw-bold shadow-none btn-lg">Show
                    More >>></a>
            </div>
        </div>
    </div>

    <!-- Comment -->

    <h1 class="mt-5 pt-4 mb-4 text-center fw-bold header-font">Comment</h1>

    <div class="container">
        <div class="swiper swiper-comment">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <div class="profile-img bg-white"
                            style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden;">
                            <img src="./images/Comment/1.png" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sapien purus, dictum et dictum sit
                        amet, malesuada nec ex.
                    </p>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <div class="profile-img bg-white"
                            style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden;">
                            <img src="./images/Comment/1.png" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sapien purus, dictum et dictum sit
                        amet, malesuada nec ex.
                    </p>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <div class="profile-img bg-white"
                            style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden;">
                            <img src="./images/Comment/1.png" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sapien purus, dictum et dictum sit
                        amet, malesuada nec ex.
                    </p>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <div class="profile-img bg-white"
                            style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden;">
                            <img src="./images/Comment/1.png" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sapien purus, dictum et dictum sit
                        amet, malesuada nec ex.
                    </p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Contact us -->

    <?php

    $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $value = [1];
    $contact_r = mysqli_fetch_assoc(select($contact_q,$value,'i'));

    ?>

    <h1 class="mt-5 pt-4 mb-4 text-center fw-bold header-font">Contact Us</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <iframe
                    src="<?php echo $contact_r['iframe'] ?>"
                    width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white rounded p-4">
                    <h5>Call Us</h5>
                    <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark fw-bold">
                        <i class="bi bi-telephone"></i> +<?php echo $contact_r['pn1'] ?></a>
                    <br>
                    <?php
                        if($contact_r['pn2']!=''){
                            echo<<<data
                            <a href="tel: +$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark fw-bold">
                            <i class="bi bi-telephone"></i> +$contact_r[pn2]</a>
                            data;
                        }
                    ?>
                </div>
                <br>
                <div class="bg-white rounded p-4">
                    <h5>Follow Us</h5>
                    <?php
                        if($contact_r['meta']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[meta]" class="d-inline-block mb-3 text-decoration-none text-dark fw-bold">
                            <i class="bi bi-github"></i> Github</a>
                            <br>
                            data;
                        }
                    ?>
                    <?php
                        if($contact_r['ins']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[ins]" class="d-inline-block mb-3 text-decoration-none text-dark fw-bold">
                            <i class="bi bi-instagram"></i> Instagram</a>
                            <br>
                            data;
                        }
                    ?>
                    <?php
                        if($contact_r['github']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[github]" class="d-inline-block mb-3 text-decoration-none text-dark fw-bold">
                            <i class="bi bi-github"></i> Github</a>
                            <br>
                            data;
                        }
                    ?>
                    <?php
                        if($contact_r['linkedin']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[linkedin]" class="d-inline-block mb-3 text-decoration-none text-dark fw-bold">
                            <i class="bi bi-linkedin"></i> Linkedin</a>
                            <br>
                            data;
                        }
                    ?>

                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <!-- Button Login -->

    <?php require('./inc/button.php') ?>

    <!-- Button Reginter -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnIteraction: false,
            }
        });
        var swiper = new Swiper(".swiper-comment", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "2",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 2,
                }
            }
        });
        </script>

</body>

</html>