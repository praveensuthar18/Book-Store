<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body background="images/background1.jpg">
	<div class="container" align="center" style="background-color:#CCC; margin:auto; border:1px solid #000; width:30vw; min-width:30vw; padding:20px">
		<font face="arial">
			<form action="profile.php">
				<font size=8>Login</font>
				<br><br>
				<label><font size=5>Username</font><font color="red">*</font></label>
				<input type="text" id="uname" placeholder="Username" required />
				<br><br>
				<label><font size=5>Password</font><font color="red">*</font></label>
				<input type="password" id="password" placeholder="Password" required />
				<br><br>
				<button type="submit" style=""><font size=4>Login</font></button>
				<br><br><br>
				<font size=3>
					New user? Sign up <a href="registration.php">here</a>
				</font>
			</form>
		</font>
	</div>
</body>
</html>
