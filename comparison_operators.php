<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h2>Comparison Operators</h2>
    <pre>
          equal ==
          identical ===
          compare > <  >= <= <>
          not equal !=
          not identical !==

    </pre>

    <h2>Logical Operators</h2>
    <pre>
         And &&
         Or  ||
         Not  !
    </pre>
    <?php
        /*
            identical(===) mean the data type and data value are all equals,
            identical not (!==) is the opposite of (===).
        */
        if(4 === "4") {
            // It's false.
            echo "4 === \"4\" is true";
        } else if (4 === 4) {
            echo "4 === 4 is true";
        }
    
        echo "<br>";
        if(4 == "4") {
            echo "4 == \"4\" is true";
        }
        
        echo "<br>";
        if(3 !== "3") {
            echo "3 !== \"3\"";
        }
    ?>
</body>

</html>
