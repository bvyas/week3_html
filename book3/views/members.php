<html>
<head>
	<title>Book Review</title>
	<style type="text/css">
			
	</style>
</head>
<body>
	<div id="container">
		<h1>Members Page</h1>
		<?php
		 $this->session->all_userdata();
		 //var_dump($true);
		?>
		<a href='<?php echo base_url()."books/logout" ?>'>Logout</a>
		</div>	

	<?php foreach($query as $row) {?>
	<h3><?=$row->title?></h3>
	<p><h3><?=$row->body?></h3></p>
	<?php }?>
	<a href='books/comment/'>Comment</a>


		<hr>
	
</body>
</html>