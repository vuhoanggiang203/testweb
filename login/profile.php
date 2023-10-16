<?php
      session_start();

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $servername = 'localhost';
          $username = 'root';
          $password = '';
          $database = 'demo1';
          $con = new mysqli($servername, $username, $password, $database);
          if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
          }
  
          $name = $_POST["name"];
          $tel = $_POST["tel"];
          $address = $_POST["address"];
          $cid = $_POST["cid"];
          $user_pass = $_POST["user_pass"];
  
          $username = $_SESSION["user_name"];
          $sql = "UPDATE db_user SET name='$name', tel='$tel', address='$address', cid='$cid', user_pass='$user_pass' WHERE user_name='$username'";
  
          if ($con->query($sql) === TRUE) {
              echo '<script>';
              echo 'alert("Thay đổi thành công");';
              echo 'window.location.href = "login.php";';
              echo '</script>';
              exit;
          } else {
              echo "Thay đổi thất bại: " . $con->error;
          }
  
          $con->close();
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel - About Page</title>
    <?php require('./inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-light">
    <!-- Navigation -->
    <?php require('./inc/header.php') ?>
    <!-- Facilities Page -->
    <div class="container mt-4">
        <?php
            if(isset($_SESSION["user_name"])){
                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'demo1';
                $con = new mysqli($servername, $username, $password, $database);
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }
                $username = $_SESSION["user_name"];
                $sql = "SELECT * FROM db_user WHERE user_name = '$username'";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo '<div class="card mb-3">';
                    echo '<div class="card-header">Tài khoản đang đăng nhập: '.$row["user_name"].'</div>';
                    echo '<div class="card-body">';
                    echo '<form action="#" method="POST">';
                    echo '<div class="mb-3">';
                    echo '<label for="name" class="form-label">Name:</label>';
                    echo '<input type="text" id="name" name="name" class="form-control" value="'.$row["name"].'" disabled>';
                    echo '</div>';
                    echo '<div class="mb-3">';
                    echo '<label for="tel" class="form-label">Phone Number:</label>';
                    echo '<input type="text" id="tel" name="tel" class="form-control" value="'.$row["tel"].'" disabled>';
                    echo '</div>';
                    echo '<div class="mb-3">';
                    echo '<label for="address" class="form-label">Address:</label>';
                    echo '<input type="text" id="address" name="address" class="form-control" value="'.$row["address"].'" disabled>';
                    echo '</div>';
                    echo '<div class="mb-3">';
                    echo '<label for="cid" class="form-label">CID:</label>';
                    echo '<input type="text" id="cid" name="cid" class="form-control" value="'.$row["cid"].'" disabled>';
                    echo '</div>';
                    echo '<div class="mb-3">';
                    echo '<label for="user_pass" class="form-label">Password:</label>';
                    echo '<input type="password" id="user_pass" name="user_pass" class="form-control" value="'.$row["user_pass"].'" disabled>';
                    echo '</div>';
                    echo '<button type="button" class="btn btn-primary" id="editBtn">Edit profile</button>';
                    echo '<button type="submit" class="btn btn-primary" id="saveBtn" style="display: none;">Save</button>';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
                }
                $con->close();
            }
        ?>
    </div>
    <!-- Footer -->
    <?php require('./inc/footer.php') ?>
    <!-- Button Login -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.getElementById("editBtn").addEventListener("click", function() {
            var inputs = document.querySelectorAll("input");
            inputs.forEach(function(input) {
                input.disabled = false;
            });
            document.getElementById("editBtn").style.display = "none";
            document.getElementById("saveBtn").style.display = "block";
        });
    </script>
</body>
</html>