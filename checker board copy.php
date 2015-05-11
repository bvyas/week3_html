	
	<head>
		<style>
			table, th, td , tr {
				border:1px solid black;
				border-collapse: collapse;
			}
			th,td {
				padding: 20px;
				background-color: red;
			}
			
			
		</style	

	</head>
	<body>
		<table>		
					<?php 
						for($i=1; $i<10; $i++)
		      			{ 
		      		?>
		      		<tr> 
		      		<td> <?php echo ' ' ?></td>
					<?php    
						for($j=1; $j<10; $j++)	{	 
		        	?>	
		         	<td><?= ' ' ?></td>
					<?php    
						} 
					?>
		      		</tr>
					<?php 
						} 
					?>
					<?php
					?>

		</table>
				
		</table>
</body>
