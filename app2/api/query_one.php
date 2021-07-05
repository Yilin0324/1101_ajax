<?php
include_once "base.php";

$stu=$Stu->find($_GET['id']);

echo json_encode($stu);
?>