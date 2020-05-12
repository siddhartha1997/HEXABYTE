<?php

    session_start();
    require("user.php");

    $user = $_POST['user'];
    $fname = $_POST['fname'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];


    //$reg = new register($user,$fname,$mail,$pass);
    $reg = new user();
    $c = $reg->insert($user,$fname,$mail,$pass);

    if ($c)
    {
        header("location:login.html");
    }
    else
    {
        echo("Fail in updation");
    }

?>