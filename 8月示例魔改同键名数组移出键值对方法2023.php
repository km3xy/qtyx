
如何用PHP移除数组中特定的键值对


方法一：使用unset()函数移除指定key

unset()函数是PHP中最简单也是最有效的方法之一，它可以快速删除给定数组的指定键，从而移除该键值对。

以下是使用unset()移除数组中指定键的示例代码：

$my_array = array(
    'a' => 1,
    'b' => 2,
    'c' => 3
);

unset($my_array['b']);

print_r($my_array);
输出：


Array
(
    [a] => 1
    [c] => 3
)
在上面的示例中，我们创建了一个名为$my_array的数组，其中包含三个键，分别为'a'，'b'和'c'。然后，我们使用unset()函数移除了键为'b'的键值对。最后，我们使用print_r()函数输出了修改后的数组。

方法二：使用array_filter()函数移除指定key

array_filter()函数是PHP中另一个可以移除特定键的函数。不同于unset()函数只能针对单个键，array_filter()函数可以针对多个键或者整个数组移除元素。

以下是使用array_filter()移除数组中指定键的示例代码：

$my_array = array(
    'a' => 1,
    'b' => 2,
    'c' => 3
);

$keys_to_remove = array('b');

$my_array = array_filter($my_array, function($key) use ($keys_to_remove) {
    return !in_array($key, $keys_to_remove);
}, ARRAY_FILTER_USE_KEY);

print_r($my_array);
输出：


Array
(
    [a] => 1
    [c] => 3
)
在上例中，我们定义了一个名为$keys_to_remove的数组，其中包含一个要移除的键'b'。然后，我们使用了array_filter()函数，其中使用了一个匿名函数，返回在$keys_to_remove中不存在的键值对。最后，我们使用print_r()函数输出了修改的数组。


//  同键名数组，移出键值对方法

如何用PHP移除数组中特定，同键名的，键值对

同键名数组，移出键值对方法


//对于，多个一样的同一键名，多个值，一个键名多个值，同名键名，多个值，移出方法，


//移出数组键和值代码示例


$my_array = $_POST['c'];  


unset($my_array['1']);

//移出数组键和值，c里面的键1和值

unset($my_array['2']);


//移出数组键和值，c里面的键2和值


unset($my_array['3']);

//移出数组键和值，c里面的键3和值


unset($my_array['4']);


//移出数组键和值，c里面的键4和值


print_r($my_array);




https://m.yisu.com/zixun/775199.html










































































































































































































