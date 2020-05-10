<?php

session_start();

$conn = new mysqli("localhost","root");
if(!$conn)
{
    echo "Fail";
}

mysqli_select_db($conn, 'tram');

$user = $_SESSION['user'];
$lat = $_POST['lat'];
$long = $_POST['lon'];
echo $user;
echo $lat;
echo $long;
$stmt = "update live_location set latitude='$lat',longitude='$long' where tramid='$user'";
mysqli_query($conn, $stmt);
header('location:response.php');

?>