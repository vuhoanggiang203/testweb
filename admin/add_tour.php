<?php
require('./inc/db_config.php');




$name = $_POST["name_tour"];
$code = $_POST['code_tour'];
$start = $_POST['start'];
$price = $_POST['price'];

$detail = $_POST['detail'];
$src_image = basename($_FILES['avatar']['name']);

$target_dir = "C:/xampp1/htdocs/demo2/demo1/images/Tours/";

$target_dir2 = "./images/Tours/";
$target_file = $target_dir . $src_image;
$target_file2 = $target_dir2 . $src_image;

// move_uploaded_file($_FILES["avatar"]["name"], $target_file);
// $sql_addtour = "INSERT INTO ql_tour VALUES('','$code',' $name','$start','$price','$target_file','$detail')";
// mysqli_query($con, $sql_addtour);
// header("location: manage_tour.php");


// if (move_uploaded_file($_FILES["avatar"]["name"], $target_file)) {
//     $sql_addtour = "INSERT INTO ql_tour VALUES('','$code',' $name','$start','$price','$target_file','$detail')";
//     mysqli_query($con, $sql_addtour);
//     header("location: manage_tour.php");
// } else {
//     // header("location: manage_tour.php");
//     echo "<script>alert('Error !');</script>";
// }
// try catch ###################################################
// try {
//     //throw exception if can't move the file

//     move_uploaded_file($_FILES["avatar"]["name"], $target_file);

//     $sql_addtour = "INSERT INTO ql_tour VALUES('','$code',' $name','$start','$price','$target_file','$detail')";
//     mysqli_query($con, $sql_addtour);


//     //do some more things with the file which may also throw an exception
//     //...

//     //ok if got here
//     echo "Upload Complete!";
// } catch (Exception $e) {
//     die('File did not upload: ' . $e->getMessage());
//     echo 'Failed to upload file: ' . $e->getMessage();
// }
############################ 
// if (!file_exists($target_file)) {
//     mkdir($target_file, 0777, true);
// }

// if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
//     echo "file successfully uploaded";
// } else {
//     echo "$src_image";
//     echo "<br>";
//     echo "$target_file";
//     echo "<br>";
//     echo "$target_dir";
//     echo "<br>";

//     echo "error  file upload";
// }

##############################################################################
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// Check file size
// if ($_FILES["avatar"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["avatar"]["name"])) . " has been uploaded.";
        $sql_addtour = "INSERT INTO ql_tour VALUES('','$code',' $name','$start','$price','$target_file2','$detail')";
        mysqli_query($con, $sql_addtour);
        header("location: manage_tour.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
