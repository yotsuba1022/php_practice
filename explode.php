<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        /*
        explode — Split a string by string
        
        array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )
        
        If limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of string.
        
        If the limit parameter is negative, all components except the last -limit are returned.
        
        If the limit parameter is zero, then this is treated as 1.
        */
        $fooStr = "foo1 foo2 foo3 foo4 foo5 foo6 foo7 foo8 foo9 foo10";
        $foos = explode(" ", $fooStr);
        foreach($foos as $foo) {
            echo "$foo <br>";
        }
    
        echo "<br>";
        $bars = explode(" ", $fooStr, 3);
        foreach($bars as $bar) {
            echo "$bar <br>";
        }
    
        echo "<br>";
        $joys = explode(" ", $fooStr, -3);
        foreach($joys as $joy) {
            echo "$joy <br>";
        }
    ?>
</body>

</html>
