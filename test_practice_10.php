<?php
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

include "practice_10.php";

function my_assert_handler($file, $line, $code, $desc="nul"){
	echo "Не сработало в {$file}, {$line}" . PHP_EOL;
	echo "Результат:  {$desc}" . PHP_EOL;
	}
assert_options(ASSERT_CALLBACK, 'my_assert_handler');

assert('10 15 20 25 30 35 40 45' === task1());
assert('12345' === task2());
assert('1234567' === task3());
assert(4 === task4());
