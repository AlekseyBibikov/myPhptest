<?php

/* Задача №1
 * Необходимо в строке полученной со стандартного ввода найти все цифры
 * и заменить их на букву латинского алфавита, располагающуюся по данному индексу
 * (все символы в строке вводятся в нижнем регистре).
 */
 
	echo "Введите текст." . PHP_EOL;
	$userString =  strtolower(trim(fgets(STDIN))); // Получаем строку от пользователя убираем пробелы.
	
	$abc = "abcdefghijklmnopqrstuvwxyz";
	$arrayString = preg_split("/(\d+)/", $userString, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE); // PREG_SPLIT_NO_EMPTY вносит в массив искомую строку (рег.выраж.), PREG_SPLIT_DELIM_CAPTURE не берет в массив пустые строки.
	
	for ($i=0; $i<count($arrayString); $i++){
		if ((is_numeric($arrayString[$i])) && ($arrayString[$i] <= strlen($abc)) && ($arrayString[$i] > 0)){
			$arrayString[$i] = $abc[$arrayString[$i]-1];
		}else if (is_numeric($arrayString[$i])){
			// throw new Expence ("Число '{$arrayString[$i]}' не входит в диапазон Алфавита.");
			echo "Число '{$arrayString[$i]}' не входит в диапазон Алфавита." . PHP_EOL;
		}
	}
	echo "Результат:" . implode($arrayString); //Преобразует массив в строку.