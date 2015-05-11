<html>
<head>
	<title>Table for Products</title>
	<style type="text/css">
	#shop{
		padding-left: 20px;
		height: 100px;
	}
	#pay{
		padding-left: 20px;
	}	
	table, th, tr, td{
		border: 1px solid black;
	}
	</style>
</head>
<body>
	<div id="shop">
		<form action='/products/add' method='post'>
		<table>
			<tr>
				<td>Item</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Total</td>
			</tr>
			<tr>			
					<td>$product->Item</td>
					<td>product->Price</td>
					<td>$product->Quantity</td>
					<td>$product->Total</td>
					</tr>					
					<p><input type="hidden" name="Continue Shopping" value="Continue Shopping"></p>
					<p><td><button type="submit" value="Continue Shopping">Continue Shopping</button></td></p>
		</table>					
				</form>				
	</div>	
	<div id="pay">
		<p><h4>Shipping Information</h4></p>
		<form action='/products/pay' method='post'>
			First Name: <input type="text" name=" ">
			<p>Last Name: <input type="text" name=" "></p>
			<p>Address: <input type="text" name=" "></p>
			<p>Address 2: <input type="text" name=" "></p>
			<p>City: <input type="text" name=" "></p>
			<p>State: <input type="text" name=" "></p>
			<p>Zipcode: <input type="text" name=" "></p>
		<p><h4>Billing Information</h4></p>	
		<input type="checkbox" name="choose" value="same as above">Same as above<br>
		First Name: <input type="text" name=" ">
			<p>Last Name: <input type="text" name=" "></p>
			<p>Address: <input type="text" name=" "></p>
			<p>Address 2: <input type="text" name=" "></p>
			<p>City: <input type="text" name=" "></p>
			<p>State: <input type="text" name=" "></p>
			<p>Zipcode: <input type="text" name=" "></p>
			<p>Card: <input type="text" name=" "></p>
			<p>Security Code: <input type="text" name=" "></p>
			<p>Expiration: <input type="text" name=" "></p>
			<p><input type="hidden" name="buy" value="pay"></p>
			<p><button type="submit" value="buy">pay</button></p>
		</div>	
</body>
</html>