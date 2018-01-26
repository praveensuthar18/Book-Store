<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUp</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="includes.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
 

</head>


<body>

	<nav class="navbar navbar-inverse navbar-fixed-top ">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">LMS</a>
			</div>
			<div class="collapse navbar-collapse" id="header">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="about_us.php"><i class="fa fa-user"></i> About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register-page.php"><span class="glyphicon glyphicon-user"></span> Sign-Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	

		

<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		     <div class="panel panel-info">
		             <div class="panel-heading">
		                 <div class="panel-title">Sign Up</div>
		              </div>

							    <div class="panel-body" >
		                  <form id="signupform" class="form-horizontal" role="form" action="register-page.php" method="post">

		                           <div class="form-group">
		                                <label for="email" class="col-md-3 control-label">Email</label>
		                                 <div class="col-md-9">
		                                      <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" >
		                                  </div>
		                           </div>

		                           <div class="form-group">
		                                    <label for="user" class="col-md-3 control-label">Username</label>
		                                    <div class="col-md-9">
		                                        <input type="text" class="form-control" name="user" id="user" placeholder="Username" value="<?php if (isset($_POST['user'])) echo $_POST['user']; ?>">
		                                    </div>
		                            </div>

		                           <div class="form-group">
		                                    <label for="psword1" class="col-md-3 control-label">Password</label>
		                                    <div class="col-md-9">
		                                        <input type="password" class="form-control" name="psword1" id="psword1" placeholder="Password" value="<?php if (isset($_POST['psword1'])) echo $_POST['psword1']; ?>">
		                                    </div>
		                            </div>

		                            <div class="form-group">
		                                    <label for="psword2" class="col-md-3 control-label">Confirm Password</label>
		                                    <div class="col-md-9">
		                                        <input type="password" class="form-control" name="psword2" id="psword2" placeholder="Confirm Password" value="<?php if (isset($_POST['psword2'])) echo $_POST['psword2']; ?>">
		                                    </div>
		                            </div>

		                            <div class="form-group">
		                                 <div class="col-md-offset-3 col-md-9">
		                                        <button name="submit" type="submit" class="btn btn-success"> Sign Up</button>

		                                    </div>
		                                </div>

		                            </form>
		                   </div>
		              </div>
            </div>

		<div id="footer">
			<hr>
			<p>LMS. Created 2018</p>
		</div>

	</div>
</body>
</html>
