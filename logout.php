<?php
    session_start();

    include "config.php";

    $_SESSION['login'] = 0;
    session_abort();
    session_destroy();

    header("location: index.php");
?>