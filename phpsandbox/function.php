<?php 
# function: 可被重复利用的代码块
// camel case: 驼峰命名法 -- myFunction
// pascle case: MyFunction
// lower case: my_function

// 定义函数
// function simpleFunction(){
// 	echo "hello";
// }

// 调用函数
// simpleFunction();

// 带参函数
// function sayHello($name='a'){
// 	echo "hello $name";
// }
// sayHello("b");
// sayHello("c");

// 返回值函数
// function addNumber($num1, $num2){
// return $num1 + $num2;
// }
// echo addNumber(5,2);

// 函数传引用
$myNum = 10;
function addFive($num){
	$num += 5;
}
addFive($myNum);
// &取地址符
function addTen(&$num){
	$num += 10;
}
addTen($myNum);
echo "value: $myNum<br>";
 ?>
