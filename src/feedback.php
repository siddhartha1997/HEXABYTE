<?php

session_start();

$conn = new mysqli('localhost','root');
if(!$conn)
{
    echo "Fail";
}

mysqli_select_db($conn, 'tram');

$rating = $_POST['rate'];
$suggestion = $_POST['myText'];

$stmt = "insert into feedback(rating, suggestion) values('$rating','$suggestion')";
mysqli_query($conn, $stmt);

?>
<!DOCTYPE html>
<head>
    <title>Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {margin:0;}
        .icon-bar 
        {
            width: 100%;
            background-color: #555;
            overflow: auto;
        }
        .icon-bar a 
        {
            float: left;
            width: 16%;
            text-align: center;
            padding: 12px 0;
            transition: all 0.3s ease;
            color: white;
            font-size: 36px;
        }
        .icon-bar a:hover 
        {
            background-color: #000;
        }
        .active 
        {
            background-color: blue;
        }
        #car
        {
            float:right;
            padding-right: 0px;
            padding-left: 10px;
            padding-bottom: 0px;
            padding-top: 10px;
            /*font-size:150%;
            size: 20cm;
            font-family:Sans-Serif;
            color:white;
            text-shadow: 2px 2px 4px #000000;*/
        }
        #logo
        {
            float: left;
            margin-top: 15px ;
            padding-right: 10px;
            border-top-right-radius: 50%;
            border-bottom-right-radius: 50%;
        }
        #fb
        {
            z-index: 1;
            background-image: url('bgp.jpg');
            background-repeat: no-repeat;
            width: 250px;
            margin-left: 60px;
            position: relative;
            bottom: 10px;
            padding: 10px;
            padding-left: 10px;
            color:black;
            opacity: 0.9;
            border-radius: 10px;
            text-align: center;
        }
        #ic
        {
            padding-left: 400px;
            padding-top: 25px;
            text-align: center;
        }
        .button
        {
            background-color: blue;
            color: whitesmoke;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 15px;
        }
        #sp
        {
            border-spacing: 50px 0;
        }
        #bd
        {
            background-image: url('handsketch_5.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            z-index: 0;
        }
    </style>
</head>
<body>
    <div class="icon-bar">
        <img id ="logo" src="log1.PNG" width="250px" height="80px">
        <div id="car"><img src="logo1.PNG" width="150px" height="80px"></div>
        <a style="text-decoration: none" href="Welcome_Page.html"><i class="fa fa-home"></i><br><font style="font-size: medium; text-align: center;">Home</font></a>
        <a style="text-decoration: none" href="login.html"><i class="fa fa-ticket"></i><br><font style="font-size: medium; text-align: center;">Special Pass Booking</font></a>  
        <a style="text-decoration: none" href="live.html"><i class="fa fa-map-marker"></i><br><font style="font-size: medium; text-align: center;">Track Tram</font></a>
        <a style="text-decoration: none" class="active" href="#"><i class="fa fa-commenting"></i><br><font style="font-size: medium; text-align: center;">Feedback</font></a>
    </div>
    <div id="bd">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="fb">
            <h1>Thank You For the Feedback!<h1>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>
</html>