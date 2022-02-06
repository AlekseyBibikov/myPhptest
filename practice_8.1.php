<?php
/* Задача 1
 * Написать программу которая считает 5 чисел со стандартного ввода
 * и выводит на экран результат их произведения.
 */
 
	echo "Введите 5 чисел через пробел" . PHP_EOL;
	$userInput = trim(fgets(STDIN));
	$resolte = 1;
	$arrayInt = preg_split("/ /", $userInput, -1, PREG_SPLIT_DELIM_CAPTURE);
	if (count($arrayInt) === 5){
		foreach ($arrayInt as $int){
			if(!(is_numeric($int))){
				echo "Не верный формат ввода.";
				exit;
			}
			$resolte *= $int;
		}
		echo "Результат произведение чисел: {$resolte}";
	}else{
		echo "Не верный формат ввода.";
	}