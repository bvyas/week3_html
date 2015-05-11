<?php
session_start();
require_once('new-connection.php');
if(isset($_SESSION['errors']))
{
	foreach($_SESSION['errors'] as $error)
	{
		echo "<p class = 'error'> {$error} </p>";
	}
	unset($_SESSION['errors']);
}
if(isset($_SESSION['sucess']))
{
	echo "<p class = 'sucess'>{$_SESSION['sucess']} </p>";
	unset($_SESSION['sucess']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Wall</title>
	<style type="text/css">
		#form{
			display: inline-block;
			border: solid 2px black;
			width: 1000px;
			height: 300px;
			text-align: left;
			padding-top: 25px;
			padding-left: 20px;	
			margin-top: 30px;
		}	
		#header h4, h5{
			display: inline-block;
			width: 200px;
			height: 70px;
		}
		#header h5{
			padding-left: 20px;
		}
		#header{
			border: 2px solid black;
		}
		.message{
			width: 400px;
			height: 400px;
			overflow: auto;
			padding-left: 50px;
			margin-top: 30px;
		}
	</style>
</head>
<body>

	<div id ="header">
		<form action ="process.php" method="post">
		<h4>CodingDojo Wall</h4>
		<h5>Welcome</h5>
		first_name : <input type ="text" name="first_name">
		last_name : <input type ="text" name="last_name">
		email : <input type ="text" name="email">
		password : <input type ="password" name="password">
		<input type="hidden" name="register" value="login">
		<input type ="submit" value="login">
		<input type ="submit" value="log off">
		</form>	
	</div>	
	<div id = "form">
		<form action ="process.php" method="post">
			<h3>Post a message</h3>
			<input type ="text" name="post_message">
			<input type="hidden" name="message" value="post">
			<p><input type ="submit" value="post"></p>
		</form>
		
<div class = "message">
<?php	
	$query = "SELECT messages.*, users.first_name
					  FROM messages
					  LEFT JOIN users ON messages.user_id = users.id";	
					 $results = fetch_all($query);		
					 foreach($results as $row)
					 {			
?>
						<div>
						<h4><?php echo $row['message']?></h4>
						</div>	
						<div id = "comment">
							<form action ="process.php" method="post">
								<h3>Post a comment</h3>
									<input type ="text" name="post_comment">
									<input type="hidden" name="message_id" value="<?= $row['id']?>">
									<input type="hidden" name="comment" value="post">
									<p><input type ="submit" value="comment"></p>
							</form>	
							<div class = "footer">	
						<?php	
							$query = "SELECT comments.comment, message_id.comments, messages.message, messages.id 
											  FROM comments
											  LEFT JOIN messages ON comments.message_id = messages.id";	
											 $results = fetch_all($query);	
											 foreach ($results as $row)
											  {
						?>
												<div>
													<h5><?php echo $row['comment']?></h5>
												</div>
												<?php	
											 	}	
						?>	
							</div>	
							</div>					
						<?php }	
						?>	
</div>		
</div>							 
</body>
</html>