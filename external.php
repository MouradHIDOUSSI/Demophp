<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- collecting data with a supper glbal variaable called post-->
    <!-- here we gonna put data from the form 
    into form.php page ( by using the method post)-->
    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter your Name:"><br>
        <input type="password" name="password" placeholder="Enter your password:">
        <br>
        <input type="submit" name="submision">
    </form>

</body>

</html>