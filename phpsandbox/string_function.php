<?php 
# 处理字符串的函数
// 返回字符串的一部分
//               要截取的字符串,开始下标,结束下标(包括)
// $output = substr("Hello", 1,2);
//                  字符串,从后面数第一个
// $output = substr("Hello", -1);
// 返回字符串长度
// $output = strlen("Hello");

// 查找字符串中第一次出现不区分大小写的子字符串的位置
//               需要查找的字符串,被查的字符串
// $output = strpos("hello world", "l");// 返回第二个参数的下标
// 查找字符串中最后出现不区分大小写的子字符串的位置
//$output = strrpos("hello world", "l");// 返回第二个参数的下标
//echo $output;
// $text = " hello world ";
// var_dump($text);
// $trimed = trim($text);
// var_dump($trimed);

// 转换大小写
// $text = strtoupper("hello world");
// $text = strtolower("hello World");

// 每个首字符大写
// $text = ucwords("hello world");

// 替换字符
// $text = "hello world";
// $output = str_replace("o", "a", $text);
// echo $output;

// 判断是否是字符串 -- 返回1为是;
// $val = 22;
// $output = is_string($val);
// echo $output;

// 过滤数组中非字符串的值
// $value = array(true,false,null,'abc',33,'33',22.4,'22.4',0,'0');
// foreach ($value as $val) {
// 	if (is_string($val)) {
// 		echo "$val";
// 	}
// }
// 压缩字符串
$string = "If from and to have different lengths, the extra characters in the longer of the two are ignored. The length of str will be the same as the return value's.";
$compressed = gzcompress($string);
$original = gzuncompress($compressed);
echo $compressed;
echo $original;
// 









 ?>