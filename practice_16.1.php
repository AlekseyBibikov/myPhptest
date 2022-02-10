<?php

/* Задача №1
 * Создать словарь(массив), где ключами и значениями будут числа от 1 до 9.
 * Затем с помощию этого словаря отобразите на экране таблицу умножения. 
 * Для создания словаря, воспользуйтесь генератором.
 */

$dictionary = array(); 

for ($k = 1; $k <= 9; $k++){
	$dictionary[$k] = $k;
}
foreach ($dictionary as $k => $v){
	foreach ($dictionary as $val){
		$product = $k*$val;
		$product>9 ? $product.=' ' : $product .= '  ';
		echo $product;
	}
	echo PHP_EOL;
}
