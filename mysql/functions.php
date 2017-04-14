<?php include "db.php"; ?>
<?php
    function showAllUsers() {    
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
     
        if(!$result) {
         die("Insert SQL command failed: " . mysqli_error());
        }

        while($rows = mysqli_fetch_assoc($result)) {
            $id = $rows['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function updateUser() {
        global $connection;
        if(isset($_POST['submit'])) {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $update = "UPDATE users SET ";
            $update .= "username = '$username', ";
            $update .= "password = '$password' ";
            $update .= "WHERE id = $id ";

            $result = mysqli_query($connection, $update);
            if(!$result) {
                die("Update command failed: " . mysqli_error($connection));
            }
        }
    }
?>
