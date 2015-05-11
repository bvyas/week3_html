<?php 
	foreach ($notes as $note) 
	{ ?>
		<div class= "notes">
			<form action="/notes/update" method="post">
				<h4><?=$note['title'] ?></h4>
				<textarea name ="description"><?=$note['description']?></textarea>
				<input type="hidden" name="id" value="<?= $note['id']?>">
				<input type="submit" value="Update"><br>
			</form>	
			<form action="/notes/delete" method="post">
				<input type="hidden" name="id" value="<?= $note['id']?>">
				<input type="submit" value="Delete">
			</form>	
		</div>
<?php	
	} ?>