<?php

include("msg.php");
header('Access-Control-Allow-Origin: *'); 
$arr = array('text' => $text);


echo json_encode($arr);
?>

