<?php
    if(isset($_POST['submit'])){
        echo $_POST['name'];
        echo "<br>";
        print_r($_POST);
    }
    
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
    <form action="the_post.php" method="post">
        <input type="text" name="name">
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>