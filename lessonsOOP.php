<?php
declare(strict_types=1);
	// Три кита ООП : Инкапсуляция , Наследование, Полиморфизм, Паттерн, Абстрактный класс
// Инкапсуляция - размещение в оболоке, изоляция, закрытие его либо с целью исклюения влияния на окружающих. Примеры ниже - классы.
interface ModifyObject{ //interface Это описание public методов, которые предстовляют собой только навзвание метода, описание их аргументов и возврашаемый тип. Тоесть некий протокол для класса который его реализует, а так же которые наследуют этот класс.
	public function getName():string;
	public function getBreed():string;
	public function setName(string $name):string; //в классе обязательно должно быть написано как в интерфейсе.
}
	class Cat implements ModifyObject { //implements обязует класс Cat использовать метод getName
		private $name; // Доступ только внутри объекта - класса
		protected $breed; // Доступ внутри объекта и в наследуемых элементах класса
		public $color; // Доступ открытый везде
		// в начале пишется модификатор доступа. (public)
		public function __construct (string $name, string $breed){
			$this -> name = $name;
			$this -> breed = $breed;
		}
		public function setName(string $name):string{
			$this -> name = $name;
		}
		public function getName():string{
			return "Это мое имя: " . $this -> name;
		}
		public function getBreed():string{
			return $this -> breed;
		}
	}
// Наследование - Cat родительский класс, класса Dog.
	class Dog extends Cat {
		const SAY = "гав"; // Объявлена константа
		public function __construct (string $name, string $breed, int $age){
			parent:: __construct($name, $breed);// Наследует construct и доступ к приватным аттрибутам. 
			$this -> age = $age;
		}
		public function getAge(){
			return $this -> age;
		}
		public function getBreed():string{
			return "Мой вид: " . self::SAY . " {$this -> breed} " . self::SAY . ' ' . self::SAY . '!!!';//self обращение к данному классу, похожь на this только к КЛАССУ
			// :: обращение к ствойству класса, в отличае от -> к свойству объекта
		}
		public static function sayAnimal(){
			return self::SAY;
		}
// Полиморфизм - свойство, благодоря которому мы можем зависеть не от конкретной реализации (проще говоря конкретного класса), а от абстракции (интерфейса).
}
$cat = new Cat('Boom', 'Mycoon');
$dog = new Dog('Duck', 'Morda', 5);
$cat->color="White";
echo $cat->getName() . PHP_EOL;
echo $dog->getName() . PHP_EOL;
echo $dog->getBreed() . PHP_EOL;
echo $dog->getAge() . PHP_EOL;
var_dump($dog);
$saydog = Dog::sayAnimal();//Метод должен быть static, иначе выпадает depricated
echo $saydog . PHP_EOL;

// class Mouse extends Dog{
	// const SAY = "пи-пи"; //Константу можно переопределить, но так не стоит делать так как в метода работает константа из родительского класса. Пример ниже
// }
// $mouse = new Mouse('LEVA', 'Little', 15);
// echo "Мышь говорящая " . $mouse::SAY . ", вдруг говорит " . $mouse::sayAnimal() . PHP_EOL;// к классу можно обратится через объект.
// var_dump($mouse);

// Паттерн - класс который создает экземпляр самого себя.
	final class UserFactory
	{
	    private static $inst = null;
	    // Prevent cloning and de-serializing
	    private function __clone(){}
	    private function __wakeup(){}
	    /**
	     * Call this method to get singleton
	     *
	     * @return UserFactory
	     */
	    public static function Instance()
	    {
		if ($inst === null) {
		    $inst = new UserFactory();
		}
		return $inst;
	    }
	    /**
	     * Private ctor so nobody else can instantiate it
	     * Теперь только он может инстанцировать себя
	     */
	    private function __construct()
	    {
	    }
	}
//Абстрактный класс - нельзя сделать экземпляр. Он реализует базовый функционал и передает далее классу, ни чего не иполняет.
	abstract class AbstractClass
	{
	    // Данные методы должны быть определены в дочернем классе
	    abstract protected function getValue();
	    abstract protected function prefixValue($prefix);

	    // Общий метод
	    public function printOut() {
		print $this->getValue() . "\n";
	    }
	}
