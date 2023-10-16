<?php

require('inc/db_config.php');
require('inc/essential.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Settings Page</title>
  
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
                <h2 class="mb-4 fw-bold note-font">SETTINGS</h2>
                
      <!-- Contact Us setting -->

        <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="card-title m-0">Contact Us Settings</h4>
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#contacts-settings">
                            <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Maps</h6>
                                    <p class="card-text" id="gmaps"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                        <p class="card-text mb-1">
                                            <i class="bi bi-meta"></i>
                                            <span id="meta"></span>
                                        </p>
                                        <p class="card-text">
                                            <i class="bi bi-instagram me-1"></i>
                                            <span id="ins"></span>
                                        </p>
                                        <p class="card-text">
                                            <i class="bi bi-github me-1"></i>
                                            <span id="github"></span>
                                        </p>
                                        <p class="card-text">
                                            <i class="bi bi-linkedin me-1"></i>
                                            <span id="linkedin"></span>
                                        </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading = "lazy"></iframe>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal contact us settings -->

                <div class="modal fade" id="contacts-settings" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts-settings-form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contacts settings</h5>
                                </div>
                            <div class="modal-body">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Address</label>
                                                <input type="text" name="address" id="address_upd" class="form-control shadow-none" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Google Maps Link</label>
                                                <input type="text" name="gmaps" id="gmaps_upd" class="form-control shadow-none" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Phone Number</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                    <input type="text" name="pn1" id="pn1_upd" class="form-control shadown-none" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                    <input type="text" name="pn2" id="pn2_upd" class="form-control shadown-none">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-bold">Social Links</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-meta"></i></span>
                                                    <input type="text" name="meta" id="meta_upd" class="form-control shadown-none">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                    <input type="text" name="ins" id="ins_upd" class="form-control shadown-none">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-github"></i></span>
                                                    <input type="text" name="github" id="github_upd" class="form-control shadown-none">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-linkedin"></i></span>
                                                    <input type="text" name="linkedin" id="linkedin_upd" class="form-control shadown-none">
                                                </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Iframe Link</label>
                                                <input type="text" name="iframe" id="iframe_upd" class="form-control shadow-none" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary text-white shadow-none">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


              

    <?php
        require('inc/script.php')
    ?>
    
    <script src="./script/script.js"></script>
</body>
</html>