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
        $numberListe = array();
        $numberListe = [];
        $numberListe = array(25, 26, 45);
        $numberListe = [25, 26, 30];
        //to show oneelement of the table
        echo $numberListe[0];
        //to show the all table content
        echo "<br>";
        print_r($numberListe);
        //we can add whatever we wont in the array ex string/tag htmal....
    ?>
</body>
</html>