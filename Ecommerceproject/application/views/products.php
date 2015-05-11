<html>
<head>
	<title>Product Inventory</title>
	<style type="text/css">
	#product{
		width: 600px;
		height: 400px;
	}
	table, th, tr, td{
		border: 1px solid black;
	}
</style>
</head>
<body>
	<div id="product">
		<form action='/products/edit' method='post'>
		<table>
			<tr>
				<td>Picture</td>
				<td>ID</td>
				<td>Name</td>
				<td>Inventory Count</td>
				<td>Quantity sold</td>
				<td>action</td>
			</tr>
			<tr>			
				<td>$product->Picture</td>
				<td>product->ID</td>
				<td>$product->Name</td>
				<td>$product->Inventory Count</td>
				<td>$product->Quantity sold</td>
				<td>$product->action</td>
			</tr>					
		</table>					
		</form>				
	</div>
</body>
</html>