<?php
session_start();
if (isset($_POST['sesname'])) {
    $_SESSION['username'] = $_POST['user'];
}

// Xóa session name
//unset($_SESSION['name']);
  
// Xóa hết session
//session_destroy(); 

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST">
            <h4>Username: </h4>
            <input type="text" name="user" value="<?php echo isset($_POST['user']) ? $_POST['user'] : ''  ?>">
            <input type="submit" name="sesname" value="Save session">
        </form>
        <h3>
            <?php
            if (isset($_SESSION['username'])) {
                echo "Username: " . $_SESSION['username'];
            }
            ?>
        </h3>
    </body>
</html>

