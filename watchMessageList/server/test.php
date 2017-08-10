<?php

include("num.php");
header('Access-Control-Allow-Origin: *'); 
$arr[0] = array('name' => 9, 'age' => 2);
$arr[1] = array('name' => 8, 'age' => 4);
$arr[2] = array('name' => 7, 'age' => 4);
$arr[3] = array('name' => 6, 'age' => 88888);
$arr[4] = array('name' => 4, 'age' => 88);
$arr[5] = array('name' => 9, 'age' => 8);
$arr[6] = array('name' => 9, 'age' => 8);
$arr[7] = array('name' => $num, 'age' => 9);


echo json_encode($arr);
?>

