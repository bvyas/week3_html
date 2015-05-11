<html>
<head>
	<title>Book Review</title>
	<style type="text/css">
			div.comments {
				border: 1px solid silver;
				padding: 10px;
			}
			.body {
				font-size: 20px;
			}
			.comments_body {
				font-size: 15px;
			}
	</style>
</head>
<body>	
	<div id="container">
		<h1>Members Page</h1>
		<?php
		$this->session->all_userdata();
		?>
		<a href='/books/logout'>Logout</a>
		</div>	
<?php  
		foreach($books as $book)
		{?>

			<div class='comments'><h1><?=$book['title'] ?></h1>
			<p class='body'><?=$book['body'] ?></p>
<?php  
			foreach($comments as $comment)
			{
				if($comment['entry_id'] == $book['id'])
				{ ?>
					<p class='comments_body'><?= $comment['body'] ."-". $comment['email']. $comment['created_at'] ?></p>
<?php			} 

			}
?>	
<form action='/books/comment' method='post'>
			Comment<textarea name="body"></textarea><br>
			<br><input type ="submit" value="comment">
			<input hidden name='book_id' value="<?= $book['id'] ?>">
			<input type="hidden" value="submit"> 
	</form>	
</div>
<?php   } ?>
		<hr>

	<form action='/books/book' method='post'>
			Book title<input type="text" name="title"><br>
			Book body<textarea name="body"> </textarea><br>
			<input type ="submit" value="add book">
			<input type="hidden" value="submit"> 
	</form>			
</body>
</html>