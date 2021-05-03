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
        $number= 100;
        //php is case sensitive number & NUMBER are not the same
        $NUMBER= 100.5;
        echo $name;
        echo "<br>";
        echo $number;
        echo "<br>";
        echo $NUMBER;
        //how to insert html tag inside a string:
        $string_tag = "<h1>Hello</h1>";
        echo "<br>";
        echo $string_tag;
    ?>
</body>
</html>