<html>
<head>
	<title>Hello Friends</title>
</head>
<body>

<h1>Members Page</h1>
		<h5><a href='/friends/logout'>Logout</a></h5>
		<?php  
			foreach($friends as $friend)
			{
				//if($friends['id'] == $book['id'])
				{ ?>
					<p class='show'><?= $friends['first_name'] ."-". $friends['add_email']. $friends['alias'] ?></p>	
<?php			} 

			}
?>
</body>
</html>