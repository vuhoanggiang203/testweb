<?php 
    require('./inc/loginlogic.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel - News Page</title>
    <title>Sale Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php require_once('./inc/header.php'); ?>
    <div class="container-fluid" id="news">
        <p class="fw-bold  fs-3">News </p>
        <div id="" class="d-flex flex-row gap-3">
            <img class="border rounded" src="./images/Tours/4.jpg" alt="" width="800px" height="550px">
            <div class="d-flex justify-content-between flex-column">
                <div class="d-flex flex-row">
                    <img class="border rounded" src="./images/Tours/2.jpg" alt="" width="210px" height="144px">
                    <div class="mx-3 d-flex flex-column">
                        <a class="fs-4 text-danger fw-bold  ">Tin tức dữ liệu </a>
                        <p class="fs-6 fw-normal">Tour Đài Loan 2023: Mùa Thu Trọn Vẹn Và Hấp Dẫn Đang Chờ Đón Bạn</p>
                        <p class="fs-6">22/09/2023</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <img class="border rounded" src="./images/Tours/2.jpg" alt="" width="210px" height="144px">
                    <div class="mx-3 d-flex flex-column">
                        <a class="fs-4 text-danger fw-bold ">Tin tức dữ liệu </a>
                        <p class="fs-6 fw-normal">Tour Đài Loan 2023: Mùa Thu Trọn Vẹn Và Hấp Dẫn Đang Chờ Đón Bạn</p>
                        <p class="fs-6">22/09/2023</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <img class="border rounded" src="./images/Tours/3.jpg" alt="" width="210px" height="144px">
                    <div class="mx-3 d-flex flex-column">
                        <a class="fs-4  text-danger fw-bold   "> Tin tức dữ liệu </a>
                        <p class="fs-6 fw-normal">Tour Đài Loan 2023: Mùa Thu Trọn Vẹn Và Hấp Dẫn Đang Chờ Đón Bạn</p>
                        <p class="fs-6">22/09/2023</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="container-fluid my-4" id="guide">
        <p class="fw-bold fs-3">Travel guide</p>
        <div class="row">
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/6.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/5.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/4.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/3.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/2.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
            <div class="col">
                <img class="border rounded" width="100%" height="250px" src="./images/Tours/1.jpg" alt="">
                <p class="fw-bold fs-4 mt-1 ">Lễ hội ruộng bậc thang Mù Cang Chải 2023</p>
                <p>17/02/2000</p>
            </div>
        </div>

    </div>

    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <!-- Button Login -->

    <?php require('./inc/button.php') ?>

    <!-- Button Reginter -->

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

</body>

</html>