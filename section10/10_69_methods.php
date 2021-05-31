<?php
class Car{
    // Defining methods in a class
    function moveWheels(){
        echo "wheels move";
    }

}

// use class_exists(CLASS); to check if class exists
if(!class_exists('car')){
    echo "Class doesn't exist";
}
// use method_exists(CLASS, METHOD); to check if a method exists within the class
if(!method_exists('car', 'moveWheels')){
    echo "Method doesn't exist";
}

?>