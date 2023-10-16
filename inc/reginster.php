<?php
    
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'demo1';
    $con = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $username1 = $_POST["user_name"];
        $phoneNumber = $_POST["tel"];
        $address = $_POST["address"];
        $cid = $_POST["cid"];
        $password = $_POST["user_pass"];
    
        // Check if the username already exists
        $checkUsernameQuery = "SELECT * FROM db_user WHERE user_name = '$username1'";
        $checkUsernameResult = $con->query($checkUsernameQuery);
        if ($checkUsernameResult->num_rows > 0) {
            echo '<script>';
            echo 'alert("Cảnh báo : Tên đăng nhập đã tồn tại");';
            echo 'window.history.go(-1);';
            echo '</script>';
            exit;
        } else {
            // Insert the data into the database
            $sql = "INSERT INTO db_user 
                    VALUES (' ','$name', '$username1', '$phoneNumber', '$address', '$cid', '$password',' ')";
            if ($con->query($sql) === TRUE) {
                echo '<script>';
                echo 'alert("Thêm tài khoản thành công");';
                echo 'window.history.go(-1);';
                echo '</script>';
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
    }

?>