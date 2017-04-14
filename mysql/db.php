<?php
    // Please also refer to the diff between mysqli_connect and mysql_connect.
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
     if(!$connection) {
         die("Could not connect to database.");
     }
?>
