<?php
    session_start();

    include "config.php";
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if($cpassword == $password)
    {
        $sql = "SELECT * FROM users WHERE email='$email' OR username='$username'";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0)
        {
            echo "<script>alert('This email or username already been registered')</script>";
            die();
        }
        else 
        {
            $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if(!$result)
            {
                echo "<script>alert('Something went wrong')</script>";
            }
            else 
            {
                $username = '';
                $email = '';
                $password = '';
                $cpassword = '';

                echo "<script>alert('Your account has been created!')</script>";
                header("location: index.php");
            }
        }
    }
    else 
    {
        echo "<script>alert('Password not matched')</script>";
        die();
    }
?>