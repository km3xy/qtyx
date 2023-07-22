<?php 

error_reporting(E_ALL^E_NOTICE^E_WARNING);      // php关闭错误报告

echo "<br>";

echo "打印出随机―――——输入框的随机号码";



echo "<br>";





$join=$_POST['a']; 



$jn=join("  +  ", $join);




print_r($jn);

//直接打印出来不去重



echo  "<br>";

echo  "<hr>";

echo  "<br>";




echo  "<br>";


$heqp=array_unique($join); 

//先去重，然后再升序排列


//去重后才能升序排列


sort($heqp);



//去重后才能升序排列


print_r($heqp);


//去重升序排列后打印


echo  "<br>";

echo  "<hr>";

echo  "<br>";


//把数组转换成字符串



$join5=join("  +  ", $heqp);

//把数组转换成字符串

echo $join5;



echo  "<br>";

echo  "<hr>";

echo  "<br>";




//input text 传过来的是值

//array_rand  随机的是键名


//把值变成键


//$result=array_flip($a);//交换数组的键和值


echo "<br>";


echo "打印随机后――――—随机后的前区号码";


echo "<br>";


echo "位数";


$aa=$_POST["a"];

$heqp=array_unique($aa); 

$ty=count($aa);



$ae=array("Peter"=>$ty);
//

$xyy=join($ae);


echo $xyy;



echo  "<br>";

echo  "<hr>";

echo  "<br>";



//


$a=$_POST["a"];

//["a"]是数组名称



$heqp=array_unique($a); 



$result=array_flip($heqp);//交换数组的键和值




//可以手工输入位数位数



$x=$_POST['cc'];  



$x2=join($x);   



$array_name5=array_rand($result,$x2);   

sort($array_name5);



$join5=join("  +  ", $array_name5);


echo $join5;







//         以下是后区代码



$b=$_POST["b"];



$result2=array_flip($b);//交换数组的键和值

//input text 传过来的是值

//array_rand  随机的是键名


//把值变成键


//$result=array_flip($a);//交换数组的键和值



 $array_name2=array_rand($result2,2);   


sort($array_name2);

$join2=join("  +  ", $array_name2);


echo $join2;


//分隔区




echo "<hr>";


$a=$_POST["aa"];

//["a"]是数组名称



$result=array_flip($a);//交换数组的键和值

//input text 传过来的是值

//array_rand  随机的是键名


//把值变成键


//$result=array_flip($a);//交换数组的键和值


echo "<br>";




 $array_name5=array_rand($result,1);   


sort($array_name5);


$age=array("Peter"=>$array_name5);
//

$xy=join("",$age);


//echo $xy;




//         以下是后区代码



$b=$_POST["bb"];



$result2=array_flip($b);//交换数组的键和值

//input text 传过来的是值

//array_rand  随机的是键名


//把值变成键


//$result=array_flip($a);//交换数组的键和值






echo "打印随机后――――—起点与尾巴";





echo "<br>";


 $array_name2=array_rand($result2,1);   
 
 //array_rand()随机出1个是字符串，
 
 //array_rand()随机出2个是数组对，
 


sort($array_name2);


$age2=array("Peter"=>$array_name2);
//把单个字符串转换成单个数组


$y2=join("",$age2);

//把单个数组转换成单个字符串


//echo $y2;


echo  "<br>";


if ($xy<$y2)
{
    $s=mt_rand($xy,$y2);
}
else
{
    $s=mt_rand($y2,$xy);


  }


//在两单个字符串之间随机


echo "前区起点尾巴";




$s2=mt_rand($xy,$y2);



if ($xy<$y2)
{
     $s2=mt_rand($xy,$y2);
}
else
{
     $s2=mt_rand($y2,$xy);


  }




//echo  $s2;


echo "+";



if ($xy<$y2)
{
   $s3=mt_rand($xy,$y2);
}
else
{
   $s3=mt_rand($y2,$xy);


  }




//echo  $s3;




  
$ag2=array("a"=>$s,"b"=>$s2);

$ag3=array_unique($ag2);


sort($ag3);


$arrlength=count($ag3);


for($x=0;$x<$arrlength;$x++)
   {
   echo $ag3[$x];
   echo "+";
   }




//echo  $s6;



echo "<br>";





$cc=$_POST["cc"];


echo "你选的前区位数值是=";



$jcc=join("  +  ",$_POST['cc']); 


sort($jcc);


echo $jcc;





?>  










































































































































































































































