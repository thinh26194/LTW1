<?php ?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <style>

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <button id="b" onclick="B oo()">Button A</button>
                    <p id="a">Hello</p>
                    

                </div>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"></script>
        <script>
            function Foo() {
                            document.getElementById("a").innerHTML = "<?php
                            for($i = 0;$i < 10; $i++){ 
                                echo $i;
                            } 
//                            $class = array(a,b,c,d,e);
//                            foreach ($class as $value){
//                                echo $value;
//                            }
                            ?>";
                        }
            function Boo(){
                document.getElementById("b").innerHTML = "Clicked A";
                document.getElementById("b").onclick = Foo();
            }
        </script>
        
    </body>
</html>