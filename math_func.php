<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        echo pow(2, 10) . "<br>";
        echo rand() . "<br>";
        // It means rand from 1 t0 1000.
        echo rand(1, 1000);
        br();
        echo sqrt(10000);
        br();
        echo ceil(5.8);
        br();
        echo floor(5.8);
        br();
        echo round(5.4);
        br();
        echo round(5.5);
        br();
    
        function br(){
            echo "<br>";
        }
    ?>
</body>

</html>
