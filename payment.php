<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="includes.css">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
</head>
<body background="images/background1.jpg">
    <div align="center">
        <font face="arial">
            <form action="profile.html">
                <table align="center" cellspacing="30" cellpadding="5">
                    <font size=4><h1>Card details</h1></font>
                    <tr>
                        <th><label><font size=4>16 digit card no</font><font color="red">*</font></label></th>
                        <td><input type="text" id="cardno" placeholder="16 digit no." required /></td>
                    </tr><tr>
                        <th><label><font size=4>Name on card</font><font color="red">*</font></label></th>
                        <td><input type="text" id="cardname" placeholder="Name" required /></td>
                    </tr><tr>
                        <th><label><font size=4>3 digit CVV code</font><font color="red">*</font></label></th>
                        <td><input type="password" id="cvv" placeholder="3 digit code" required /></td>
                    </tr><tr>
                        <th><label><font size=4>Card expiry Month</font><font color="red">*</font></label></th>
                        <td><input type="number" id="month" placeholder="Enter month(MM)" min="1" max="12" required /></td>
                    </tr><tr>
                        <th><label><font size=4>Card expiry Year</font><font color="red">*</font></label></th>
                        <td><input type="number" id="year" placeholder="Enter year(YYYY)" min="2018" max="2025" required /></td>
                    </tr>
                </table><br><br>
                <button type="submit"><font size=4>Pay</font></button>
            </font>
        </form>
    </font>
</div>
</body>
</html>
