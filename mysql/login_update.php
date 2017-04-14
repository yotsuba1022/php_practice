<?php include "functions.php"; ?>
<?php updateUser(); ?>
<?php include "includes/header.php" ?>

<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Update</h1>
        <form action="login_update.php" method="POST">
            <div class="form-group">
                <label for="id">User id</label>
                <br>
                <select name="id" id="">
                    <?php showAllIds(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
        </form>
    </div>
</div>

<?php include "includes/footer.php" ?>
