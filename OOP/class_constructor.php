<?php
    //creating a class in php

use Car as GlobalCar;

class Car{
        //how to add somme properties
        Var $wheels = 4;
        Var $hood = 1;
        Var $doors = 4;
        
        //the constructor will be exixuted each time we instanciate an object
        function __construct(){
            echo $this-> wheels = 10;
        }
        function createDoors(){
            $this->doors = 6;
        }
    }
    //instanciate a newobject car
    $bmw = new Car();
    $truck = new Car();
    $Audi = new Car();
?>