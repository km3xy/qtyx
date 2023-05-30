<html>

<head>

<meta charset="utf-8">

<title>

input免输入版ms5新增x++x--，请选择上期码  

</title>

<script src="jquery-3.4.1/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="jquery.min.js"></script>

<style>

div {display: inline;}

</style>




<script type="text/javascript">



$(document).ready(function() {

//位数MaxInputs

//随机input位数


var MaxInputs=Math.floor(Math.random()*10+5);


//位数MaxInputs






; //maximum input boxes allowed
var InputsWrapper  = $("#InputsWrapper"); //Input boxes wrapper ID
var AddButton    = $("#AddMoreFileBox"); //Add button ID
var x = InputsWrapper.length; //initlal text box count


//FieldCount随机第一个input



  var $pt= Math.floor(Math.random()*35+0);

var $zt= Math.floor(Math.random()*35+0);





if ($pt<$zt)
{
        
var FieldCount= Math.floor(Math.random()*0+0);

      

}
else
{
    
        
        
var FieldCount= Math.floor(Math.random()*0+0);

      
 
}
 


 //to keep track of text box added
$(AddButton).click(function (e) //on add input button click
{
    if(x <= MaxInputs) //max input box allowed
    {
        
        
 //随机FieldCount第二个依次input更多， //随机第二个第n个input更多
 
 

var a=Math.random();

var d =Math.random();

var time =Math.random();



if (time>d)

{

FieldCount= Math.floor(Math.random()*35+1);
      
//这里是取随机数

} 


else if (time<=d && time<a)
{



FieldCount++;
      
//这里是随机++加1

//这里是随机--减1


}


else{

    FieldCount--;
    
    

    
//这里是随机--减1

//这里是随机++加1
    
    
    

}

      
 //随机FieldCount第二个依次input更多， //随机第二个第n个input更多
 
 
 //text box added increment
      //add input box
      
      
      $(InputsWrapper).append('<div><input  style="font-size:30px;color:#FF0000" type="text" name="a[]" id="a1'+ FieldCount +'" value=" '+ FieldCount +'"/><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" class="removeclass"><input  style="font-size:30px;color:#FF0000"  type="button" value="删除"></a></div>');
      x++; //text box increment
    }
return false;
});
$("body").on("click",".removeclass", function(e){ //user click on remove text
    if( x > 1) {
        $(this).parent('div').remove(); //remove text box
        x--; //decrement textbox
    }
return false;
})
});
</script>

//代码片段2设定位数值
  
  
  /#//选择前区位数值

<div id="InputsWrapper">

<div><input    list="browsers" style="font-size:30px;color:#FF0000"  type="text"name="cc[]" id="cc" value=""/>



<datalist id="browsers">
 
 

 <option value="5">
  
<option value="6">

  <option value="7">


  

</datalist>



<a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" class="removeclass"><input  style="font-size:30px;color:#FF0000"  type='button' value='删除'></a></div>
</div>

/#//选择前区位数值


<?php
  
  
  //可以手工输入位数位数

$x=$_POST['cc'];  
$x2=join($x);   



//可以手工输入位数位数


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


//代码片段3
  
//更多代码  
  
  
  
  ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  





































































































































































































