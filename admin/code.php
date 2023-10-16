<?php
session_start();
require('./inc/db_config.php');
require('inc/links.php');
if (isset($_POST['click_view_btn'])) {

    $id = $_POST['id'];
    $arrayresult = [];
    // echo $id; 
    $fetch_query  = "SELECT * FROM ql_tour WHERE id = '$id' ";
    $fetch_query_run = mysqli_query($con, $fetch_query);
    if (mysqli_num_rows($fetch_query_run) > 0) {
        while ($row =  mysqli_fetch_array($fetch_query_run)) {
            array_push($arrayresult, $row);
            // header('content-type: application/json ');
            // echo json_encode($arrayresult);
        }
    }
}
