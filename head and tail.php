<?php
$head = 0;
$tail = 0;
for($i=1;$i<5001;$i++)
{
	$toss = rand(0,1);
	if($toss == 0)
	{
		$head++;
		echo "Attempt $i : Throwing a coin ..Got $head head so far and $tail tail so far" . " " . "<br/>";
	}
	else
	{
		$tail++;
		echo  "Attempt $i : Throwing a coin ..Got $head head so far and $tail tail so far" . " " ." <br/>" ;
	}
}	
?>
