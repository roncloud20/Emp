<?php
    $conn = mysqli_connect("localhost", "root", "", "emprint_db");

    if (!$conn) {
        die("Couldn't connect to database: " . mysqli_connect_error());
    }
?>