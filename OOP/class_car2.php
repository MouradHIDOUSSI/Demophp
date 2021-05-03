<?php
    //creating a class in php

use Car as GlobalCar;

class Car{
        function moveWheels(){
            echo "wheels moves"."<br>";
        }
    }

    $bmw = new Car();
    $bmw -> moveWheels();
    //how to check if this class exists
    if(class_exists("Car")){
        echo "Yes this class existes and its name Car"."<br>";
    }else{
        echo "No";
    }

    if(method_exists("Car","moveWheels")){
        echo "Yes this function existes and its name moveWheels()";
    }else{
        echo "No";
    }
?>