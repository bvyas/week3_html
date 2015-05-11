<html>
<head>
	<title>Survey Form</title>

	
</head>
<body>

<div id ="form">
	<form action="/surveys/process_form" method="post">
		<p><label for ="YourName">Yourname</label>
		<input type="text"></p>
		<label for ="location"> Dojo Location: </label>
		<select name="location">
			<option value="Mountain View">Mountain View</option>
			<option value="Seattle">Seattle</option>
		</select><br>
		<p><label for="language">Favourite Language:</label>
		<select name="language">
			<option value="Javascript">Java Script</option>
			<option value="PHP">PHP</option>
		</select></p>
		<p><label for="comment">Comment:</label></p>
		<textarea width="200px" height="100px" name="comment"></textarea><br>
		<p><button type ="submit" value= "Submit">Submit:</button></p>
	</form>
</div>
		
</body>
</html>