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