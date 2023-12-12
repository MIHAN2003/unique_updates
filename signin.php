<?php
 $host_name = "localhost";
 $db_username = "root";
 $db_password = "";
 $db_name = "myservice";

 // Create connection
 $conn = new mysqli($host_name, $db_username, $db_password);

 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

 // Create database
 $sql = "CREATE DATABASE myservice";
 if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
 } else {
    echo "Error creating database: " . $conn->error;
 }

 $conn->close();
?>