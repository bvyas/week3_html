<<html>
<head>
	<title>My Blog</title>
</head>
<body>
	
<?=form_open('books/comment_insert');?>
<?=form_hidden('entry_id',$this->uri->segment(3));?>
<p><textarea name="body" rows="10"></textarea></p>
<p><input type ="text" name="author"/></p>
<p><input type ="submit" value="submit"/></p>
</form>
	
</body>
</html>