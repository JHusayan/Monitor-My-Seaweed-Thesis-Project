<!DOCTYPE html>
<html>
<head>
		<title> LOGIN PAGE </title>
		<!-- LINKS -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


<div class="container w3-center w3-padding-40">

	<div class="login-box">
	<h1 class="w3-xxxlarge" style="letter-spacing: 6;"><b>WELCOME!</b></h1>
	<div class="row">
	<div class="col-md-6 login-left">
		<h2> Login here </h2>
		<form action="dashboard.php" method="post">
			<div class="form-group">
				<label> Username </label>
				<input type="text" name="user" class="form-control" placeholder="USERNAME_" required>
			</div>
			<div class="form-group">
				<label> Password </label>
				<input type="password" name="password" class="form-control" placeholder="PASSWORD_" required>
			</div>
			<button	type="submit" class="btn btn-primary" style="background-color: rgb(47,45,47);"> LOGIN </button>
			</form>

	</div>

			<div class="col-md-6 login-right">
		<h2> Register here </h2>
		<form action="registration.php" method="post">
			<div class="form-group">
				<label> Username </label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label> Password </label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button	type="submit" class="btn btn-primary" style="background-color: rgb(47,45,47);"> REGISTER </button>
			</form>

	</div>
		</div>





</div>
</body>
</html>