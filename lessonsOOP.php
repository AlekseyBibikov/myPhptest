<?php
declare(strict_types=1);
	
	class Cat {
		private $name; // Доступ только внутри объекта - класса
		protected $breed; // Доступ внутри объекта и в наследуемых элементах класса
		public $color; // Доступ открытый везде
		
		public function __construct (string $name, string $breed){
			$this -> name = $name;
			$this -> breed = $breed;
		}
		
		public function setName(string $name){
			$this -> name = $name;
		}
		
		public function getName(){
			return $this -> name;
		}
	}
	class Dog extends Cat {
		private $age;
		
		public function __construct (string $name, string $breed,int $age){
			parent:: __construct($name, $breed);
			$this -> age = $age;
		}
		public function getAge(){
			return $this -> age;
		}
		public function getBreed(){
			return $this -> breed;
		}
	}
	
	
$cat = new Cat('Boom', 'Mycoon');
$dog = new Dog('Duck', 'Morda', 5);

$cat->color="White";
// $cat->setName("Chaky");
echo $dog->getName() . PHP_EOL;
echo $dog->getBreed() . PHP_EOL;
echo $dog->getAge() . PHP_EOL;
var_dump($dog);
