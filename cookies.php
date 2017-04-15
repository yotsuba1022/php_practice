<?php

$cookieName = 'cookieName';
$cookieValue = '3jd93rj20ej9jdj32';
// time() means the seconds from 1970 to now, and 60*60*24*7 means one week.
$expiration = time() + (60*60*24*7);

setcookie($cookieName, $cookieValue, $expiration);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>

    <body>
        <?php
    
    ?>
    </body>

    </html>
