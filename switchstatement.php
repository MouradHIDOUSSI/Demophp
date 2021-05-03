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
    //we replace many if statment with switch
    //used to check one condition with more values 
    $number = 15;
    switch ($number) {
            //is $number equal to this numbers in deferent cases
        case 1:
            echo "is it 1";
            break;
        case 2;
            echo "is it 2";
            break;
        case 10;
            echo "yes is it 10";
            //to break the switch statement we use break it executes only the first true case
            //the rest of cases will be skiped even it was true
            break;
        case 10;
            echo "yes is it 10";
            break;
        case 10;
            echo "yes is it 10";
            break;
        case 10;
            echo "yes is it 10";
            break;
        case 10;
            echo "yes is it 10";
            break;
        case 10;
            echo "yes is it 10";
            break;
        default:
            echo "we couldn't find anything";
            break;
    }

    ?>
</body>

</html>