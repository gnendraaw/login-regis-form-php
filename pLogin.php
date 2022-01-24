<?php
    session_start();

    include "config.php";
    
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0)
    {
        $user = mysqli_fetch_array($result);
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['level'] = $user['level'];
        $_SESSION['login'] = 1;

        echo "<script>alert('Login sucess!')</script>";
        header("location: homepage.php");
    }
    else 
    {
        echo "<script>alert('Incorrect username or password')</script>";
        die();
    }
?>