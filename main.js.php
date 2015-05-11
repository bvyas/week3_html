<?php

	$rand_a = rand(2,60);
	$rand_b = rand(2,60);
	$rand_result = $rand_a * $rand_b;
?>	

$(document).ready(function(){
	alert(<?php echo $rand_a?> + "*" + <?php echo $rand_b?> + "=" + <?php echo $rand_result?>);
});

