<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        $num = 1;
        while($num < 10) {
            echo $num . "<br>";
            $num++;
        }
    
        echo "After the while loop, \$num is: " . $num;
    ?>
</body>

</html>
