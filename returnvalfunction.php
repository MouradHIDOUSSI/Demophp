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
    function addition($number1, $number2)
    {
        $sum = $number1 + $number2;
        return $sum;
    }
    $result = addition(23, 15);
    $result = addition(23, $result);
    echo $result . "<br>";
    ?>

</body>

</html>