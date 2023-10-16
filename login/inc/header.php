<?php

require('../admin/inc/db_config.php');
require('../admin/inc/essential.php');

?>


<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 header-font d-flex align-items-center" href="login.php">
            <img src="./images/Logo/logo.png" class="rounded-circle me-2" style="width: 40px; height: 40px;">
            Travel
        </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="login.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="tour_login.php">Tours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="new.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <a href="profile.php">
                    <img src="./images/Logo/avatar.png" class="rounded-circle me-2" style="width: 40px; height: 40px;">
                </a>
                <a class="btn btn-outline-dark shadow-none me-lg-3 me-2" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</nav>