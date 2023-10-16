<?php 
    require('./inc/loginlogic.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel - Facilities Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
  <body class="bg-light">

    <!-- Navigation -->
        
    <?php require('./inc/header.php') ?>

    <!-- Facilities Page -->

    <div class="my-5 px-4">
        <h1 class="fw-bold header-font text-center">Facilities</h1>
        <div class="header-line bg-dark"></div>
        <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula tellus id nibh <br> venenatis tempor. 
        Donec iaculis dui nunc, non blandit odio blandit et.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center mb-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/Facilities/1.png" width="40px">
                    <h5>Tour booking platform</h5>
                    <p>First in Vietnam <br>
                    The latest technology application</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/Facilities/2.png" width="40px">
                    <h5>Products & Services</h5>
                    <p>Diversity - Quality - Safety</p> <br>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/Facilities/3.png" width="40px">
                    <h5>Price</h5>
                    <p>Always the best price</p> <br>  
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/Facilities/4.png" width="40px">
                    <h5>Book a tour</h5>
                    <p>Easy and fast, just 3 steps</p> <br> 
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/Facilities/5.png" width="40px">
                    <h5>Payment</h5>
                    <p>Safety & flexibility</p> <br> 
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/Facilities/6.png" width="40px">
                    <h5>Support</h5>
                    <p>Hotline & online (08:00 - 22:00)</p> <br>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/Facilities/7.png" width="40px">
                    <h5>Luxury</h5>
                    <p>Always delivering top-notch quality</p> <br>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/Facilities/8.png" width="40px">
                    <h5>Reviews and Ratings</h5>
                    <p>Transparent customer reviews</p> <br>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-6 px-4 mb-5">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop-up">
                    <img src="./images/Facilities/9.png" width="40px">
                    <h5>Reliability</h5>
                    <p>Always a reliable partner</p><br>
                </div>
            </div>
            
        </div>
    </div>


    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <!-- Button Login -->

    
    <?php require('./inc/button.php') ?>

    <!-- Button Reginter -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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