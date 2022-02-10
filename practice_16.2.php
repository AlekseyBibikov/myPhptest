<?php

/* Задача №2
 * Требуется создать словарь, который в качестве ключей будет принимать данные числа
 * (тоесть ключи будут типом int), а в качестве значений - колличество этих чисел
 * в имеющейся последовательности. Для построения словаря создайте функцию 
 * count_it(sequence), принимающую строку из цифр. Функция должна вернуть словарь
 * из 3-х самых часто встречаемых чисел
 */
 
 
function count_it(int ...$sequence){
	foreach ($sequence as $key){
		$counter = 0;
		for ($i = 0; $i<count($sequence); $i++){
			if ($key === $sequence[$i]){
				++$counter;
			}
		}
		$resolt[$key] = $counter;
	}
	arsort($resolt);
	print_r(array_slice($resolt, 0, 3, true));
}
	echo "Введите набор цифр для подсчета их колличество: ";
	$userString = trim(fgets(STDIN));
	if ($userString){
		$arrayString = str_split($userString);
		count_it(...$arrayString);
	}else{
		count_it(2,1,2,2,2,3,4,5,5,5,7,6,8,2,9,0,9,0,9,3,8,9);
	}