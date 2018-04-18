<?php
include('config.php');

session_start();
if (!empty($_SESSION["x"])) {
    if ($_SESSION["x"] == 2) {
        header('Location: user.php');
    } elseif ($_SESSION["x"] == 1) {
        header('Location: user.php');
    } else {
        header('Location: login.php');
    }
}
?>	
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <style>
            a {
                color: #FF0000;
            }
            h1 a:hover {
                text-decoration: none;
                color: #FF9900;
            }
            ul {
                float: right;
            }
            li {
                float: left;
                margin: 20px 10px;
                list-style: none;
            }
            ul li a:hover{
                text-decoration: none;
                color: #FF9900;
            }
            .detail a:hover {
                text-decoration: none;
                color: #00CCFF;
            }
            .detail {
                text-align: center;  
            }
            h3 {
                color: #999;
            }

            .header {
                background-color: #EEEEEE;
            }
            input {
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 header">
                    <div class="col-md-6">
                        <h1><a href="index.php">TDC</a></h1>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 detail">
                    <h3>Login Page</h3>
                </div>
            </div>
        </div>
        <form style="text-align: center;" method="POST">
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
                            header('Location: user.php');
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
                    echo 'False ID or Password';
                    $_SESSION["x"] = 0;
                }
            } else {
                echo 'Please fill in ID or Password';
            }
            ?>

            
        </form>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"></script>
    </body>
</html>
