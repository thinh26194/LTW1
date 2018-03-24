<?php

//$kv = $_POST['khaivi'];
//
//
//$mc = $_POST['monchinh'];
//
//
//$tm = $_POST['trangmieng'];
//if (empty($_POST['submit'])) {
//    echo 'Xin hãy chọn món';
//} else {
//    echo 'Món khai vị:';
//    foreach ($_POST['khaivi'] as $valuekv) {
//        echo $valuekv;
//    }
//    echo 'Món chính:';
//    foreach ($_POST['monchinh'] as $valuemc) {
//        echo $valuemc;
//    }
//    echo 'Món tráng miệng:';
//    foreach ($_POST['trangmieng'] as $valuetm) {
//        echo $valuetm;
//    }
//}
if (empty($_POST['khaivi'])) {
    echo 'Chọn món khai vi' . '<br/>';
} else {
    echo 'Món khai vị: ' . '<br/>';
    foreach ($_POST['khaivi'] as $valuekv) {
        echo $valuekv . '<br/>';
    }
}
echo '<br/>';
if (empty($_POST['monchinh'])) {
    echo 'Chọn món chính' . '<br/>';
} else {
    echo 'Món chính: ' . '<br/>';
    foreach ($_POST['monchinh'] as $valuekv) {
        echo $valuekv . '<br/>';
    }
}
echo '<br/>';
if (empty($_POST['trangmieng'])) {
    echo 'Chọn món tráng miệng' . '<br/>';
} else {
    echo 'Món tráng miệng: ' . '<br/>';
    foreach ($_POST['trangmieng'] as $valuekv) {
        echo $valuekv . '<br/>';
    }
}
?>