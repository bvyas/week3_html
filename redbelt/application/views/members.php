<html>
<head>
	<title>Hello Friends</title>
	<style type="text/css">
			.friend{
				border: 1px solid black;
				padding: 10px;
				width: 250px;
			}
			.body {
				font-size: 20px;
			}
			.comments_body {
				font-size: 15px;
			}
			#container h5{
				text-align: right;
			}
			td,tr,table{
				border: 1px solid

			}
	</style>
</head>
<body>	
	<div id="container">
		<h1>Members Page</h1>
		<h5><a href='/friends/logout'>Logout</a></h5>
		<?php echo "Hello Welcome" ?>
		<h4>Here is the list of your friends</h4>
				<?php
		$this->session->all_userdata();
		?>			
			<table>
				<tr>
					<td>Alias</td>
					<td>Action</td>
				</tr>
					
		<?php  
		foreach($friends as $friend)
		{ ?>			
			<tr>				
					<td><?=$friend['alias']; ?></td>
					<td><a href='/friends/show/<?= $friend['id']?>'>View Profile</a>  |  <a href="/friends/destroy/<?= $friend['id']?>">Remove as Friend</a></td>	
			</tr>
			<?php   } ?>			
			</table>
		<p>Other Users not on your friend's list:</p>

		<table>
				<tr>
					<td>Alias</td>
					<td>Action</td>
				</tr>
					
		<?php  
		foreach($friends as $notfriend)
		{ ?>			
			<tr>				
					<td><?=$friend['alias']; ?></td>
					<td><a href='/friends/show/<?= $notfriend['id']?>'>View Profile</a>  |  <a href="/friends/destroy/<?= $notfriend['id']?>">Remove as Friend</a></td>	
			</tr>
			<?php   } ?>			
			</table>

</div>

		<hr>
	</div>
	













