<?php
$arr = array(2,4,10,16);
function multiply($array)
{
	$number_of_values = count($array);
	foreach($array as $value)
	{
		$B = multiply($A, 5); 
		echo $B . ' ';
	}
		
}
multiply($arr);
var_dump($B);
?>
