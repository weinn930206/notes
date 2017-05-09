<?php 
// 创建一个数组
// $num = array();

// 用数组方法, 将内容添加到上面数组中
// array_push($num, "hello");
// echo $num[0];

// 创建无序数组,排序
// $num = array(8,3,5,6,4,1,7,2,9);
// sort($num);
// foreach ($num as $nums) {
// 	echo "$nums";
// }

// 创建关联数组,排序倒叙
// $num = array(
// 	"a"=>1,
// 	"b"=>1,
// 	"c"=>1,
// 	"d"=>1);
// ksort($num);
// print_r($num);
// 创建数组, 转字符串

// 字符串转数组
$string = "If from and to have different lengths, the extra characters in the longer of the two are ignored. The length of str will be the same as the return value's.";
$array = explode(" ", $string);
print_r($array);




 ?> 
 