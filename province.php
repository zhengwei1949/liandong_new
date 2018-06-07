<?php
header('content-type:text/html;charset=utf-8');
include_once './mysql.php';
$sql = "select * from hat_province";
$res = mysql_query($sql);
// var_dump($res);
$arr = [];
while($row = mysql_fetch_assoc($res)){
    $arr[] = $row;//相当于js中的push
}
// print_r($arr);
echo json_encode($arr);
//分析数据库表特点