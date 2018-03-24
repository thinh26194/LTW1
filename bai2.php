
<html>
    
    <meta charset="UTF-8">
    <form method="POST">
    <input type="search" name="timkiem" placeholder="Từ khóa...">
    <input type="submit">
    <br/>
    </form>
</html>

<?php
if(empty($_POST['timkiem'])){
    echo "Nhập từ khóa cần tìm!"."<br/>";
}
 else {
    echo 'Kết quả tìm kiếm với từ khóa: '.$_POST['timkiem'];
}

?>