<?php
// Static data persists within the class not the instance of a class
// We must specify which class the static variable belongs to in order to access its data
// We don't need to create an instance to access the static variable, as long as we call it correctly we can use it where ever we want
class Car{
    // use the keyword 'static' to create a static variable
    static $wheels = 4;         // this is now a static variable
    var $hood = 1;   
    var $engine = 1;   
    var $doors = 4;         

    // using static data in a method
    function maxWheels(){
        Car::$wheels = 10;      // this accesses the static variable $wheels and sets a new value
    }                           // you can only call this method using Car::maxWheels();
    function moveWheels(){
        echo "wheels move" . '<br>';
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

// Below is how to access a static data from class Car
echo Car::$wheels;

// Below is how to call a method using static data from class Car
Car::maxWheels();

echo Car::$wheels;      // will show a changed value

// Calling static method on an instantiated object
$bmw->maxWheels();

// Wrong way to call a static variable
echo $bmw->wheels;      // error: 'Accessing static property Car::$wheels as non static in.....'
                        // error: 'Undefined property: Car::$wheels in...'
                        // Only the value of $wheels in class will change if you call the maxWheels() method


?>