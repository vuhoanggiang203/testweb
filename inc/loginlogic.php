<?php
    
    require('./inc/db_config.php');
    
    $error = ""; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name = $_POST["user_name"];
        $user_pass = $_POST["user_pass"];
        // Truy vấn kiểm tra tài khoản và mật khẩu
        $sql = "SELECT id, user_name, user_pass, role FROM db_user WHERE user_name = '$user_name' AND user_pass = '$user_pass'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $role = $row["role"];
            if ($role == 1) {
                // Chuyển hướng đến trang admin
                header("Location: ./admin/admin.php");
                exit();
            } else if ($role == 0) {
                // Chuyển hướng đến trang user
                header("Location: ./login/login.php");
                exit();
            }
        } else {
            $error = " ";
        }
    }
    $con->close();
