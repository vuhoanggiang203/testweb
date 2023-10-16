<?php
if (isset($_POST["emp_id"])) {
    $output = '';
    require('./inc/db_config.php');

    $query = "SELECT * FROM ql_tour WHERE sr_no = '" . $_POST["emp_id"] . "'";
    $result = mysqli_query($con, $query);


    $output .= ' <div class="modal fade" id="tour_payment" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="tour_paymentLabel" aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content"> 
        <div class="modal-header">

                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi-cart3 fs-3 me-2 fw-bold "></i> PAYMENT
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div> ';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '
                
                <div class="" >
                    <div class="text-primary fs-5  mb-3 px-3 ">List tour</div>
                    <div class=" d-flex flex-row justify-content-between align-center px-3">

                        <p> <input type="radio" checked><span class="fs-6 ms-2 ">' . $row["name_tour"] . '
                            </span>
                        </p>
                        <div class="mx-3">' . $row["price"] . '</div>
                    </div>
                    <hr>
                    <div class="text-end fw-bold"> Total :
                        <span class="mx-3 fw-bold">' . $row["price"] . '</span>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-center my-3 "><input type="submit" id="booking_1" 
                       value="BOOK NOW" class="btn btn-primary py-2 px-3"  ></div>
            ';
    }
    $output .= '
        </div>
    </div>
</div>
 ';
    echo $output;
}
?>
<script>
    // function active_payment() {
    //     alert("Success !")
    // }
    // document.getElementById('booking_1').onclick = active_payment();

    var timesClicked = 0;

    $("#booking_1").click(function() {
        timesClicked++;

        if (timesClicked > 1) {
            //run second function
            alert("success !");
        } else {
            //run first function
        }
    })
</script>