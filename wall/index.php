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
			height: 600px;
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
			width: 300px;
			height: 500px;
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
		<h5>Welcome <?php echo kruti?></h5>
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
			<h4>Post a message</h4>
			<input type ="text" name="post_message">
			<input type ="text" name="user_id">
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
						<h6><?php echo $row['message']?></h6>
						</div>
					<form action ="process.php" method="post">
							<h4>Post a comment</h4>
							<input type ="text" name="post_comment">
							<input type="hidden" name="message_id" value="<?= $row['id'] ?>">
							<input type ="text" name="user_id">
							<input type="hidden" name="comment" value="post">
							<p><input type ="submit" value="comment"></p>
					</form>
					
	<?php
	$query = "SELECT comments.*,comments.messages_id, comments.users_id,comments.comment, messages.user_id, messages.message, messages.id 
					  FROM comments
					  LEFT JOIN messages ON comments.messages_id = messages.id";	
					 $results = fetch_all($query);	
					 foreach($results as $rows)
					 {	
					 	?>							
							
						<?php
						}	
						?>	
						<div>
						<h6><?php echo $row['comment']?></h6>
						</div>	
						<?php
						}	
						?>
</div>												
</div>	
	</div>						 
</body>
</html>