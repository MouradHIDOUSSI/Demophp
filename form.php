<?php
if (isset($_POST['submision'])) {
    echo "Yes the form is working <br>";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $min = 5;
    $max = 10;
    $user = ['Mourad', 'Younes', 'Omar', 'Faouzi'];
    if (strlen($username) < $min) {
        echo "the user namemust be longer then 5";
    } elseif (strlen($username) > $max) {
        echo "the user namemust be lower then 10";
    }

    if(!in_array($username, $user)){
        echo "You are not alowed to login";
    }else{
        echo "welcome";
    }

    /*echo "<br>";
    echo "Hello " . $username;
    echo "<br>";
    echo "Your password is " . $password;
    echo "<br>";
    print_r($_POST);*/
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
    <!-- collecting data with a supper glbal variaable called post-->
    <!-- here we gonna put data from the form 
    into form.php page ( by using the method post)-->
    <form action="form.php" method="post">
        <input type="text" name="username" placeholder="Enter your Name:"><br>
        <input type="password" name="password" placeholder="Enter your password:">
        <br>
        <input type="submit" name="submision">
    </form>

</body>

</html>