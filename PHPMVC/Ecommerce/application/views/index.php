<html>
<head>
	<title>Your Cart</title>
	<style type="text/css">
		.container{
			display: inline-block;
			width: 400px;
			height: 130px;
			border: 1px solid black;
			margin-left: 30px;
			margin-top: 30px;
		}
		.container h4,h5{
			display: inline-block;
			margin-left: 20px;
		}
		.container h5{
			margin-left: 180px;
		}
		.container h6{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h4>Products</h4>
		<h5><a href ='/products/show/<?= $product->id?>'>Your Cart(<?= $this->session->userdata('counter') ?>)</a></h5>	 
			<table>
				<tr>
					<td>Description</td>
					<td>Price</td>
					<td>Quantity</td>
					<td> </td>
				</tr>
				<?php foreach($products as $product) 
				{ ?>
				<tr>
					<form action='/products/add' method='post'>
					<td><?= $product->description; ?></td>
					<td><?= $product->price; ?></td>
					<td><select name='quantity'>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
					</select></td>
					<input type = "hidden" name="buy" value="buy">
					<td><button type ="submit" value = "Buy">Buy</button></td>
					</form>	
				</tr>
				
				<?php  } ?>

			</table>			
</div>		
</body>
</html>
