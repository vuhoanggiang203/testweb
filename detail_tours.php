<?php
require('./inc/loginlogic.php');
require('./inc/db_config.php');

$id = $_GET['id'];
$sql = "SELECT * FROM ql_tour WHERE sr_no = '$id' ";

$data = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel - Detail Page</title>
    <title>Sale Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once('./inc/header.php'); ?>

    <div class="container " id="">
        <p class="fw-bold  fs-3"> <?php echo $row['name_tour'] ?> <span> - </span>
            <span><?php echo $row['price'] ?></span>
        </p>
        <div class=" d-flex flex-row gap-3">
            <img src="<?php echo $row['avatar'] ?>" alt="" class="w-75 rounded">

        </div>
        <div class="mt-3 w-50 fs-5">
            <?php echo $row['detail'] ?>
        </div>
        <input type="submit" value="Booking now" id="<?php echo $id  ?>" class="btn btn-primary py-2 px-3 mt-3 book" data-bs-toggle="modal" data-bs-target="#payment">
    </div>



    <script>
        $(document).ready(function() {
            $('input').click(function() {
                id_emp = $(this).attr('id');
                // alert(id_emp);
                $.ajax({
                    url: "select.php",
                    method: 'post',
                    data: {
                        emp_id: id_emp
                    },
                    success: function(result) {
                        console.log(result);
                        var a = $(".modal-body").html(result);
                        setTimeout(console.log(a), 3000);

                    }
                });


                $('#tour_payment').modal("show");
            });
        });
    </script>
    <!-- <script>
    $(document).ready(function() {
        $('.book').click(function(e) {
            e.preventDefault();
            // console.log("ok");
            var id = $(this).closest('div').find('.id').text();
            // console.log(id1);
            $.ajax({
                method: "POST",
                url: "select.php",
                data: {
                    "click_view_btn": true,
                    'id': id,
                },
                success: function(response) {
                       
                    console.log(response);
                    // })
                    $('#tour_payment').modal('show');
                }
            });
        });
    });
    </script> -->

    <!-- modal test  -->
    <!-- <div class="modal" id="#tour_payment" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- modal test end  -->
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
    <script src="./js/invalid.js"></script>
</body>

</html>