<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="includes.css">
</head>
<body background="images/background2.jpg">
	<div class="navbar">
		<a href="index.php"><img src="images/book.jpg" class="logo" alt="logo"></a>
		<div class="options">
			<a href="cart.php">Cart</a>
			<a href="catalog.php">Catalog</a>
			<a href="index.php">Logout</a>
		</div>
	</div>
	<div align="center">
		<font face="arial" size=4>
			<h1>Your Profile</h1>
			<br>
			Username:Test User
			<br>
			Email:test_user@email.com
			<br><br>
			<button onclick="location.href='catalog.php'"><font size=4>View Catalog</font></button>
			<h1>Your Purchase History</h1>
			<table align="center">
				<tr>
					<th>Book</th>
					<th>Name</th>
					<th>Price</th>
					<th>Date</th>
				</tr>
				<tr>
					<td><img src="images/book.jpg" height="100" width="75"></td>
					<td><font size=4>Computer Organization And Architecture</font></td>
					<td><font size=4>Rs. 1100</font></td>
					<td><font size=4>15/01/2018</font></td>
				</tr>
				<tr>
					<td><img src="images/book.jpg" height="100" width="75"></td>
					<td><font size=4>Operating System Concepts</font></td>
					<td><font size=4>Rs. 2000</font></td>
					<td><font size=4>15/01/2018</font></td>
				</tr>
				<tr>
					<td><img src="images/book.jpg" height="100" width="75"></td>
					<td><font size=4>Database System Concepts</font></td>
					<td><font size=4>Rs. 1500</font></td>
					<td><font size=4>06/01/2018</font></button></td>
				</tr>
			</table>
		</font>
	</div>
</body>
</html>
