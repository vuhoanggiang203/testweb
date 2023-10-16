<?php
require('./inc/db_config.php');
$id = $_GET['deleteid'];
$delete_query = " DELETE FROM ql_tour WHERE sr_no = '$id'  ";
mysqli_query($con, $delete_query);
header("location: manage_tour.php");
