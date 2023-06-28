重点选用，重胆码，


随一，一号版，定胆随机，随一后出现重胆码，保留复选， 


核心，随一，一号版，定胆随机，随一后出现重胆码，保留复选，

<h1>


第一页,无限制版,随一,定胆随机


</h1>


​
<div ng-app="myApp" ng-controller="myCtrl">
    
    
  <p><h3>a_ng后区指定位数 : 
  

 <input   style="font-size:30px;color:#FF0000" type="text" name="a_ng[]" id="a1" value="2" ng-model="firstName">   


        <label for="fullname"><h1>2023年5月1，可指定位数传值：</label>
       
</p>
    
  <p><h3>_ng前区指定位数 : 
    
    
<input style="font-size:30px;color:#FF0000" type="text" name="b_ng[]" id

="b1" value="6" ng-model="lastName">

<br>

<br>

<h1>
    
input前区位数值: {{+lastName}}

<br>


<br>


input后区位数值: {{+firstName}}



<br>

<h1>
    
<br>



<?php




error_reporting(E_ALL^E_NOTICE^E_WARNING);     //php关闭错误报告






/*

注释――必须把php代码放到 form标签内

点击提交按钮不跳转


*/


echo "<br>";


echo "定胆随机后―――>随机的前区号码";


echo "<br>";

echo "<br>";


//定胆随机核心代码

//$a2=$_POST['c'];   //把c数组赋值给a2


$a2=array_rand($_POST['c'],1);

$str=explode(".",$a2);


print_r($str);


//$a2=$_POST['c'];   //把c数组赋值给a2

//创建a1数组

//用于比较数组得到差集


//得到数组差集前先创建数组赋值给$a1

//得出a1数组和c数组的差集


$a1=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33","34"=>"34","35"=>"35");


$result2=array_diff_assoc($a1,$str);


//得出a1数组和c数组的差集


//$arr4=$_POST['c'];  

//可以手工输入位数位数

$x=$_POST['b_ng'];  
$x2=join($x);   



//把c数组赋值给arr4


//$x=mt_rand(5,5);  //取随机数



$y=count($str);//获取C数组长度


$xy=$x2-$y;  //减法计算




$b5=mt_rand($xy,$xy); //设定位数值




 $arr5=array_rand($result2,$b5);  

 //在勾选号码中随机




//$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$he= array_merge($arr5,$str); 

//合并arr5和arr4数组


sort($he);      //按照顺序排列数组

$hejoin=join("+", $he);   


 //把数组转换成字符串
 
echo  $hejoin;


//输出结果集

echo "<br>";

echo "<br>";


echo "定胆随机后―――>随机的后区号码";

echo "<br>";


echo "<br>";


$arr2=$_POST['b'];   //把b数组赋值给arr2
 




$b1=mt_rand(2,2);  //设定位数值

echo "   ";


 $array_name=array_rand($arr2,$b1);   //在勾选号码中随机

$join2=join("    ", $array_name);


echo $join2;    //输出结果集



echo "<br>";

echo "<br>";




 ?>

























































































































































































































