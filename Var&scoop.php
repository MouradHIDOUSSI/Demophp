<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--
    definition of scoop or context:
    the emvirement or the context in whish that specific element is available

    - when we say a scoop we mean :
    local scoop (var available inside function) and global scoop (var available outside/inside function)

    - also when we say varialbles there are two types :
    local var & global var

    - global var available inside/outside the function
    - local var available only inside

    -->

    <?php
        $x = "outside";//global scoop
        function convert(){
            global $x;
            $x = "inside";//local scoop
        }
        echo $x."<br>";
        convert();
        echo $x."<br>";
        echo $x;

    ?>

</body>

</html>