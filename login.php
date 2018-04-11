<?php
include('config.php');

session_start();
if (!empty($_SESSION["x"])) {
    if ($_SESSION["x"] == 2) {
        header('Location: user.php');
    } elseif ($_SESSION["x"] == 1) {
        header('Location: admin.php');
    } else {
        header('Location: login.php');
    }
}
?>	
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
    </head>
    <body>
        <form style="text-align: center;" method="POST">
            <h3>Trang Đăng Nhâp</h3>
            ID: <input type="text" name="iduser" value="<?php echo isset($_POST['iduser']) ? $_POST['iduser'] : '' ?>">
            Password: <input type="text" name="passuser" value="<?php echo isset($_POST['passuser']) ? $_POST['passuser'] : '' ?>"><br/><br/>   
            <input type="submit" name="login" value="Đăng nhập"><br/><br/>


            <?php
            if (!empty($_POST['iduser']) && !empty($_POST['passuser'])) {
                if ($_POST['iduser'] === 'admin' && $_POST['passuser'] === 'admin') {

                    foreach ($users as $value) {
                        if ($value['username'] === $_POST['iduser'] && $value['password'] === $_POST['passuser']) {
                            session_start();
                            $_SESSION["x"] = 1;
                            header('Location: admin.php');
                        }
                    }
                } else if ($_POST['iduser'] === 'user' && $_POST['passuser'] === 'user') {

                    foreach ($users as $value) {
                        if ($value['username'] === $_POST['iduser'] && $value['password'] === $_POST['passuser']) {
                            $_SESSION["x"] = 2;
                            header('Location: user.php');
                        }
                    }
                } else {
                    echo 'Sai ID hoặc Password';
                    $_SESSION["x"] = 0;
                }
            }
            ?>
        </form>
    </body>
</html>
