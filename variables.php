<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php 
        define("CONST_NUM", 999);
        $name = 'M';
        $number = 100;
        $number_with_decimal = 100.123;
        
        // The dot(.) symbol means concatenation.
        echo $name . " " . $number . " " . $number_with_decimal;
    
        // You can also asign html tag, img, etc, to a variable, one value at a time.
        $title = "<h1>TITLE</h1>";
        echo $title;
    
        echo "The constant value is: " . CONST_NUM . "<br>";
    ?>

</body>

</html>
