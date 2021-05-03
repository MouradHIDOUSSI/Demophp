<?php
//to connect to mysql database we use an api called mysqli_connect
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if (!$connection) {
    die("Database connection Failed");
}
?>
