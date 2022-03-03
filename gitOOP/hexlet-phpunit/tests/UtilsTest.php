<?php
// Для запуска теста - команда "composer exec --verbose phpunit tests" или make test
namespace Hexlet\Phpunit\Utils;

use PHPUnit\Framework\TestCase;
// use Php\Package\Utils;

// класс UtilsTest наследует класс TestCase
// имя класса совпадает с именем файла
class UtilsTest extends TestCase
{
	// Метод функция определенная внутри класса
	// Должна начинаться со слова test
	// public - чтобы PHPUnit мог вызвать этот тест снаружи
	public function testReverse():void
	{
		// Сначала идет ожидаемое значение (expected)
		// И только потом актуальное (actual)
		$this->assertEquals('', reverseString(''));
		$this->assertEquals("olleh", reverseString("hello"));
		
		// Для массивов
		// Проверяет количество элементов
		$this->assertCount(5, str_split(reverseString("hello")));
		// Ожидает пустой массив
		$this->assertEmpty([]);
		// При сравнении приводит к одному виду. В случае массивов сортирует их
		$this->assertEqualsCanonicalizing(['o','l','l','e','h'], str_split(reverseString("hello")));
		// Проверяет что элемент слева входит в массив справа
		$this->assertContains("e", str_split(reverseString("hello")));
		
		// Для строк
		// Проверяет окончание строки
		$this->assertStringEndsWith('h', reverseString("hello"));
		// Проверяет что строка соответствует формату. Варианты форматирования указаны в документации PHPUnit
		$this->assertStringMatchesFormat("olleh", reverseString("hello"));
		// Проверяет наличие подстроки в строке
		$this->assertStringContainsString('lle', reverseString("hello"));
		
	}
	public function testSomeCode(): void
	{
		// Вызывает какой-то код, который печатает на экран
		echo "some output"; //Actual
		$this->expectOutputString("some output"); //Expected
	}
}