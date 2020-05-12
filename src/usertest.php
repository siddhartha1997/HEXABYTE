<?php

require("user.php");
$user2 = new user();
$user1 = "7";
$fname="Suham";
$mail="ss@gmail.com";
$pass="1234";

$opi=$user2->insert($user1,$fname,$mail,$pass);
$expopi=true;

if($opi==$expopi)
{
    echo "test 1 succeded";
}
else
{
    echo "test 1 failed";
}

$op2=$user2->check("sb@gmail.com","123456");
$expopc=1;

if($op2==$expopc)
{
    echo "test 2 success";
}
else
{
    echo "test 2 fail";
}