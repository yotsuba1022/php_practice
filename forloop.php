<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        // Normal for loop.
        for($i = 0; $i < 10; $i++) {
            echo "$i" . "<br>";
        }
        
        echo "<br>";
        
        // Foreach loop.
        $numbers = array(1, 2, 3, 4, 5);
        foreach($numbers as $number) {
            echo "$number" . "<br>";
        }
    ?>
</body>

</html>
