<html>
<head>
	<title>Course</title>
	<style type="text/css">
		#main{
			width: 200px;
			height: 50px;
			text-align: left;
			margin-left: 40px;
			padding-left: 40px;
		}
		#table{
			width: 660px;
			height: 60px;
			text-align: left;
		}
	</style>
</head>
<body>
<div id="main>"
	<form action="courses/index" method="post">
		<h4>Add a new course</h4>
		<p>Name:<input type="text" value=" "></p>
		<p>Description<textarea name="Description"></textarea></p>
		<button type="submit" value="add">Add</button>
	</form>	
</div>
	<div id ="table">
		<form action="/courses/index" method="post">
		<table style="width:100%">
			<tr>
				<th>Course Name</th>
				<th>Description</th>
				<th>Date Added</th>
				<th>Action</th>				
			</tr>
<?php foreach($courses as $course)	
		{ ?>		
			<tr>
				<td><?= $course->Coursename; ?></td>
				<td><?= $course->Description; ?></td>
				<td><?= $course->Dateadded; ?></td>
				<td><a href='/courses/destroy/<?=$course->id?>'>Remove</a></td>
			</tr>	
		<?php } ?>
		</table>	
		</form>	
	</div>
</body>
</html>