<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        // The index is start from 0.
        $mixedList = array(10, 20, 30, 'qq', '<h1>Title</h1>');
        $numberList = array(23, 25, 100, 434);
    
        /*
        The following line will failed with the message: Array to string conversion
        */
        // echo $numberList;
    
        echo $numberList[0];
        echo "<br>";
    
        /* print_r means "print array, it's a built-in function of PHP"*/
        print_r($mixedList);
        
    ?>
</body>
</html>