<?php
$sum = 0;
$average =0;
$arr = array(1,2,5,10,255,3);
$num = count($arr);
for($i=0; $i< count($arr); $i++)
{
	$sum = $sum + $arr[$i];
	$average = $sum/$num;
	
}
echo $average ." ";
?>
