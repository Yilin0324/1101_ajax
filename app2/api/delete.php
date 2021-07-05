<?php
//處理刪除資料的請求
include_once "base.php";

$chk=$Stu->del($_POST['id']);
if($chk>0)
    echo '1';

?>