<?php

if(empty($_POST['hoten'])){
    echo "please fill Ho va Ten";
}
 else {
     echo "Xin chao ".$_POST['hoten'];
}