<?php
    class Car {
        
        var $wheels = 4;
        var $engine = 1;
        var $color = "Crystal Blue";
        
        function carStart() {
            echo "ZoomZoom~~~ <br>";
        }
        
        function moveWheels() {
            echo "Wheels moves. <br>";
        }
        
        function changeWheels() {
            $this -> wheels = 16;
        }
    }
    
    // checkClass();

    $car = new Car();
    $tank = new Car();
    $car -> carStart();
    $car -> moveWheels();
    
    echo "The car has " . $car -> wheels . " wheels<br>";

    $tank -> changeWheels();
    echo "The tank has " . $tank -> wheels . " wheels<br>";
    
    function checkClass() {
        if(class_exists("Car")) {
            echo "Class Car exists <br>";
            if(method_exists("Car", "CarStart")) {
                echo "CarStart method exists <br>";
            } 
        } else {
            echo "Class Car doesn't exists <br>";
        }
    }
    
?>
