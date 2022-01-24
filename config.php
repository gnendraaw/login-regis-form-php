<?php
    $server = "localhost";
    $user = "root";
    $password = '';
    $db = "test";

    $conn = mysqli_connect($server, $user, $password, $db);
    if(!$conn)
    {
        echo "<script>alert('Failed to connect with database')</script>";
    }
?>