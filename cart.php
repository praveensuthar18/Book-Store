<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="includes.css">
</head>
<body background="images/background2.jpg">
    <div class="navbar">
		<a href="index.html"><img src="images/book.jpg" class="logo" alt="logo"></a>
		<div class="options">
            <a href="cart.php">Cart</a>
			<a href="catalog.php">Catalog</a>
			<a href="index.php">Logout</a>
		</div>
	</div>
    <div align="center">
        <font size=5 face="arial">
            <h1>Your Cart</h1>
            <table align="center" cellspacing="30" cellpadding="5">
                <tr>
                    <th>Book</th>
                    <th>Name</th>
                    <th>Author(s)</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td><img src="images/book.jpg" height="100" width="75"></td>
                    <td><font size=4>Data Structures Using C And C++</font></td>
                    <td><font size=4>Yedidyah Langsam, Moshe Augenstein, Aaron Tenenbaum</font></td>
                    <td><font size=4>Rs. 1000</font></td>
                    <td><button><font size=4>Remove</font></button></td>
                </tr>
                <tr>
                    <td><img src="images/book.jpg" height="100" width="75"></td>
                    <td><font size=4>Introduction To Algorithms</font></td>
                    <td><font size=4>Thomas Cormen, Charles Leiserson, Ronald Rivest, Clifford Stein</font></td>
                    <td><font size=4>Rs. 1300</font></td>
                    <td><button><font size=4>Remove</font></button></td>
                </tr>
                <tr>
                    <td><img src="images/book.jpg" height="100" width="75"></td>
                    <td><font size=4>Database System Concepts</font></td>
                    <td><font size=4>Abraham Silberschatz, Henry Korth, S. Sudarshan</font></td>
                    <td><font size=4>Rs. 1500</font></td>
                    <td><button><font size=4>Remove</font></button></td>
                </tr>
            </table>
            Total cost= Rs. 3800<br><br>
            <button onclick="location.href='catalog.php'"><font size=6>Continue Shopping</font></button>
            <button onclick="location.href='payment.php'"><font size=6>Buy</font></button>
        </font>
    </div>
</body>
</html>
