<?php
$x = array(4,"Tom",1,"Michael",5,7,"Jimmy Smith");
for ($i = 0 ; $i < count($x) ; $i++)
 {
 	if(is_numeric($x[$i]) == false)
		{
			for ($a = 0 ; $a < strlen($x[$i]) ; $a++)
			{ 
				echo strtolower(substr($x[$i], 0,1));
			}
		}
		else 
		{
			for($j=0; $j<$x[$i]; $j++)
			{
			echo "*";
			}
		}
		echo "<br>";
	}
	
?>
