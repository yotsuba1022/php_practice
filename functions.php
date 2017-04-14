<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        echo "Invoke the function:" . "<br>";
        greeting();
        echo "Done." . "<br>";
        greetingToSomeone("Carl");
        calculate(10, 23);
        echo "<br>";
    
        $result = calculate2(293, 439, 1042);
        echo "The result is: $result <br>";
    
        $num1 = 100;
        $num2 = 200;
        $num3 = 300;
        $result = calculate2($num1, $num2, $num3);
        echo "The result is: $result <br>";
    
        // Function without params.
        function greeting() {
            echo "I said yeah~" . "<br>";
        }
    
        // Function with param.
        function greetingToSomeone($name) {
            echo "Hello, $name!" . "<br>";
        }
    
        // Function with params.
        function calculate($num1, $num2) {
            echo $num1 + $num2 . "<br>";
        }
    
        // Function with params and return value.
        function calculate2($num1, $num2, $num3) {
            return $num1 + $num2 + $num3;
        }
    ?>
</body>

</html>
