		<?php 
		$users = array(
			array('first_name' => 'Michael' , 'last_name' => 'Choi'),
			array('first_name' => 'John' , 'last_name' => 'Supsupin'),
			array('first_name' => 'Mark' , 'last_name' => 'Guillen'),
			array('first_name' => 'KB' , 'last_name' => 'Tonel')
			);
		?>
	<html>
	<head>
		<style>
			table, th, td , tr {
				border:1px solid black;
				border-collapse: collapse;
			}
			th, td {
				padding: 20px;
			}
		</style>	
	</head>
	<body>

		<table>
				<thead>					
					<tr>
						<th>User#</th>
						<th>First_Name</th>
						<th>Last_Name</th>
						<th>FullName</th>
						<th>Full Name in uppercase</th>
						<th>Length of full Name</th>
					</tr>	
				</thead>
					<?php $k=1;  foreach ($users as $value)
						{	?>
					<tr>
						<?php 
							echo '<td>' . $k . '</td>';
						
							foreach ($value as $key => $data)
							{
								echo '<td>' . $data . '</td>';
							};
							echo '<td>' . $value['first_name'] . ' ' . $value['last_name'] . '</td>';
							echo '<td>' . strtoupper($value['first_name']) . ' '. strtoupper($value['last_name']) . '</td>';
							$len = strlen($value['first_name']) + strlen($value['last_name']); 
							echo '<td>' . $len . '</td>';	
						?>	
						
						
					
						
		      		</tr> 
		      		<?php $k = $k + 1; } ?>
		</table>
</body>
</html>

