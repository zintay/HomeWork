<!-- Дано натуральное число n. Вычислить: 11 + 22 + .. + nn.  -->
<!-- Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел. -->
<?php
 
$n = 10;
$s = 0;
$num = 1;
$reshenie = '';
 
while( $num <= $n ) {
    $s += pow($num, $num);
    $reshenie .= "$num^$num".( $num < $n ? ' + ' : '');
    $num ++ ;
}
echo "$reshenie = $s";
 
?>