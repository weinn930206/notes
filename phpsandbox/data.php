<?php 
// echo date("d/m/y");
// echo date("d.m-y");
// echo date("l");

// echo date("h:i:sp");
// 设置时区
// date_default_timezone_set("Asia/Shanghai");
// date_default_timezone_set("Etc/GMT-8");
// echo date("m-d-y");
// echo date("h:i:sa");

//时间戳
// $timestamp = mktime(07,00,12,1,24,1988);
// echo $timestamp;
// echo date("m-d-y h:i:sa",$timestamp);
#字符串转时间
$timestamp2 = strtotime("7:00pm March 24 2017");
$timestamp3 = strtotime("tommorrow");
$timestamp4 = strtotime("next Sunday");
$timestamp5 = strtotime("+2 Days");
echo date("m-d-y h:i:sa",$timestamp2);
echo date("m-d-y h:i:sa",$timestamp3);
echo date("m-d-y h:i:sa",$timestamp4);
echo date("m-d-y h:i:sa",$timestamp5);


 ?>