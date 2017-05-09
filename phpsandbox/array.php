<?php 
# array: 数组是存储多个数据的容器
/*
   下标数组
   关联数组
*/
#下标数组
   // $people = array("a","b","c");
   // echo $people[1];
   // $ids = array(23,25,88);
   // echo $ids[2];
   // $cars = ["toyota","honda","ford"];
   // $cars[3] = "bence";
   // $cars[] = "bmw";

   # 计算数组个数
   // echo count($cars);
   // print_r($cars); // 打印数组用 print_r

   # 万能输出方法
   // var_dump($cars);

# 关联数组
   $people = array("a"=>35, "b"=>30, "c"=>25);
   // echo $people["c"];

   $ids = [22=>"a", 23=>"b", 24=>"c"];
   // echo $ids[22];

   // 添加
   $ids[55] = "d";
   // echo $ids[55];
   // print_r($ids);
   // var_dump($people);

   // 如果关联的key值是字符串, 添加没有key值得数据, 自动从0下标开始分配
   // 如果关联的key值是数据, 添加没有key值得数据, 自动从前一个数据基础上加1

# 多维数组
   $cars = array(
   	array("Toyota",15,10),
   	array("Honda",20,10),
   	array("Ford",23,12),
   	);
   echo $cars[1][2];



 ?>