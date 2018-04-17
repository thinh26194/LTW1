<?php include('config.php') ?>	
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
                color: #000;
            }

            .header {
                background-color: #EEEEEE;
            }
            .abc {
                border-top: 1px solid #999;
            }
            .detail{
                border: 1px solid #000;
            }
            h3 {
                color: #999;
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
                        <ul>
                            <li><a href="logout.php">Đăng Xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 detail">

                    <h3>Well come to User page.</h3>
                    <form>
                        <h4>Danh Sách User</h4>
                        <div class="col-md-6 abc">
                            <p>Name user :</p>
                        </div>
                        <div class="col-md-6 abc">
                            <p>
                                <?php
                                echo $users[1]['username'] . '<br>';
                                ?>
                            </p>
                        </div>
                        <div class="col-md-6 abc">
                            <p>Pass user :</p>
                        </div>
                        <div class="col-md-6 abc">
                            <p>
                                <?php
                                echo $users[1]['password'] . '<br>';
                                ?>
                            </p>
                        </div>
                        <div class="col-md-6 abc">
                            <p>Type user :</p>
                        </div>
                        <div class="col-md-6 abc">
                            <p>
                                <?php
                                echo $users[1]['type'] . '<br>';
                                ?>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>