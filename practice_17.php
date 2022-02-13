<?php
declare(strict_types=1); //определение строгой типизации.

/* Задача
 * Создать текстовой фаил, в котором будет хранится: 
 * Приветствие, Ваше имя и Ваше направление в обучении.
 * 
 * Для решения Я получаю строку от пользователя.
 * По умолчанию строка написана от меня.
 * !При вводе кириллицы код падает и выбрасывает ошибку TypeError trim();
 */
 
	echo "Введите Ваше имя: ";
	$userName = trim(fgets(STDIN));
	$userName = $userName === '' ? 'Алексей' : $userName;
	echo "Введите Ваше направление в обучении: ";
	$userCurs = trim(fgets(STDIN));
	$userCurs = $userCurs === '' ? 'PHP-разработчик' : $userCurs;
	$saveString = "Привет {$userName}. Вы обучаетесь по направлению {$userCurs}." .PHP_EOL;
	echo $saveString;
	
saveString($userName, $userCurs);
function saveString(string $userName = "Алексей",string $userCurs = "PHP-разработчик"){
	file_put_contents('practice_17_saveString.txt', "Привет {$userName}. Вы обучаетесь по направлению {$userCurs}.");
}