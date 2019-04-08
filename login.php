<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Merienda:700');

	.card{
	z-index: 2;
	height: 300px;
	background-color: #fff;
	overflow: hidden;
	transition: .5s;
	box-sizing: border-box;
	box-shadow: -10px 25px 50px rgba(0,0,0,0.1);
	margin-bottom: 10px;
}

.card:hover{

	box-shadow: -20px 50px 100px rgba(0,0,0,0.2);

}

.header{
 margin-top: 20px;
	font-size: 70px;
	font-family: 'Merienda', cursive;
}
body{
background-image: linear-gradient(to right top, #051937, #3e2b5c, #7e3773, #c14378, #f95d6b) no-repeat;
}
</style>
</head>
<body>

	<div class="container">
		<h1 class="text-center header" style="padding-bottom: 40px">Authentication</h1>
		<div class="row">
			<div class="card col-lg-6">
				<div class="card-body card1">
				<h2>Login Form</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="user" class="form-control" placeholder="Enter username...">
					</div>
						<div class="form-group">
						<label>password</label>
						<input type="text" name="password" class="form-control" placeholder="Enter password...">
					</div>
					<button type="submit" class="btn btn-success">Login</button>
				</form>
			</div>
		</div>
			<div class="card col-lg-6">
				<div class="card-body card2">
				<h2>SignIn Form</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="user" class="form-control">
					</div>
						<div class="form-group">
						<label>password</label>
						<input type="text" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">SignIn</button>
				</form>
			</div>
		</div>
		
	</div>
</div>
</body>
</html>