<?php
//處理新增資料的請求
include_once "base.php";

$chk=$Stu->save($_POST);
if($chk>0){
    echo '1';
}

?>