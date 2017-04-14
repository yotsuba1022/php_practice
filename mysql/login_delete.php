<?php include "functions.php"; ?>
<?php deleteUser(); ?>
<?php include "includes/header.php" ?>

<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="POST">
            <div class="form-group">
                <label for="id">Choose the user id you want to delete:</label>
                <br>
                <select name="id" id="">
                    <?php showAllIds(); ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
    </div>
</div>

<?php include "includes/footer.php" ?>
