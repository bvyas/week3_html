<?php 
include('myconnection.php');
$new_person_query = *INSERT INTO customer(email)values('vyaskruti@gmail.com');

$query = "SELECT * FROM customer";
$customer = fetch_all($query);

 ?>
 <html>
 <head>
 	<title>testmysql</title>
 </head>
 <body>
 	<?php 
	 	foreach ($customer as $person)
	 	 {
	 	 	echo "<h3> {$person['email']}</h3";
	 	 } 
 	 ?>	
 </body>
 </html>	 