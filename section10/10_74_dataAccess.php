<?php
// there are different types of properties which defines the variables' scope of access

class Car{

    public $wheels = 4;     // public - available to the whole program
    protected $hood = 1;    // protected - only available to this class or extended classes or subclasses
    private $engine = 1;    // private - only available within this class
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

class Semi extends Car{
    function showProperty2(){
        echo $this->hood . '<br>';
    }
}

$bmw = new Car();
$semi = new Semi();

echo $bmw->wheels;          // Works

$bmw->showProperty();       // Works because the method was created inside the class, it's within the scope of a protected variable

$semi->showProperty2();     // Works, protected variables are still accessible within the scope of an extended class

echo $semi->engine;         // Will catch an error: 'Undefined property: Semi::$engine'

echo $bmw->hood;            // Will catch an error: 'Uncaught Error: Cannot access protected property Car...'

?>