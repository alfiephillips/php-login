<?php
    include("functions.php");

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "db-php-login";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        echo "Connected successfully!";
        console_log("Test");
    } catch (error) {
        console_log($error.$message);
        echo "Failed to connected to database";
    }

?>