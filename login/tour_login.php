<?php
require('../demo1/inc/loginlogic.php');
require('../demo1/inc/db_config.php');


$sql = "SELECT * FROM ql_tour ";

$data = mysqli_query($con, $sql);
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel - Tour Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-light">

    <!-- Navigation -->

    <?php require('./inc/header.php') ?>

    <!-- Facilities Page -->

    <div class="my-5 px-4">
        <h1 class="fw-bold header-font text-center">Tours</h1>
        <div class="header-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula tellus id nibh <br> venenatis
            tempor.
            Donec iaculis dui nunc, non blandit odio blandit et.
        </p>
    </div>

    <div class="container">
        <h2 class="my-4">Foreign Tour</h2>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($data)) {  ?>
                <div class="d-grid col-lg-4 col-md-6 mb-5 ">

                    <div class="card border-0 shadow rounded tour-item " style="max-width: 380px; margin:auto; height: 650px;border: 1px solid #dddfe2;border-radius: 10px;">





                        <img src="<?php echo $row['avatar'] ?>" class="card-img-top" style="height: 250px;">
                        <div class="card-body d-flex flex-column justify-content-between">

                            <h5 class="card-title note-font fw-bold"><?php echo $row['name_tour'] ?></h5>
                            <p class="card-text">Tour code: <br>
                                <i class="bi bi-ticket"></i> <?php echo $row['code_tour'] ?>
                            </p>
                            <p class="card-text"><span>Place of departure:</span> <?php echo $row['start'] ?></p>

                            <div class="d-flex justify-content-between align-items-center">
                                <p class="price-color fw-bold mb-2"><?php echo $row['price'] ?></p>

                            </div>

                            <button type="button" href="#" class="btn btn-primary w-100 mt-3" id="<?php echo $row['sr_no'] ?>"><a href="detail_tours.php?id=<?php echo $row['sr_no'] ?>" style="text-decoration: none; color: #fff;">Booking now</a></button>
                        </div>
                    </div>

                </div>

            <?php

            }
            ?>

        </div>
    </div>


    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <?php require('./inc/button.php') ?>

    <!-- Button regiter -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
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
    <script src="./js/invalid.js"></script>
</body>

</html>