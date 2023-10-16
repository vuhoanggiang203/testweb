<?php
require('./inc/db_config.php');

$sql = "SELECT * FROM ql_tour";
$data = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard Page</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
    <?php
    require('inc/links.php')
    ?>

    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body class="bg-light">

    <?php require('inc/sidebar.php') ?>

    <div class="container-fluid" id="addtour">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden" id="main-content">
                <div class="my-4 d-flex flex-row justify-content-between">
                    <h3>TOUR</h3> <span><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add a
                            tour</button></span>
                </div>
                <table class="table table-dark table-striped table-hover mw-75">
                    <tr>
                        <th>ID </th>
                        <th>Name </th>
                        <th>Code Tour</th>
                        <th>Start</th>
                        <th>Price</th>
                        <th>Avatar</th>
                        <th>Feature</th>
                    </tr>
                    <?php
                    if (isset($data) && $data != null) {
                        $i = 0;
                        while ($row = mysqli_fetch_array($data)) {

                    ?>
                            <tr>

                                <td class="id"><?php echo $row['sr_no'] ?></td>
                                <td><?php echo $row['name_tour'] ?></td>
                                <td><?php echo $row['code_tour'] ?></td>
                                <td><?php echo $row['start'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['avatar'] ?></td>
                                <td class="d-flex flex-column justify-content-between h-100"><button class=" btn btn-primary edit_data">Edit</button><button class="btn btn-danger my-2"><a style="text-decoration: none;" href="delete_tour.php?deleteid=<?php echo $row['sr_no']; ?>">Delete</a></button>
                                </td>

                            </tr>
                    <?php
                        }
                    }

                    ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.edit_data').on('click', function() {
                $('#viewmodal').modal('show');
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#id').val(data[0]);
                $('#name').val(data[1]);
                $('#code').val(data[2]);
                $('#start').val(data[3]);
                $('#price').val(data[4]);
                $('#avatar').val(data[5]);

            })
        })
    </script>
    <!-- <script>
    $(document).ready(function() {
        $('.edit_data').click(function(e) {
            e.preventDefault();
            // console.log("ok");

            // var id = $(this).closest('tr').find('.id').text();
            // console.log(id1);
            $.ajax({
                method: "POST",
                url: "code.php",
                data: {
                    "click_view_btn": true,
                    'id': id,
                },
                success: function(response) {
                    // $.each(response, function(Key, value) {
                    //     $('#name').val(value['name_tour']);
                    //     $('#code').val(value['code_tour']);
                    //     $('#start').val(value['start']);
                    //     $('#price').val(value['price']);
                    //     $('#avatar').val(value['avatar']);
                    //     $('#detail').val(value['detail']);

                    // });
                    console.log(response);
                    // $('#viewmodal').modal('show');
                }
            });
        });
    }); -->
    </script>
    <div class=" modal fade" id="viewmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewmodalLabel">Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="view_data">
                        <form action="update.php" class="d-flex flex-column gap-3 w-100 justify-content-center " method="post" enctype="multipart/form-data">

                            <label for="" class="fs-6">ID</label>
                            <input type="text" id="id" placeholder="100" name="sr_no">
                            <label for="" class="fs-6">Name Tour</label>
                            <input type="text" id="name" placeholder="Minh Khai" name="name_tour">
                            <label for="" class="fs-6">Code Tour</label>
                            <input type="text" id="code" placeholder="ACB CD CDADG" name="code_tour">
                            <label for="" class="fs-6">Departure </label>
                            <input type="text" id="start" placeholder="Ha Noi" name="start">
                            <label for="" class="fs-6">Price Tour </label>
                            <input type="number" id="price" placeholder="217" name="price">

                            <label for="" class="fs-6">Image Tour</label>
                            <input type="file" id="avatar" name="avatar">


                            <input type="submit" value="UPDATE" name="update" class="btn btn-success mb-3 w-100 ">

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class=" modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add a tour</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="add_tour.php" class="d-flex flex-column gap-3 w-100 justify-content-center " method="post" enctype="multipart/form-data">


                        <label for="" class="fs-6">Name Tour</label>
                        <input type="text" placeholder="Minh Khai" name="name_tour">
                        <label for="" class="fs-6">Code Tour</label>
                        <input type="text" placeholder="ACB CD CDADG" name="code_tour">
                        <label for="" class="fs-6">Departure </label>
                        <input type="text" placeholder="Ha Noi" name="start">
                        <label for="" class="fs-6">Price Tour </label>
                        <input type="number" placeholder="217" name="price">
                        <label for="" class="fs-6">Image Tour</label>
                        <input type="file" name="avatar" id="avatar">

                        <label for="" class="fs-6">Introduce </label>
                        <input type="text" placeholder="Eg : ..." name="detail">
                        <input type="submit" value="ADD" class="btn btn-success mb-3 w-100 ">

                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php
    require('inc/script.php')
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</html>