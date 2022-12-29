<?php
    $hostname     = "localhost";   // Enter Your Host Name
    $username     = "p-319758_ecomeken";             // Enter Your Table username
    $password     = "miracle0559#";         // Enter Your Table Password
    $databasename = "p-319758_ecomeken";              // Enter Your database Name


    $conn = new mysqli($hostname, $username, $password, $databasename);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>