<?php

/* Задача 2
 * Написать программу которая получает со стандартного ввода строку
 * и выводит на экран колличество заглавных символов.
 */
 
	echo "Введите текст." . PHP_EOL;
	$userString = trim(fgets(STDIN)); // Получаем строку от пользователя убираем пробелы.
	
	$arrayString = preg_grep("/[A-Z]/", str_split($userString));
	echo "Результат: " . count($arrayString) . " заглавных символов";

	var_dump($arrayString);