<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUp</title>
	<style>
	body{
		background-position: center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		padding: 100px 0;
	}
	.container{
		border-radius: 50px;
		background-color:#CCC;
		margin:auto;
	 	border:1px solid #000;
		width:30vw;
		min-width:30vw;
		padding:20px;
	}
	form {
		width: 100%;
	}
	label, input {
		display: inline-block;
	}
	label {
		width: 40%;
		text-align: right;
	}
	label + input {
		width: 40%;
		margin: 0 0 0 5%;
	}
	button{
		background-color: #a6a6a6;
		border: none;
		color: black;
		padding: 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		border-radius: 10px;
	}
	</style>
</head>
<body background="images/background1.jpg">
	<div class="container" align="center">
		<font face="arial">
			<form action="profile.html">
				<font size=8>Register</font>
				<br><br>
				<label>Username<font color="red">*</font></label>
				<input type="text" id="uname" placeholder="Username" required />
				<br><br>
				<label>Email ID<font color="red">*</font></label>
				<input type="text" id="uname" placeholder="Email" required />
				<br><br>
				<label>Password<font color="red">*</font></label>
				<input type="password" id="password" placeholder="Password" required />
				<br><br>
				<label>Confirm Password<font color="red">*</font></label>
				<input type="password" id="password" placeholder="Re-enter Password" required />
				<br><br>
				<button type="submit">Register</button>
				<br><br><br>
				<font size=3>
					Already have an account? Login <a href="login.php">here</a>
				</font>
			</form>
		</font>
	</div>
</body>
</html>
