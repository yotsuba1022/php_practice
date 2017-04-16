<?php
    class Car {
        
        var $wheels;
        var $engine;
        var $color;
        
        function __construct() {
            $this -> wheels = 4;
            $this -> engine = 1;
            $this -> color = "Crystal Blue";
        }
        
        function carStart() {
            echo "ZoomZoom~~~ <br>";
        }
        
        function moveWheels() {
            echo "Wheels moves. <br>";
        }
        
        function changeWheels($numOfWheels) {
            $this -> wheels = $numOfWheels;
        }
    }
    
    // checkClass();

    $car = new Car();
    $tank = new Car();
    $car -> carStart();
    $car -> moveWheels();
    
    echo "The car has " . $car -> wheels . " wheels<br>";

    $tank -> changeWheels(16);
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
