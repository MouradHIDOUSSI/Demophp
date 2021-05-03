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
        
        init();
        
        function init(){
            saySomthing();
            add(25, 30);
        }

        function saySomthing() {
            echo "hi this my first function in php"."<br>";
        }
        

        function add ($a, $b){
            echo "a = $a"."+". "b= $b = ". $a+$b;
        }
        

    ?>

</body>
</html>