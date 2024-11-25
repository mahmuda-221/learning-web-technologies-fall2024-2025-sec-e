<?php

session_start();

if(!(isset($_SESSION["status"]))){
    header("location: login.html");
}

?>

<html>
    <head>
        <title>Homepage</title>
    </head>
    <body>
        <?php echo "Hello!  {$_SESSION["username"]}" ?>
        <p><b>Welcome!</b></p>
        <a href ="logout.php">Log Out</a>
    </body>
</html>