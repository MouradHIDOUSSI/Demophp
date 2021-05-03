<?php
    //creating a class in php
    class Car{
        //how to add somme properties
        Var $wheels = 4;
        Var $hood = 1;
        Var $doors = 4;
        function moveWheels(){
            $this-> wheels = 10;
        }
        function createDoors(){
            $this->doors = 6;
        }
    }
    //instanciate a newobject car
    $bmw = new Car();
    //how to access its methodes
    //$bmw -> moveWheels();
    //howto access the variables of the class
    echo $bmw->wheels."<br>";
    //we can also do like this:
    //assign a value and echo it at the same time
    echo $bmw->wheels = 10 ."<br>";
    echo $bmw->doors. "<br>";
    echo $bmw->createDoors();
    echo $bmw->doors. "<br>";


    //how to check if this class exists
    /*if(class_exists("Car")){
        echo "Yes this class existes and its name Car"."<br>";
    }else{
        echo "No";
    }
    //how to check if this methodes exists
    if(method_exists("Car","moveWheels")){
        echo "Yes this function existes and its name moveWheels()";
    }else{
        echo "No";
    }*/
?>