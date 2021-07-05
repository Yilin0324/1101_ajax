<?php
//處理查詢資料的請求
include_once 'base.php';

$classNum=$_GET['classNum'];
$students=$Stu->all(" where substring(`class_num`,1,3)='$classNum'") ;
echo json_encode($students);

?>