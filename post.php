<?php
    if(isset($_POST['submit'])) {
        echo $_POST['username'];
    }
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>

    <body>
        <form action="post.php" method="POST">
            <input type="text" name="username">
            <input type="submit" name="submit" value="SUBMIT">
        </form>
    </body>

    </html>
