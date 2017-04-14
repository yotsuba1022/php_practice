<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        $numbers = array(29, 20, 39, 193, 2, 12, 74);
        echo max($numbers);
        br();
        echo min($numbers);
        br();
        print_r($numbers);
        br();
        sort($numbers);
        br();
        print_r($numbers);
    
        function br() {
            echo "<br>";
        }
    ?>
</body>

</html>
