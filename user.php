<?php include('config.php') ?>	
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1 style="text-align: center;">Well come to User page.</h1>
                <form style="border: solid 1px #000; text-align: center;">
                    <h4 style="text-align: center;">Danh Sách User</h4>
                    
                    <?php
                    echo "Username user: " . $users[1]['username'] . '<br>';
                    echo "Password user: " . $users[1]['password'] . '<br>';
                    echo "Type user: " . $users[1]['type'] . '<br>';
                    ?>
                    <a href="index.php">Quay lai Index</a>&nbsp;
                    <a href="login.php">Quay lai login</a>
                </form>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>