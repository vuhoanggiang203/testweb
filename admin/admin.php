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
                <h2 class="mb-4 fw-bold note-font">ACCOUNTS</h2>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive-md" style="height: 450px;overflow-y: scroll;">
                            <table class="table table-hover border-dark">
                                <thead class="sticky-top">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Tel</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">CID</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $servername = 'localhost';
                                    $username = 'root';
                                    $password = '';
                                    $database = 'demo1';
                                    $con = new mysqli($servername, $username, $password, $database);
                                    if ($con->connect_error) {
                                        die("Connection failed: " . $con->connect_error);
                                    }
                                    $sql = "SELECT * FROM db_user WHERE role = 0";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row['ID'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['user_name'] . "</td>";
                                            echo "<td>" . $row['tel'] . "</td>";
                                            echo "<td>" . $row['address'] . "</td>";
                                            echo "<td>" . $row['cid'] . "</td>";
                                            echo '<td><button class="btn btn-danger btn-sm" onclick="deleteData(' . $row['ID'] . ')">Delete</button></td>';
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='7'>No data found</td></tr>";
                                    }
                                    $con->close();
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        require('inc/script.php')
    ?>
    <script>
        function deleteData(id) {
            if (confirm("Are you sure you want to delete this data?")) {

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                       
                        location.reload();
                    }
                };
                xhttp.open("GET", "delete_account.php?id=" + id, true);
                xhttp.send();
            }
        }
    </script>
</body>
</html>