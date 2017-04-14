<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        $numbers = array(1, 2, 3, 4, 5);
    
        // This will cause "Undefined offset"
        // echo $numbers[20];

        echo $numbers[2] . "<br>";
    
        $names = array('Edwin', 'Carl', 'Ruru');
        $names_assoc = array("1st" => 'Edwin', "2" => 'Carl', "3" => 'Ruru', 'K');
        print_r($names);
        echo "<br>";
        print_r($names_assoc);
        echo "<br>";
        echo $names_assoc['1st'];
        echo "<br>";
        echo $names_assoc['4'];
    ?>
</body>
</html>