<!-- Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand), 
найти максимальное и минимальное значение массива и поменять их местами. -->
<?php
$arr = array();
    for ($i=0; $i<=20; $i++) {
        $arr[] = rand(0, 20);
    }
echo "<pre>";
print_r($arr);
echo "<pre>";
 

$min = min($arr); 
$max = max($arr); 
$keyMin = array_search($min, $arr);
$keyMax = array_search($max, $arr);
$arr[$keyMin] = $max;
$arr[$keyMax] = $min;
 
echo "<pre>";
print_r($arr);
echo "<pre>";
 ?>