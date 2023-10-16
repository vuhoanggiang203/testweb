<?php 
    require('./inc/loginlogic.php');
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel - Contact Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
  <body class="bg-light">

    <!-- Navigation -->
        
    <?php require('./inc/header.php') ?>

    <!-- Contact Page -->

    <div class="my-5 px-4">
        <h1 class="fw-bold header-font text-center">Contact Us</h1>
        <div class="header-line bg-dark"></div>
        <p class="text-center mt-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula tellus id nibh <br> venenatis tempor. 
        Donec iaculis dui nunc, non blandit odio blandit et.
        </p>
    </div>

    <?php 

        $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $value = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q,$value,'i'));

    ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe src="<?php echo $contact_r['iframe'] ?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5 class="mt-2">Address</h5>
                    <a href="<?php echo$contact_r['gmaps']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i> <?php echo$contact_r['address']?>
                    </a>
                    <h5 class="mt-2">Call Us</h5>
                    <a href="tel: +<?php echo$contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone"></i> +<?php echo$contact_r['pn1']?></a>
                    <br>
                    <?php
                        if($contact_r['pn2']!=''){
                            echo<<<data
                            <a href="tel: +$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone"></i> +$contact_r[pn2]</a>
                            data;
                        }
                    ?>
                    <h5 class="mt-2">Follow Us</h5>
                    <?php
                        if($contact_r['meta']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[meta]" class="d-inline-block mb-3 text-decoration-none text-dark">
                            <i class="bi bi-meta"></i> Meta</a>
                            <br>
                            data;
                        }
                    ?>
                       <?php
                        if($contact_r['ins']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[ins]" class="d-inline-block mb-3 text-decoration-none text-dark">
                            <i class="bi bi-instagram"></i> Instagram</a>
                            <br>
                            data;
                        }
                    ?>
                       <?php
                        if($contact_r['github']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[github]" class="d-inline-block mb-3 text-decoration-none text-dark">
                            <i class="bi bi-github"></i> Github</a>
                            <br>
                            data;
                        }
                    ?>
                       <?php
                        if($contact_r['linkedin']!='')
                        {
                            echo<<<data
                            <a href="$contact_r[linkedin]" class="d-inline-block mb-3 text-decoration-none text-dark">
                            <i class="bi bi-linkedin"></i> Linkedin</a>
                            <br>
                            data;
                        }
                    ?>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 mb-5 px-4">
               <div class="bg-white rounded shadow p-4">
                <form method="POST">
                <h5 class="mt-2">Send a infomation</h5>
                    <div class="mt-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Tel</label>
                        <input type="number" name="tel" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                    </div>
                    <div class="text-center"> <!-- Add text-center class here -->
                        <button type="submit" disabled name="send" class="btn btn-primary text-white mt-3">
                            Send To
                            <i class="bi bi-airplane"></i>
                        </button>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>


    <?php

    if(isset($_POST['send']))
    {
        $frm_data = filter($_POST);

        $q = "INSERT INTO `user_queries`(`name`, `email`, `tel`, `address`, `title`, `message`) VALUES (?,?,?,?,?,?)";

        $values = [$frm_data['name'],$frm_data['email'],$frm_data['tel'],$frm_data['address'],$frm_data['title'],$frm_data['message']];

        $res = insert($q,$values,'ssssss');

        if($res==1){
            echo 'Thanh cong';
        }
        else {
            echo 'That bai';
        }
    }

    ?>

    <!-- Footer -->

    <?php require('./inc/footer.php') ?>

    <!-- Button Login -->

    
    <?php require('./inc/button.php') ?>

    <!-- Button Regiter -->
    
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