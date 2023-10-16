<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard Page</title>
    
    <?php 
        require('inc/links.php')
    ?>

    <link rel="stylesheet" href="./css/common.css">

</head>
<body class="bg-light">
    
    <?php require('inc/sidebar.php') ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden" id="main-content">
                Admin
            </div>
        </div>
    </div>

    <?php
        require('inc/script.php')
    ?>
</body>
</html>