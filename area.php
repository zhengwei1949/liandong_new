<?php 
header('content-type:text/html;charset=utf-8');
$city_id = $_GET['city_id'];
include_once './mysql.php';
$sql = "select * from hat_area where father = $city_id";
$res = mysql_query($sql);
$arr = [];
while ($row = mysql_fetch_assoc($res)) {
    $arr[] = $row;//相当于js中的push
}
// print_r($arr);
echo json_encode($arr);