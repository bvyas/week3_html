<html>
<head>
	<title>Orders Total</title>
<style type="text/css">
	table, th, tr, td{
		border: 1px solid black;
	}
	#order{
		width: 600px;
		height: 400px;
	}
</style>
</head>
<body>
	<div id="order">
		<form action='/products/order' method='post'>
		<table>
			<tr>
				<td>Order ID</td>
				<td>Name</td>
				<td>Date</td>
				<td>Billing Address</td>
				<td>Total</td>
				<td>Status</td>
			</tr>
			<tr>			
				<td>$product->Order ID</td>
				<td>product->Name</td>
				<td>$product->Date</td>
				<td>$product->Billing Address</td>
				<td>$product->Total</td>
				<td>$product->Status</td>
				</tr>					
		</table>					
		</form>				
	</div>	

</body>
</html>