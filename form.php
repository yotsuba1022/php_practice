<?php
    // The submit here stands for the value of name attribute of the submit type input.
    if(isset($_POST['submit'])) {
        $names = array("root", "yotsuba1022", "ruru");
        $minLength = 3;
        $maximun = 20;
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(strlen($username) < $minLength || strlen($username) > $maximun) {
            echo "Username has to be longer than 5 characters and less than 10 characters.";
        }
        
        if(!in_array($username, $names)) {
            echo "Invalid username.";
        } else {
            echo "Welcome.";
        }
    }
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>

    <body>
        <form action="form.php" method="POST">
            <input type="text" name="username" placeholder="User name">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <input type="submit" name="submit">
        </form>
    </body>

    </html>
