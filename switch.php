<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        $num = 101;
    
        switch($num) {
            case 34:
                echo "it is 34";
                break;
            case 37:
                echo "it is 37";
                break;
            case 10:
                echo "it is 10";
                break;
            case 200:
                echo "it is 200";
                break;
            default :
                echo "Nothing matched.";
                break;
        }
    ?>
</body>

</html>
