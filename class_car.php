<?php
    class Car {
        
        static $TYPE = "Ground Vehicle";
            
        // With private, the subclass should call the set method to change the value
        private $wheels;
        private $engine;
        // With protected, the subclass can modify the attr directly.
        protected $color;
        
        public function __construct() {
            $this -> wheels = 4;
            $this -> engine = 1;
            $this -> color = "Crystal Blue";
        }
        
        public function getType() {
            /*
                To access a static attribute, please use 
                
                CLASS_NAME::$STATIC_ATTR_NAME
                
                or
                
                $this::$STATIC_ATTR_NAME
                
                instead of $this -> ATTR_NAME
            */
            //return $this::$TYPE;
            return Car::$TYPE;
        }
        
        public function carStart() {
            echo "ZoomZoom~~~ <br>";
        }
        
        public function moveWheels() {
            echo "Wheels moves. <br>";
        }
    
        public function getWheels() {
            return $this -> wheels;
        }
    
        public function setWheels($numOfWheels) {
            $this -> wheels = $numOfWheels;
        }
        
        public function getColor() {
            return $this -> color;
        }
        
        public function setColor() {
            $this -> color = "White";
        }
        
    }
    
    // checkClass();

    $car = new Car();
    $tank = new Car();
    $car -> carStart();
    $car -> moveWheels();
    
    echo "The type of car is: " . Car::getType() . "<br>";

    echo "The car has " . $car -> getWheels() . " wheels<br>";

    $tank -> setWheels(16);
    echo "The tank has " . $tank -> getWheels() . " wheels<br>";

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
