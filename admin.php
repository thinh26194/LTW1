<?php include('config.php') ?>	
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1 style="text-align: center;">Well come to Admin page.</h1>
        <h4>Danh Sách Admin</h4>
        <?php
            echo "username admin: ".$users[0]['username'].'<br>';
            echo "password admin: ".$users[0]['password'].'<br>';
            echo "type admin: ".$users[0]['type'].'<br>'.'<br>';
            
            echo "username user: ".$users[1]['username'].'<br>';
            echo "password user: ".$users[1]['password'].'<br>';
            echo "type user: ".$users[1]['type'].'<br>';
        ?>
    </body>
</html>