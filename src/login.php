<?php

    session_start();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    require("user.php");
    $user1 = new user();
    $num = $user1->check($user,$pass);
    $valid=$user1->validuser($num);

    if($num)
    {
        $_SESSION['userid'] = $user1->getusername($user);
        header('location:home.php');
    }
    else
    {
        header('location:login.html');
    }

?>