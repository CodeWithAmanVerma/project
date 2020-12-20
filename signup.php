<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title>Create Account</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="section">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Project Name</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
					<ul class="nav navbar-nav navbar-right">
						<li><a href="signup.php">Signup</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="form signup-form">
					<form>
						<div class="form-header">
							<h2 class="text-center">Signup</h2>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">First Name</span>
									<input class="form-control" type="text" placeholder="Enter your first name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">Last Name</span>
									<input class="form-control" type="text" placeholder="Enter your last name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<span class="form-label">Email</span>
									<input class="form-control" type="text" placeholder="Enter your email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Password</span>
											<input class="form-control" type="Password" placeholder="Enter your password">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Confirm Password</span>
											<input class="form-control" type="text" placeholder="Re-type your password">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<span class="form-label">Phone</span>
									<input class="form-control" type="text" placeholder="Enter your phone number">
								</div>
							</div>									
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">Date of birth</span>
									<input class="form-control" type="date">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">Gender</span>
									<select class="form-control">
										<option value="">Select</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">Other</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember-me">
                                    <label class="form-check-label" for="remember-me">
                                        I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
						<div class="form-btn">
							<button class="submit-btn">Sign Up</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<footer>
			<div class="container text-center p-20x">&copy; Copyright 2020, All Rights Reserved</div>
		</footer>
	</div>
</body>
</html>