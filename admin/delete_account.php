<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'demo1';
    $con = new mysqli($servername, $username, $password, $database);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $con->prepare("DELETE FROM db_user WHERE ID = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "Data deleted successfully";
        } else {
            echo "Error deleting data: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "ID parameter is missing";
    }
    $con->close();
?>