<?php

$number= rand(50,100);

 for($i=50; $i<101;$i++)
 {
 	if($number<70)
 	{ 
 		echo "Your grade is D";
 	}
 	else if($number>70 && $number<80)
 	{
 		echo "Your grade is C";
 	}
 	else if($number>=80 && $number<90)
 	{
 		echo "Your grade is B";
 	}
 	else if($number>=90 && $number<100)
 	{
 		echo "Your grade is A";
 	}

 }
echo your_grade;
?>


