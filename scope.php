<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        $num = 100;
    
        echo "num $num <br>";
        convert($num);
        echo "num $num <br>";
        convertGlobal();
        echo "num $num after convert <br>";
    
        function convert($out) {
            echo "num from outside: $out <br>";
            $num = 200;
            echo "Inner num: $num <br>"; 
        }
    
        function convertGlobal() {
            // With keyword "global", you can specify the global variable in function.
            global $num;
            $num = 999;
        }
    ?>
</body>

</html>
