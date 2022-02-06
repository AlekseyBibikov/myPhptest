<?php
/* Задача №1
 * Напишите программу перевода введенного веса в граммы, килограммы, тонны.
 * Приставки, которые будет использовать программа: g - граммы, kg - килограммы, t - тонны.
 */
 
	echo "Введите вес для перевода. Возможно несколько вариантов в любом регистре." . PHP_EOL;
	$userWeight = strtolower(trim(fgets(STDIN))); // Получаем строку от пользователя убираем пробелы и приводим строку в нижний регистор.
	
	$arrayWeight = preg_split("/(\d+)(g|kg|t)/", $userWeight, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE); // PREG_SPLIT_NO_EMPTY вносит в массив искомую строку (рег.выраж.), PREG_SPLIT_DELIM_CAPTURE не берет в массив пустые строки.

	for ($i=0; $i<count($arrayWeight); $i++){
		if ($arrayWeight[$i] === "g"){
			echo "Вы ввели {$arrayWeight[$i-1]}g" . PHP_EOL;
			echo "Результат: " . $arrayWeight[$i-1]/1000 . 'kg или ' . $arrayWeight[$i-1]/1000000 . 't' . PHP_EOL;
		}else if ($arrayWeight[$i] === "kg"){
			echo "Вы ввели {$arrayWeight[$i-1]}kg" . PHP_EOL;
			echo "Результат: " . $arrayWeight[$i-1]*1000 . 'g или ' . $arrayWeight[$i-1]/1000 . 't' . PHP_EOL;
		}else if ($arrayWeight[$i] === "t"){
			echo "Вы ввели {$arrayWeight[$i-1]}t" . PHP_EOL;
			echo "Результат: " . $arrayWeight[$i-1]*1000 . 'kg или ' . $arrayWeight[$i-1]*1000000 . 'g' . PHP_EOL;
		}
	}