<?php
require('./inc/db_config.php');

if ($_POST['update']) {

    $id = $_POST['sr_no'];
    $name = $_POST['name_tour'];
    $code = $_POST['code_tour'];
    $start = $_POST['start'];
    $price = $_POST['price'];
    // $avatar = $_POST['avatar'];
    $src_image = basename($_FILES['avatar']['name']);

    $target_dir = "C:/xampp1/htdocs/demo2/demo1/images/Tours/";

    $target_dir1 = "./images/Tours/";
    $target_file = $target_dir . $src_image;
    $target_file1 = $target_dir1 . $src_image;


    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["avatar"]["name"])) . " has been uploaded.";
            $query_update = "UPDATE ql_tour SET name_tour = ' $name', code_tour = '$code', start ='$start' ,price ='$price', avatar = '$target_file1' WHERE sr_no='$id'  ";
            $query_run = mysqli_query($con, $query_update);

            if ($query_run) {
                echo '<script> alert("Data Updated"); </script>';
                header("Location: manage_tour.php");
            } else {
                echo '<script> alert("Data Not Updated"); </script>';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
