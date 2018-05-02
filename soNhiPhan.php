<?php

?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST">
                        <input type="text" name="input" placeholder="Input now" value="<?php echo !empty($_POST['input'])? $_POST['input']: "" ?>">
                        <input type="submit" value="Nhị phân">
                    </form>

                    <?php if (!empty($_POST['input'])):?>
                        <?php for($i=0; $_POST['input']>0; $i++): ?>
                            <?php $mang [$i] = $_POST['input']%2; ?>
                            <?php $_POST['input'] = $_POST['input']/2; ?>
                        <?php endfor; ?>
                        
                    
                        <?php for($i=$i ;$i>=0; $i--): ?>
                            <?php echo $mang[$i]; ?>
                        <?php endfor; ?>
                    <?php else: ?>
                    <?php echo "Vui long nhap gia tri!" ?>
                    <?php endif; ?>
                    
                    
                </div>
            </div>
        </div>
        <script src="https:maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"></script>
    </body>
</html>