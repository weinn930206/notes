<?php 
# 简写的方法
$loggedIn = true;
// if($loggedIn){
// 	echo "U r logged in";
// }else{
// 	echo "U r NOT logged in";
// }

// echo ($loggedIn) ? "U r logged in" : "U r NOT logged in";

// $isRegistered = ($loggedIn === true) ? true : false ;
// echo $isRegistered;

// 三目嵌套
// $age = 7;
// $score = 12;
// echo "分数:" . ($score < 10 ? ($age > 10 ? '中等1' : '优等') : ($age > 10 ? '差等' : '中等2'));
$arr = [1,2,3,4,5];
 ?>
 <!-- html & php 混编 -->
<!--  <div>
 	<?php if ($loggedIn) { ?>
 	<h1>welcome</h1>	
 	<?php  }else{ ?>
 	<h1>goodbye</h1>
 	<?php } ?>
 </div> -->

 <!-- 更好的写法 -->
 <div>
 	<?php if($loggedIn):?>
       <h1>welcome</h1>	
    <?php else: ?>
       <h1>goodbye</h1>	
 	<?php endif; ?>
 </div>

 <!-- 遍历数组 -->
<ul>
	<?php foreach ($arr as $value) :?>
	<?php echo $value?>
	<?php endforeach; ?>
</ul>
<ul>
	<?php for ($i=0; $i < count($arr); $i++) : ?>
	<?php echo $arr[$i] ?>
	<?php endfor; ?>
</ul>






