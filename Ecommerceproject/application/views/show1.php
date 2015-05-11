<html>
<head>
	<title>Product details</title>
	<style type="text/css">
	.order_details, .order_desc{
		display: inline-block;
		vertical-align: top;
		width: 350px;
		height: 500px;
	}
	table, th, tr, td{
		border: 1px solid black;
	}
	.order_details{
		border: 1px solid black;
		padding-left: 10px;
		margin-right: 20px;
	}
	.status{
		width: 250px;
		height: 130px;
		border: 1px solid black;
		padding-left: 10px;
		display: inline-block;
		vertical-align: top;			
	}
	.display{
		display: inline-block;
		width: 250px;
		height: 130px;
		border: 1px solid black;
		padding-left: 10px;
		margin-top: 10px;
		margin-bottom: 1000px;	
		vertical-align: top;	
	}
	#container{
		height: 500px;
		border: 1px solid black;
	}
	</style>
</head>
<body>
<div id="container">
	<div class="order_details">
		<h4>Order ID #X</h4>
		<p><h4>Customer Shipping info:</h4></p>
		<p><h4>name:xxx</h4></p>
		<p><h4>address:xxx</h4></p>
		<p><h4>city:xxx</h4></p>
		<p><h4>zip:xxx</h4></p>

		<p><h4>Customer billing info:</h4></p>
		<p><h4>name:xxx</h4></p>
		<p><h4>address:xxx</h4></p>
		<p><h4>city:xxx</h4></p>
		<p><h4>zip:xxx</h4></p>
	</div>
	<div class="order_desc">
		<table>
				<tr>
					<td>ID</td>
					<td>Item</td>
					<td>Price</td>
					<td>Quantity</td>
					<td>Total</td>
				</tr>
				<tr>			
					<td>$product->ID</td>
					<td>product->Item</td>
					<td>$product->Price</td>
					<td>$product->Quantity</td>
					<td>$product->Total</td>
				</tr>					
			</table>
	</div>
	<div class="status">
		<h5>Status:xxxx</h5>
	</div>	
	<div class="display">
		<h5>Sub Total:xxx</h5>
		<h5>Shipping:xx</h5>
		<h5>Total Price:xx</h5>
	</div>	
</div>	
</body>
</html>