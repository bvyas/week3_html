<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Note Post</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript"></script>
	<style type="text/css">
	.main p{
		display: inline-block;
		vertical-align: top;
		border: 1px solid black;
	}
	#note{
		display: inline-block;
		border: 1px solid black;
		width: 200px;
		height: 200px;
		vertical-align: top;
		background-color: yellow;
	}
	</style>
	 <script>
	 	$(document).ready(function(){
	 		
	 		//$.get('/notes/index_html', function(res){
	 		//	$('#notes').html(res);
	 		//});
	 		"<div class='post'>";
	 		$('document').on('submit','form' , function(){
	 			$.post($(this).attr('action'),$(this).serialize(), function(res){
	 				$('#notes').html(res);
	 			})
	 			return false;
	 		})
	 		"</div>";
		});
	 </script>
</head>
<body>
	<div id="notes">
		<?php require_once('partials/notes.php'); ?>
	</div>	
	<h5>Notes</h5>
		<br><form action='/notes/create' method="post">
			<input type="text" name="title"><br>
			<textarea name="description"></textarea><br>
			<input type="submit" value="create"><br>			
		</form>	
	</div>	
</body>
</html>