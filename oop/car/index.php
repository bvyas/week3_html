<?php 
class Car
{
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;

	public function __construct($price, $speed, $fuel, $mileage)
	{
		$this->price = $price .'<br>';
		$this->speed = $speed .'<br>';
		$this->fuel = $fuel .'<br>';
		$this->mileage = $mileage .'<br>';

		$this->DisplayAll() .'<br>'; 
	}
		function DisplayAll()
			{
				echo "price : ";
				echo $this->price;
				echo "speed : ";
				echo $this->speed;
				echo "fuel : ";
				echo $this->fuel;
				echo "milage : ";
				echo $this->mileage;
				echo "tax : ";
				echo $this->tax ;
				if($this->price>10000)
					{
						echo $this->tax = 0.15 .'<br>';
						echo '<br>';
					}
					else
					{
						echo $tax = 0.12 .'<br>';
						echo '<br>';
					}
			}			
}
echo " This is Car1 information" .'<br>';
$Car1 = new Car(20000, "70mph", 80 , "22mph");
echo " This is Car2 information" .'<br>';
$Car2 = new Car(5000, "50mph", 90 , "12mph");
echo " This is Car3 information" .'<br>';
$Car3 = new Car(90000, "100mph", 60 , "45mph");
echo " This is Car4 information" .'<br>';
$Car4 = new Car(30000, "80mph", 70 , "95mph");
echo " This is Car5 information" .'<br>';
$Car5 = new Car(40000, "70mph", 40 , "22mph");

 ?>