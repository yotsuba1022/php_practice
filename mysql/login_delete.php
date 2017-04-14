<?php include "functions.php"; ?>
<?php
    deleteUser();
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
                <form action="login_delete.php" method="POST">
                    <div class="form-group">
                        <select name="id" id="">
                        <?php
                            showAllUsers();
                        ?>
                    </select>
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Delete">
                </form>
            </div>
        </div>
    </body>

    </html>
