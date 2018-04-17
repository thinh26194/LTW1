
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
            h3:hover {
                color: #CCC;
            }
            .header {
                background-color: #EEEEEE;
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
                            <li><a href="login.php">Đăng Nhập</a></li>
                            <li><a href="logout.php">Đăng Xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 detail">
                    <a href="#" onclick='document.getElementById("date").innerHTML = "Xin chào các bạn lớp LTW1";'><h3>Well Come!</h3></a>
                    <p id="date" style="font-size: 40px; font-weight: bold;"></p>
                </div>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"></script>
    </body>
</html>