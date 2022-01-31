<?php
declare(strict_types=1);
	// Три кита ООП : Инкапсуляция , Наследование, Полиморфизм
// Инкапсуляция - размещение в оболоке, изоляция, закрытие его либо с целью исклюения влияния на окружающих. Примеры ниже - классы.
	class Cat {
		private $name; // Доступ только внутри объекта - класса
		protected $breed; // Доступ внутри объекта и в наследуемых элементах класса
		public $color; // Доступ открытый везде
		// в начале пишется модификатор доступа. (public)
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
// Наследование - Cat родительский класс, класса Dog.
	class Dog extends Cat {
		private $age;
		
		public function __construct (string $name, string $breed,int $age){
			parent:: __construct($name, $breed);// Наследует construct и доступ к приватным аттрибутам. 
			$this -> age = $age;
		}
		public function getAge(){
			return $this -> age;
		}
		public function getBreed(){
			return $this -> breed;
		}
	}
// Полиморфизм - свойство, благодоря которому мы можем зависеть не от конкретной реализации (проще говоря конкретного класса), а от абстракции (интерфейса).
	
$cat = new Cat('Boom', 'Mycoon');
$dog = new Dog('Duck', 'Morda', 5);

$cat->color="White";

echo $dog->getName() . PHP_EOL;
echo $dog->getBreed() . PHP_EOL;
echo $dog->getAge() . PHP_EOL;
var_dump($dog);
