<?php require("class_car.php"); ?>
<?php    
    class Toyota86 extends Car { 
        public function __construct() {
            parent::__construct();
            $this -> color = "Red";
            parent::setWheels(6);
        }
    } 

    echo "<br>For toyota 86 <br>";
    $car_86 = new Toyota86();
    $car_86 -> carStart();
    echo "The color is: " . $car_86 -> getColor() . "<br>";
    echo "86 has " . $car_86 -> getWheels() . " wheels<br>";
    echo "86 is a type of: " . Toyota86::$TYPE;
?>
