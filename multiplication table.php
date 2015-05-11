<!DOCTYPE html
	<html>
	<head>
		<style>
			table, th, td , tr {
				border:1px solid black;
				border-collapse: collapse;
			}
			th, td {
				padding: 15px;
			}
		</style	
	</head>
	<body>
		<table>
				<thead>
					<td></td>
					<?php 
						for($a =1; $a < 10; $a++) 
						{
					?>
						<td><b>
							<?php echo $a; ?>
						</b></td>
					<?php 
						} 
					?>
				</thead>	
			
					<?php 
						for($i=1; $i<10; $i++)
		      			{ 
		      		?>
		      		<tr> 
		      		<td> <?php echo $i ?></td>
					<?php    
						for($j=1; $j<10; $j++)
		        		 { 
		        	?>
		         	<td><?= $i * $j ?></td>
					<?php    
						} 
					?>
		      		</tr>
					<?php 
						} 
					?>
		</table>
</body>
</html>