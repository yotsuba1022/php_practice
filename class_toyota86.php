<?php require("class_car.php"); ?>
<?php    
    class Toyota86 extends Car { 
        var $color = "White";
    } 
    echo "<br>For toyota 86 <br>";
    $car_86 = new Toyota86();
    $car_86 -> carStart();
    echo "The color is: " . $car_86 -> color . "<br>";
?>
