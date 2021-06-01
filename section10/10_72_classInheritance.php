<?php
class Car{

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels(){
        echo "wheels move" . '<br>';
    }
    function maxWheels(){
        $this ->wheels = 10;
    }
    function bikeWheels(){
        $this ->wheels = 2;
    }
    function moreDoors(){
        $this->doors += 2;
    }
    function lessDoors(){
        $this->doors -= 2;
    }
    function truckDoors(){
        $this->doors = 6;
    }
}
if(!class_exists('car')){
    echo "Class doesn't exist";    
}
if(!method_exists('car', 'moveWheels')){
    echo "Method doesn't exist";
}

$bmw = new Car();

// Create a new class 'Plane'
// We want the Plane class to have all the properties and methods of the Car class
// Acheieve this by using 'extends' keyword
class Plane extends Car{
    // inside here, we can override any inherited properties
    var $wheels = 10;
}

$jet = new Plane;
echo $jet->wheels;

?>