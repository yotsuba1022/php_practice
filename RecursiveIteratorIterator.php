<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        $leavesOnlyObjs = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('/Applications/XAMPP/htdocs/practice/mysql'), RecursiveIteratorIterator::LEAVES_ONLY);
    
        $selfFirstObjs = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('/Applications/XAMPP/htdocs/practice/mysql'), RecursiveIteratorIterator::SELF_FIRST);
    
        $childFirstObjs = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('/Applications/XAMPP/htdocs/practice/mysql'), RecursiveIteratorIterator::CHILD_FIRST);
    
        print('---------- LEAVES_ONLY -----------<br>');
        foreach($leavesOnlyObjs as $name => $obj) {
            print($name . " : " . $obj . "<br>");
        }
        print('---------- LEAVES_ONLY -----------<br>');
    
        print('---------- SELF_FIRST -----------<br>');
        foreach($selfFirstObjs as $name => $obj) {
            print($name . " : " . $obj . "<br>");
        }
        print('---------- SELF_FIRST -----------<br>');
    
        print('---------- CHILD_FIRST -----------<br>');
        foreach($childFirstObjs as $name => $obj) {
            print($name . " : " . $obj . "<br>");
        }
        print('---------- CHILD_FIRST -----------<br>');
    ?>
</body>

</html>
