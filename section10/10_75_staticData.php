<?php
// Static data can only be accessed from within the class

class Car{
    // use the keyword 'static' to create a static variable
    static $wheels = 4;   
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
    
    function showProperty(){
        echo $this->hood . '<br>';
    }
}
if(!class_exists('car')){
    echo "Class doesn't exist";
}


$bmw = new Car();

echo $bmw->wheels;      // error: 'Accessing static property Car::$wheels as non static in.....'
                        // error: 'Undefined property: Car::$wheels in...'

// Below is how to call a specific static data within a class


?>