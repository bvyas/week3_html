<?php
$sample = array(135,2.4,2.67,1.23,332,2,1.02);
$max =0;
$min = 332;
		foreach ($sample as $value)
		{
			if($value > $max)
			{
				$max = $value;
			}
			else
			{
				$max = $max;
			}
			
		}
		echo "The maximum value is " .$max ."<br> ";

		foreach ($sample as $value) 
		{
			if ($value < $max) 
			{
				$min = $value;			
			}
			else
			{
				$min = $min;
			}	
			
		}
		echo "The minimum value is " . $min .  "<br>";

?>


