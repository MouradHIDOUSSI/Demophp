<?php
    //information of the user (cookies) are saved in the super global var $_COOKIE
    $name = "someName";
    $value = 200;
    //make th cookies expires after a week from now
    $experation = time() + (60*60*24*7);
    setcookie($name, $value, $experation);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        

    ?>

</body>
</html>