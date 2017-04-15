<?php include "db.php"; ?>
<?php
    function createUser() {
        global $connection;
        if(isset($_POST['submit'])) {
            // For preventing SQL injection.
            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            
            // For encrypt, please refer to http://php.net/manual/en/function.crypt.php
            $hashFormat = "$2y$10$";
            $salt = "rurumaomaoisverycuteruru";
            $hashFormatAndSalt = $hashFormat . $salt;
            $password = crypt($password, $hashFormatAndSalt);

            $create = "INSERT INTO users(username, password) ";
            $create .= "VALUES ('$username', '$password')";

            $result = mysqli_query($connection, $create);

            if(!$result) {
                die("Insert SQL command failed: " . mysqli_error($connection));
            } else {
                echo "User created.";
            }
        }
    }

    function showAllIds() {    
        global $connection;
        $query = "SELECT * FROM users";
        
        $allUsers = mysqli_query($connection, $query);
     
        if(!$allUsers) {
            die("Select SQL command failed: " . mysqli_error());
        }

        while($user = mysqli_fetch_assoc($allUsers)) {
            $id = $user['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function showAllUsers() {
        global $connection;
        $query = "SELECT * FROM users";
     
        $allUsers = mysqli_query($connection, $query);

        if(!$allUsers) {
           die("Select SQL command failed: " . mysqli_error($connection));
        }
        
        // You can also user mysqli_fetch_row() to return a normal array.
        while($user = mysqli_fetch_assoc($allUsers)) {
            echo "<pre>";
                print_r($user);
            echo "</pre>";
        }
    }

    function updateUser() {
        global $connection;
        if(isset($_POST['submit'])) {
            $id = $_POST['id'];
            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);

            $update = "UPDATE users SET ";
            $update .= "username = '$username', ";
            $update .= "password = '$password' ";
            $update .= "WHERE id = $id ";

            $result = mysqli_query($connection, $update);
            if(!$result) {
                die("Update command failed: " . mysqli_error($connection));
            } else {
                echo "User updated.";
            }
        }
    }

    function deleteUser() {
        global $connection;
        if(isset($_POST['submit'])) {
            $id = $_POST['id'];

            $delete = "DELETE FROM users ";
            $delete .= "WHERE id = $id ";

            $result = mysqli_query($connection, $delete);
            if(!$result) {
                die("Delete command failed: " . mysqli_error($connection));
            } else {
                echo "User deleted.";
            }
        }
    }
?>
