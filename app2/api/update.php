<?php
//處理更新資料的請求
include_once "base.php";
$chk=$Stu->save($_POST);

echo ($chk>0)?'1':'0';

?>