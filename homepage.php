<?php
    session_start();

    $login = $_SESSION['login'];
    if($login == 1)
    {
        include "config.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <?php
        $user = $_SESSION['username'];
        $level = $_SESSION['level']; 
        if($level == 1)
        {
            include "admin.php";
        }
        else if($level == 0)
        {
            include "user.php";
        }
    ?>
</body>
</html>