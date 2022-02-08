<?php

/* Задачи:
 * 1. Создать список чисел от 10 до 45 с шагом 5.
 * 2. Используя цикл while вывести на экран числа от 1 до 5.
 * 3. Дана строка "123467", но в ней пропущено одна цифра. Используя функцию выведи на экран строку со встроенной цифрой.
 * 4. Дана строка "Если долго будешь писать на пхп - увидишь слоников ". Нужно вывести на экран количество букв "о".
 *
 * Решение:
 * Я немного усложнил задачу и в первую очередь написал тест для проверки функций.
 *  - Как настоящий программист :)
 * Для проверки достаточно запустить фаил ./test_practice_10.php
 */
 
function task1(int $start = 10, int $finish = 45, $step = 5):string{
	$str_number = "";
	for ($number = $start; $number <= $finish; $number++){
		if ($number%$step === 0){
			$str_number .= "{$number} ";
		}
	}
	$str_number = trim($str_number);
	echo 'Результат №1:  ' .$str_number . PHP_EOL;
	return $str_number;
}
function task2 (int $start = 1, int $finish = 5):string{
	$str_number = "";
	while($start <= $finish){
		$str_number .= "{$start}";
		$start++;
	}
	echo 'Результат №2:  ' .$str_number . PHP_EOL;
	return $str_number;
}
function task3 (string $str_number = "123467"):string{
	$resolt = "";
	for ($n = 0; $n < strlen($str_number)-1; $n++){
		if ($str_number[$n]+1 != $str_number[$n+1]){
			$resolt .= $str_number[$n];
			while($resolt[-1]<$str_number[$n+1]-1){
				$resolt .= $resolt[-1]+1;
			}
		}else{
			$resolt .= $str_number[$n];
		}
	}
	$resolt .= $str_number[-1];
	echo "Результат №3:  {$resolt}" . PHP_EOL;
	return $resolt;	
}
function task4 (string $userString = "Если долго будешь писать на пхп - увидишь слоников.", string $letter = "о"):int{
	str_replace($letter, "", $userString, $count);
	echo "Результат №4:  {$count}" . PHP_EOL;
	return $count;
}