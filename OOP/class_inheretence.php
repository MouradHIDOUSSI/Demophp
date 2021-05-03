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
    echo $bmw->wheels;
    class Plane extends Car {
        Var $wheels = 20;
    }

    $jet = new Plane();
    echo $jet->wheels;
    echo $jet->doors;
    echo $jet->createDoors();
    echo $jet->doors;
?>
