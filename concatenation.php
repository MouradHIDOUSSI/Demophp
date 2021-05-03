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
    $name = "Mourad";
    $number = 100;
    //php is case sensitive number & NUMBER are not the same
    $NUMBER = 100.5;
    //echo $name;
    //echo "<br>";
    //echo $number;
    //echo "<br>";
    //echo $NUMBER;
    //how we gonna concatenate all this echos:

    echo "we are concatinating " . $name . " with " . $number;
    //or simply
    echo "<br>";
    echo $name . $number;

    ?>
</body>

</html>