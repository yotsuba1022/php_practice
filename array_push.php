<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        // array_push — Push one or more elements onto the end of array
        $stack = array("orange", "banana");
        array_push($stack, "apple", "rasperberry");
        array_push($stack, "ruru");
        print_r($stack);
    
        // array_pop - Pop the element off the end of array
        array_pop($stack);
        print('<br>');
        print_r($stack);
    
        // array_shift — Shift an element off the beginning of array
        array_shift($stack);
        print('<br>');
        print_r($stack);
    
        // array_unshift — Prepend one or more elements to the beginning of an array
        array_unshift($stack, "yoooo", "gggggggg");
        print('<br>');
        print_r($stack);
    
        // $array[] = $x, this can also add elements into the array
        $stack[] = 'appendDirectly';
        $stack[] = 'Tail';
        print('<br>');
        print_r($stack);
    ?>
</body>

</html>
