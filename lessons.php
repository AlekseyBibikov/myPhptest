#!/c/php/php/
<?php
// declare(strict_types=1);
phpinfo();
    //header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
    //header('Content-Disposition: attachment; filename="downloaded.pdf"');
    //readfile('text.pdf');

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

// Lesson 17 Cookies and global $_SESSION

//session_start(); // создает cookie PHPSESSID ДЛЯ $_SESSION - которая не видна в браузере а находится на сервере.
//$name = "TestCookie";
//$value = "SERVER_PROTOCOL : " . $_SERVER['SERVER_PROTOCOL'];
//$expires = time()+60;
//setcookie($name, $value); // создание cookie;
//$_SESSION['login'] = 'alekseybibikov@mail.ru'; // создание session
//$_SESSION['password'] = '15651987Alex';
//setcookie("PHPSESSID", '', time()-3600); // удаление cookie

// Lesson 18 Проект из нескольких файлов

//set_include_path ('.'. PATH_SEPARATOR. "C:\Users\Алексей\PhpstormProjects\untitled\myPhptest\.idea");
//// Устанавливает дерикторию в переменную PATH для include;
//include 'index.php'; //подключаю фаил index.php Есть еще похожая require (но она вызывает E_ERROR если фаил не найден)
//print_r($domain);// работаю  спеременными в том файле.
//$f = file("./text.txt");
//$f_content = file_get_contents("./.idea/php.xml");
//var_dump($f);
//echo $f_content;

// Lesson 19 Обработка метод POST, GET и получение файлов $_FILES

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

// Lesson 20 YAML, JSON, XML способ передачи данных между языками.

//$str_json = file_get_contents("tsconfig.json");
//print_r($str_json);
//$json = json_decode($str_json, true, 512, JSON_BIGINT_AS_STRING | JSON_THROW_ON_ERROR);
//print_r($json);
//$json_callback = json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
//print_r($json_callback);

// Lesson 21 Веб Сервера Apache, Nginx  и ХОСТИНГИ

/**
 * Виды Хостингов:
 * Shared hosting - Общий хостинг, как в комуналке.
 * Virtual Dedicated Server (VDS/VPS) - Виртуальный выделенный сервер.
 * Dedicated Server - Выделенный сервер.
 * Cloud hosting - Облачный хостинг.
 */

// Lesson 22 Разрешение зависимости с помощью composer

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

// Lesson 23 Heroku

/**
 * heroku create - создает удаленный репозиторий.
 * git push heroku main - добавляет изменения на удаленный репозиторий.
 * heroku open - открывает приложение в браузере.
 */