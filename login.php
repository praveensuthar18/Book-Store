<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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

	
	<div id="container">
		
			

		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			            <div class="panel panel-info" >
			                    <div class="panel-heading">
			                        <div class="panel-title">Sign In</div>
			                      <!--  <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>-->
			                    </div>

			   <div style="padding-top:30px" class="panel-body" >

			       <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

			         <form id="loginform" action="login.php" method="post" class="form-horizontal" role="form">

			            <div style="margin-bottom: 25px" class="input-group">
			                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			           <input  type="text"  id="email" class="form-control" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Email">
			            </div>

			            <div style="margin-bottom: 25px" class="input-group">
			               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			        <input id="password" type="password" class="form-control" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" placeholder="password"   >
			             </div>


                    <div style="margin-top:10px" class="form-group">
			                                    <!-- Button -->
                      <div class="col-sm-12 controls">
			                         <button type="submit" class="btn btn-success" name="submit">Login</button>
			                 </div>
			              </div>


			             <div class="form-group">
			                <div class="col-md-12 control">
			                   <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
			                       Don't have an account!
			                    <a href="register-page.php" >Sign Up Here</a>
			                   </div>
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
