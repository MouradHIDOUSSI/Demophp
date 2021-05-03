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
        //index by default is 0-1-2
        $numberListe = [25, 26, 30];
        print_r($numberListe);
        echo "<br>";
        //if we wanna change the index
        //here we are changing the first inde name from 0 by default to first_name
        $names = ["first_Name" => 'Mourad', "last_Name" => 'HIDOUSSI']; 
        print_r($names);
        //if wewanna show one index or .. 2 
        echo "<br>";
        echo $names["first_Name"]. " " . $names["last_Name"];

    ?>
</body>

</html>