   <!-- https://htmllab.ru/zadachi-po-php-tsiklam/ -->


<?
// 1)Напишите PHP цикл, который выводит числа от 1 до 100. 

for ($i = gmp_nextprime(1);$i <= 100; $i = gmp_nextprime($i)) {
    echo $i, ' ';
}

// 2)Напишите PHP цикл, который выводит числа от 23 до 78.

for ($i = 23;$i < 78; $i++;){
    echo $i;
}


// 4)Создайте массив из 100 случайных чисел.

$array = array();
for ($i = 0; $i < 1000; $i++) {
    $array[]=rand(1,100);
}


//5)Вывести массив из предыдущего задания, при помощи цикла while, а потом при помощи foreach.

$array = array();
for ($i = 0; $i < 1000; $i++) {
    $array[]=rand(1,100);
}

	
	// while ($array as $i)($i <= 100) {
	// 	echo $i.'<br>'; 
	// 	$i++;
	// }

	foreach ($array as $elem) {
		echo $elem.'<br>'; 
	}

    // 6)Создайте массив из 10 строк и выведите их любым циклом внутри HTML-элемента div.
    $strArr = ["first", "second", "third"];
        foreach ($strArr as $elem) {
          echo ("<p>"$elem"</p>"); 
        }

        //  7)Создайте массив, каждый элемент которого тоже массив с ключами title, description, price. 
        // Выведите все элементы этого массива, так, чтобы заголовки были в HTML-элементе h2, 
        // описания в p, а цена в гиперсылке.
        $array = array( $title("Это заголовок"),
                        $description("это описание"),
                        $price("это цена"); 
                        ); ?>


<div>   
<h2><?php $title?></h2>
<p><?php $description?></p>
<a href=""><?php $price?></a>
</div>