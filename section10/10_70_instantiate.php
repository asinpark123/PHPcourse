<?php
class Car{
    function moveWheels(){
        echo "wheels move" . '<br>';
    }
}
if(!class_exists('car')){
    echo "Class doesn't exist";
}
if(!method_exists('car', 'moveWheels')){
    echo "Method doesn't exist";
}

// Create a 'Car' by instantiating the Car class by using 'new Car' and you can store it in a variable
$bmw = new Car();
$benz = new Car();
$audi = new Car();

// Below is how you call a method within the Car class
$bmw -> moveWheels();
$benz -> moveWheels();


?>