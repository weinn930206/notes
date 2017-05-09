<?php 
# 循环: 根据某种条件重复执行某段代码
// for, while, do...while, foreach  
// for ($i=0; $i < 10; $i++) { 
// 	echo "$i<br>";
// }
$i = 0;
// while ($i < 10) {
// 	echo "$i<br>";
// 	$i++;
// }
// 知道循环次数用for, 不知道用while,

// do{
// 	echo "$i<br>";
// 	$i++;
// }
// while ($i < 10);

// $people = ["a", "b", "c"];
// foreach ($people as $person) {
//  	echo "$person";
//  } 
// $people = [
// "a" => "1",
// "b" => "2",
// "c" => "3",
// "d" => "4"
// ];
// foreach ($people as $person => $num) {
// 	echo "$person:$num";
// }

/* 1~100{
	7的倍数;
	个位为7;
	十位为7;
	个位或十位都不为7;
} */

// for ($i=1; $i < 100; $i++) { 
// 	if($i*7<100){
// 		echo 7*$i;
// 	}
// }

// $i = 1;
// while ( $i * 7< 100) {
// 	echo $i*7;
// 	$i++;
// }

// for($i=1; $i < 100; $i++){
// 	$ge = $i % 10;
// 	if($ge == 7){
// 		echo $i;
// 	}
// }

// for($i = 1; $i < 100; $i++){
// 	$shi = intval($i%100/10) ;
// 	if($shi == 7){
// 		echo $i;
// 	}
// }

for ($i=1; $i < 100; $i++) { 
	$ge = $i % 10;
	$shi = intval(($i % 100) / 10);
	 if($ge != 7 && $shi != 7){
		echo $i;
	}
}













 ?>
