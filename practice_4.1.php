<?php
/*
 * Задача №1
 * Пользователь вводит номер месяца (от 1 до 12). Вывести название сезона на экран(зима, весна, лето, осень).
 */
 
	echo "Пожалуйста введите число месяца от 1 до 12.".PHP_EOL;
	$number= trim(fgets(STDIN)); //Получаем строку от пользователя убираем пробелы.
	
	if(is_numeric($number)){
		if (($number === "1") || ($number === "2") || ($number === "12")){
			echo "Зима";
		}else if (($number === "3") || ($number === "4") || ($number === "5")){
			echo "Весна";
		}else if (($number === "6") || ($number === "7") || ($number === "8")){
			echo "Лето";
		}else if (($number === "9") || ($number === "10") || ($number === "11")){
			echo "Осень";
		}else{
			echo "Нет такого месяца.";
		}
	}else{
		echo "Это не число.";
	}
