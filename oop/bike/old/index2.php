<?php 
class Bike
{
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price_p, $max_speed_p, $miles_p)
	{
		
	}
} 
public function set_price($price)
{
	$this->price = $price;
}
public function get_price()
{
	return $this->price;
}
public function set_max_speed($max_speed)
{
	$this->max_speed = $max_speed;
}
public function get_max_speed()
{
	return $this->max_speed;
}
public function set_miles($miles)
{
	$this->miles = $miles;
}
public function get_miles()
{
	return $this->miles;
}
?>