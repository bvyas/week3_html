<?php 
class Bike
{
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price_p, $max_speed_p, $miles_p)
	{
		$this->price = $price_p . '<br>';
		$this->max_speed = $max_speed_p . '<br>';
		$this->miles = $miles_p . '<br>';
	}
	public function displayInfo()
	{
		echo $this->price;
		echo $this->max_speed;
		echo $this->miles;
	}
	public function drive()
	{
		 $this->miles +=10;
	}	
	public function reverse()
	{
		$this->miles -=5;
		if(miles<0)
		{
			miles ==0;
		}
	}
}

$Bike1 = new Bike(200,"25mph", 2000);	
$Bike1->reverse() . '<br>';
echo "Bike1 has following specifications" . '<br>';
$Bike1->displayInfo() . '<br>';
$Bike1->drive() . '<br>';

$Bike2 = new Bike(400,"30mph", 5000);
$Bike2->reverse() . '<br>';
echo "Bike2 has following specifications" . '<br>';
$Bike2->displayInfo() . '<br>';
$Bike2->drive() . '<br>';

$Bike1 = new Bike(200,"25mph", 2000) ;	
echo "Bike1 has following specifications" . '<br>';
$Bike1->displayInfo() . '<br>';

$Bike1 = new Bike(200,"25mph", 2000);	
echo "Bike1 has following specifications" . '<br>';
$Bike1->drive() . '<br>';

$Bike2 = new Bike(400,"30mph", 5000);
echo "Bike2 has following specifications" . '<br>';
$Bike2->displayInfo() . '<br>';

$Bike2 = new Bike(400,"30mph", 5000);
echo "Bike2 has following specifications" . '<br>';
$Bike2->drive() . '<br>';
