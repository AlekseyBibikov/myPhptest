<?php
declare(strict_types=1);

include "vendor/autoload.php"; //Подключение загрузчика

use Monolog\Logger; // Создание логирование
use Monolog\Handler\StreamHandler;

// create a log channel & path/to/your.log - путь куда писать логеры
$log = new Logger('name');
$log->pushHandler(new StreamHandler('vendor/monolog/monolog/loger.txt', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

