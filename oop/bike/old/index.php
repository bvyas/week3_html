<?php 
Class Bike
{
	public $my_property = "This is my bike";
}
$price = new Bike();
echo $price->my_property. '<br>';
echo $price->my_property = 'It costs $200'. '<br>';
//echo $price->my_property. '<br>';


$max_speed = new Bike();
//echo $max_speed->my_property. '<br>';
echo $max_speed->my_property = "The speed is 25mph" . '<br>';
//echo $max_speed->my_property. '<br>';

$miles = new Bike();
echo $miles->my_property = "Right now it has 0 miles";
 ?>

 