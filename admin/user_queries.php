<?php

require('inc/db_config.php');
require('inc/essential.php');

if(isset($_GET['seen']))
{
    $frm_data = filter($_GET);
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
        $values = [1,$frm_data['seen']];
        if(update($q,$values,'ii')){
            customalert('success','Mark as read');
        }
        else {
            customalert('error','Fail to read');
        }
}

if(isset($_GET['del']))
{
    $frm_data = filter($_GET);
        $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
        $values = [$frm_data['del']];
        if(update($q,$values,'i')){
            customalert('success','Del Success');
        }
        else {
            customalert('error','Fail to del');
        }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User Queries Page</title>
  
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
                <h2 class="mb-4 fw-bold note-font">USER QUERIES</h2>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">

                    <div class="table-reponsive-md" style="height: 450px;overflow-y: scroll;">
                        <table class="table table-hover border-dark">
                            <thead class="sticky-top">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Tel</th>
                                    <th scope="col" width="20%">Address</th>
                                    <th scope="col" width="20%">Title</th>
                                    <th scope="col" >Message</th>
                                    <th scope="col" width="20%">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                    $q = "SELECT * FROM `user_queries` ORDER by `sr_no` DESC";
                                    $data = mysqli_query($con, $q);
                                    $i = 1;

                                    while($row = mysqli_fetch_assoc($data))
                                    {
                                        $seen='';
                                        if($row['seen']!=1){
                                            $seen = "<a href='?seen=$row[sr_no]' class = 'btn btn-sm rounded-pill btn-dark'>Mark as read</a>";
                                        }
                                        $seen.="<a href='?del=$row[sr_no]' class = 'btn btn-sm rounded-pill btn-danger mt-4'>Delete</a>";
                                        echo <<<query
                                            <tr>
                                                <td>$i</td>
                                                <td>$row[name]</td>
                                                <td>$row[tel]</td>
                                                <td>$row[address]</td>
                                                <td>$row[title]</td>
                                                <td>$row[message]</td>
                                                <td>$row[date]</td>
                                                <td>$seen</td>
                                            </tr>
                                        query;
                                        $i++;
                                    }
                               ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

    
    <?php
        require('inc/script.php')
    ?>
    
    <script src="./script/script.js"></script>
</body>
</html>
