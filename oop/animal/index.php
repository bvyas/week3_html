<?php 
class Animal{
	public $name;
	public $health;

	public function __construct($name_p, $health_p)
	{
		$this->name = $name_p . '<br>';
		$this->health = $health_p . '<br>';
	}

	public function walk() 
	{
		$this->health -=1;
		return $this;
	}
	 public function run()
	 {
	 	$this->health -=5;
	 	return $this;
	 }
	 public function displayHealth()
	 {
	 	echo $this->name;
	 	echo $this->health;
	 	return $this;
	 }	 
}
class Dog extends Animal
{
	public function __construct($name_p)
	{
		$this->name = $name_p . '<br>';
		$this->health = 150 ;
	}
	public function pet()
	{
		$this->health +=5 . '<br>';
		return $this;
	}
}
class Dragon extends Animal
{
	public function __construct($name_p)
	{
		$this->name = $name_p . '<br>';
		$this->health = 170 ;
	}
	public function fly()
	{
		$this->health -=10 . '<br>';
		return $this;
	}
}
$Animal1 = new Animal(zebra,100);
//$Animal1->displayHealth() . '<br>';
$Animal1->walk()->walk()->walk()->run()->run()->displayHealth();

$Dog = new Dog(lion);
$Dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();
//$Dog->run();
//$Dog->displayHealth();

$Dragon = new Dragon(Elephant);
echo "This is Dragon" . '<br>';
$Dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
//$Dragon->displayHealth();



 ?>