<?php 
// 条件 分支 -if  -switch
// 关系运算符
/*
==, ===, !=, !==, <, >, <=, >=
*/
/* $num = 4;
if($num != "4")	
	echo "$num != 4";
else if($num > 4)
	echo "$num > 4";
else 
	echo "WTF!" */

# Nesting If 嵌套
/*	$num = 6;
	if($num > 4){
		if($num < 10){
			echo "$num > 4 & $num < 10";
		}
	}else{
		echo "whatever";
	} */

# 逻辑运算符
/*
    and &&  --> 左右两边都为真
	or ||  --> 左右两边一个为真
	xor 与或/亦或  --> 必须一边为真
*/  
	// $num = 3;
	// if($num > 4 xor $num > 10){
	// 		echo "$num > 4 & $num < 10";
	// }

	// $x = 0;
	// $y = 1;
	// $z = 2;
	// $result = $x || $z && $y;
	// echo $result;

# switch 
	$favColor = 5;
	switch ($favColor) {
		case '5': // if(favColor == 5)-->php中; if(favColor === 5)-->js中; 
			echo "最喜欢$favColor";
			break;	
		case '4':
			echo "最喜欢$favColor";
			break;
		case '3':
			echo "最喜欢$favColor";
			break;
		case '2':
			echo "最喜欢$favColor";
			break;
		default:
			echo "没有";
			break;
	}



?>
