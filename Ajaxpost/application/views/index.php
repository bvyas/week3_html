<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax Post</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<style type="text/css">
		
.post{
	background-color: silver;
	display: inline-block;
	border: 1px solid black;
	width: 300px;
	height: 160px;
	text-align: left;
	vertical-align: top;
	margin-left: 20px;
	margin-right: 20px;
}

	</style>
	<script>
		$(document).ready(function(){
			$('#post_it_button').click(function(){
				$("h6").css({"color": "blue"});
				$("h5").css({"color": "red"});
				$.get('/posts/index_json', function(res){
				var htmlStr = "";
				for(var i=0;i<res['posts'].length; i++){
					htmlStr += "<div class='post'>";
					htmlStr += "<h5>" + res.posts[i].description + "</h5>";
					htmlStr += "<h6>" + res.posts[i].created_at + "</h6>";
					htmlStr += "</div>";
			}
			$('#posts').html(htmlStr);
			}, 'json');
		});
	});
		</script>
</head>
<body>
	<h5>My Posts</h5>
	<div id="posts">
	</div>
<div class ="main">
	
	<div id="description"></div>
	<h6>Add a note</h6>
	<textarea width="200px" height="100px" name="Add a note"></textarea><br>
	<p><button id = "post_it_button">post it</button></p>
</div>
</body>
</html>