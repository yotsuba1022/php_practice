<?php     
     $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
     
     if($connection) {
         echo "Connected to MySQL successfully.";
     } else {
         die("Could not connect to database.");
     }
     
     $query = "SELECT * FROM users";
     
     $result = mysqli_query($connection, $query);
     
     if(!$result) {
         die("Insert SQL command failed: " . mysqli_error());
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-xs-6">
            <?php
                // You can also user mysqli_fetch_row() to return a normal array.
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <pre>
                  <?php
                   print_r($rows);
                   ?> 
                </pre
            <?php
               } 
            ?>
        </div>
    </div>
</body>

</html>
