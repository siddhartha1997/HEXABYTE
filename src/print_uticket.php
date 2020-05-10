<?php

session_start();

require("unreserved_ticket.php");

$date1 = $_SESSION['date1'];
$fare = $_SESSION['fare'];
$category = $_SESSION['category'];
$source = $_SESSION['source'];
$destination = $_SESSION['destination'];

$ut = new unreserved_ticket();
$val = $ut->insert($date1,$fare,$category,$source,$destination);
/*$conn = new mysqli('localhost','root');

if(!$conn)
{
    echo "Fail";
}

mysqli_select_db($conn, 'tram');

$stmt = "insert into unreserved_ticket(date, fare) values('$date1','$fare')";
mysqli_query($conn, $stmt);*/
if($val)
{
    header("location:display_uticket.php");
}

?>
