<?php
declare(strict_types=1);
// phpinfo();

// Lesson 4 Потоки ввода и вывода.

	// STDIN == fopen('php://stdin', 'r'); открывает фаил для чтения.
	// STDIN - константа потока ввода. STDOUT - Вывод. STDERR - Вывод Ошибки.
	// cat text.txt | php index.php - Результат команды 1 передает в команду 2; cat это чтение файла в консоли. 
	// Есть еще вариант со стрелочкой '<'  

// Lesson 5 Глобальная $argv = входные параметры, проверка памяти.

	//$argv[$argc++] = $argv;
	//for ($a=0; $a < $argc; $a++){
	//    if (is_array($argv[$a])){
	//        echo "key array[$a] = [ ";
	//        foreach ($argv[$a] as $b){
	//            echo "$b, ";
	//        }
	//        echo "]". PHP_EOL;
	//    }else{
	//        echo "key array[$a] = ".$argv[$a]. PHP_EOL;
	//    }
	//}
	//$c = str_repeat($argv[0], 10000);
	//unset($c);
	//echo "Используется сейчас: ". round(memory_get_usage()/1024). " кб" .PHP_EOL;
	//echo "Пиковое использование: ". round(memory_get_peak_usage()/1024). " кб".PHP_EOL;

// Lesson 11 Ханойская башня или рекурсивный подход. ФУНКЦИЯ
// ...$array обращение массива (раскрытие или закрытие аргументов)

//function number(int ...$array){
//    $a = 1;
//    foreach  ($array as $k => $v){
//         echo $k ." - ". $v .PHP_EOL;
//    }
//    return $a;
//}
//$arrNumber = [1, 2, 3];
//number(1, ...$arrNumber);
///**
// * $a - Начальный пункт
// * $b - Конечный пункт
// * $c - вспомогательный
// **/
//function hanoy(int $n, $a, $b, $c, $in = 'enter_0'){
//    echo "${in} ". $a. $b. $c . PHP_EOL;
//    if ($n === 1){
//        echo "Resul_1 iz ${in} : " . $a ." -> ". $b . PHP_EOL;
//    }
//    else{
//        hanoy($n-1, $a, $c, $b, $in = 'enter_1');
//        echo "Resul_2 iz ${in} : " . $a. " -> ". $b . PHP_EOL;
//        hanoy($n-1, $c, $b, $a, $in = 'enter_2');
//    }
//}
//hanoy(3, 'A', 'B', 'C');

//Lesson 12 Генератор Анонимной функции, callback, Замыкания
	// $gl = 5;
	// $nameing = function (string $name) use ($gl): iterable {
		// for ($i=0;$i<$gl;$i++){
			// yield $name[$i] . PHP_EOL;
		// }
	// };
	// $user = $nameing('aleksey');
	// function userFunction($genret){
		// foreach($genret as $i){
			// echo $i;
		// }
	// };
	// $callback = 'userFunction'; 
	// $callback($user);

// Lesson 13 Работа с Датой и временем. Отличие Процедурный стиль от ООП. 

	// $dateString = date('d-m-y', time()+60*60*24*5); //Вернет string. time() это называется тайм штамп Вернет int
	// $procedura = date_create_from_format('d-m-y', $dateString); //Вернет obj DateTime
	// $procedura = date_modify($procedura, '+10 day');
	// $procedura = date_format($procedura, 'j-M-Y');
	// $object = DateTime::createFromFormat('d-m-y', $dateString); //Вернет obj DateTime. Двойное двоеточие позваляет нам обратится к статическим свойствам, константам, свойствам и методам класса DateTime.
    // $object->modify('+ 10 day');// modify & format - методы класса DateTime
	// $formatString = $object->format('m-d-Y');
	// print_r($object);
	
// Lesson 15 Ошибки и обработка Исключений. PARSE ERROR, FATAL ERROR, WARNING & NOTICE. DEPRECATED - использование устаревшего функционала. 

	// error_reporting(E_ALL); //Или ini_set('error_reporting', E_ALL) одно и тоже. 
	// настройка в php.ini отношение к ошибкам. При изменения параметра изменяется поведение к ошибкам. Это нужно для разной сферы разработки!
	
	// function inverse(int $x): float {
		// if ($x === 0){
			// echo 'no';
			// throw new DivisionByZeroError('Я не умею делить на ноль');
		// }  //В этом блоке произошло выброс сообщение об ошибки.
		// else if($x == null){
			// echo 'yes';
			// throw new ArgumentCountError('Аргумента нет');
		// }
		// return 1/$x;
	// }
	// try{
		// echo inverse(). PHP_EOL;
	// } //Однако здесь происходит перехват исключения
	// catch(DivisionByZeroError $ER){
		// echo "Произошла ошибка: {$ER->getMessage()}" . PHP_EOL;
	// }
	// catch(ArgumentCountError $ER){
		// echo "Произошла ошибка: Пропущен аргумент {$ER->getMessage ()}" . PHP_EOL;
	// } //Исключение обработано и выведено на экран полное сообщение.
	// finally{
		// echo 'Программа завершена';
	// }// В любом случае сработает

// Lesson 17  Обработка HTTP. Запросы, Ответы.

	// header ('Location: http://google.com'); // Перенаправление на другой сайт
    // header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
    // header('Content-Disposition: attachment; filename="downloaded.txt"');// Передает содержимое ниже в виде файла.
	// echo "hi my name downloaded.txt";
    // readfile('text.txt');// Читает файл и выводит в браузере.


// Lesson 18 Cookies and global $_SESSION

	// $name = "TestCookie";
	// $value = "SERVER_PROTOCOL : " . $_SERVER['SERVER_PROTOCOL'];
	// setcookie($name, $value); // Устанавливает cookie;
	// setcookie("PHPSESSID", '', time()-3600); // удаление cookie
	// session_start(); // создает cookie PHPSESSID ДЛЯ $_SESSION - которая не видна в браузере а находится на сервере.

	// echo '<pre>';
		// print_r($_SESSION);
	// echo '<pre/>';
	
	// $_SESSION['login'] = 'alekseybibikov@mail.ru'; // создание session Записывается на стороне сервера.
	// $_SESSION['password'] = '15651987Alex';
	// unset($_SESSION['password']); // Удаляет параметор.
	// session_destroy(); // Удаляет все параметры.

// Lesson 19 Проект из нескольких файлов

	//set_include_path ('.'. PATH_SEPARATOR. "C:\Users\Алексей\PhpstormProjects\untitled\myPhptest\.idea"); // Устанавливает дерикторию в переменную PATH для include;
	//include 'index.php'; //подключаю фаил index.php Есть еще похожая require (но она вызывает E_ERROR если фаил не найден)
	//print_r($domain);// работаю  спеременными в том файле.
	//$f = file("./text.txt");
	//$f_content = file_get_contents("./.idea/php.xml");
	//var_dump($f);
	//echo $f_content;

// Lesson 20 Обработка метод POST, GET и получение файлов $_FILES

	//echo "<pre>";
	//print_r($_POST);
	//foreach ($_REQUEST as $key => $value){
	//    echo $key ." => ".$value. PHP_EOL;
	//}
	//print_r($_FILES);
	//echo "<pre/>";
	//$uploaddir = 'C:\Users\Алексей\PhpstormProjects\untitled\myPhptest\.idea\ ';
	//$uploadfile = $uploaddir . basename($_FILES['file_name']['name']);
	//if (move_uploaded_file($_FILES['file_name']['tmp_name'], $uploadfile)){
	//    echo "Фаил успешно загружен";
	//}else{
	//    echo "Ошибка призагрузки файла";
	//}

// Lesson 21 YAML, JSON, XML способ передачи данных между языками.

//$str_json = file_get_contents("tsconfig.json");
//print_r($str_json);
//$json = json_decode($str_json, true, 512, JSON_BIGINT_AS_STRING | JSON_THROW_ON_ERROR);
//print_r($json);
//$json_callback = json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
//print_r($json_callback);

// Lesson 22 Веб Сервера Apache, Nginx  и ХОСТИНГИ

/**
 * Виды Хостингов:
 * Shared hosting - Общий хостинг, как в комуналке.
 * Virtual Dedicated Server (VDS/VPS) - Виртуальный выделенный сервер.
 * Dedicated Server - Выделенный сервер.
 * Cloud hosting - Облачный хостинг.
 */

// Lesson 23 Разрешение зависимости с помощью composer

	/**
	 * getcomposer.org - сайт для установки.
	 * packagist.org - сайт для установке пакетов
	 * команды для установки:
	 *      > composer require <название пакета>
	 *      > composer install  - проверяет актуальные версии пакетов
	 *      > composer update - обновление пакетов
	 * Файл composer.lock был сгенерирован автоматически НЕ ДЛЯ РЕДАКТИРОВАНИЯ. В нем находится "Все хеши комитов"  (текушая инфомация о пакетах)
	 * Файл composer.json МОЖНО РЕДОКТИРОВАТЬ, в нем указаны версии пакетов, данные об авторе
	 * ! Я установил пакет "monolog" и активировал "lesson22.php";
	 */

// Lesson 24 Heroku

/**
 * heroku create - создает удаленный репозиторий.
 * heroku login - первый раз необходимо залогинется.
 * git push heroku main - добавляет изменения на удаленный репозиторий.
 * heroku open - открывает приложение в браузере.
 */