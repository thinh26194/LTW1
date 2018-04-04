<?php include('config.php') ?>	
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1 style="text-align: center;">Well come to User page.</h1>
        <h4>Danh Sách User</h4>
        <?php
        
            echo "username user: ".$users[1]['username'].'<br>';
            echo "password user: ".$users[1]['password'].'<br>';
            echo "type user: ".$users[1]['type'].'<br>';
        ?>
        
    </body>
</html>