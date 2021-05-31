<?php
class Car{

    // Defining properties of a Car
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels(){
        echo "wheels move" . '<br>';
    }
    function moreWheels(){
        // $this calls the currently instantiated object/class
        $this ->wheels = 10;
    }
    function lessWheels(){
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
$truck = new Car();

// We can echo properties of an instantiated class
// notice how we don't put the $ sign in front of called properties
echo $bmw->wheels;
echo '<br>';

// We are able to change the value of properties of instatiated objects on the instance
$bmw->wheels = 8;
echo $bmw->wheels;
echo '<br>';

echo $truck->wheels = 10;
echo '<br>';

?>