<?php
// What is a Constructor?
// They are methods that makes a class do something to an instantiated 

class Car{

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    // Below is how you create a constructor, which will execute every time you make an instance
    function __construct(){
        echo $this->wheels = 8 . '<br>';
    }
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

// Below instantiations will automatically execute the construct above
$bmw = new Car();

$truck = new Car();



?>
