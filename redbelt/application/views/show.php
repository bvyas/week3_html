<html>
<head>
	<title>Hello Friends</title>
</head>
<body>

<h1>Members Page</h1>
		<h5><a href='/friends/logout'>Logout</a></h5>

			<?php  foreach($friend as $friend)
				{ ?>
					<p class='show'><?= $friend['first_name'] ."-". $friend['add_email']. $friend['alias'] ?></p>	
		<?php } ?>
</body>
</html>