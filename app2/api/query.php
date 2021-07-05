<?php
//處理查詢資料的請求
include_once 'base.php';

$classNum=$_GET['classNum'];
$students=$Stu->all(" where substring(`class_num`,1,3)='$classNum'") ;
//echo json_encode($students);
$new=[];

foreach ($students as $key => $value) {
    $new[]=['id'=>$value['id'],
            'nat_id'=>$value['nat_id'],
            'class_num'=>$value['class_num'],
            'dept'=>$value['dept'],
            'name'=>$value['name']
    ];
}
echo json_encode($new);

/* foreach ($students as $key => $value) {
    echo "<tr>";
    echo "<td class='id-num'>{$value['id']}</td>";
    echo "<td>{$value['nat_id']}</td>";
    echo "<td>{$value['class_num']}</td>";
    echo "<td>{$value['name']}</td>";
    echo "<td>{$value['dept']}</td>";
    echo "</tr>";
} */


?>