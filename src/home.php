<?php

session_start(); 

?>

<!Doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Welcome <?php echo $_SESSION['userid']; ?> </h1>
        <a href="login.html">Logout</a>
    </body>
</html>
