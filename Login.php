<?php
	if (isset($_POST['submit'])){
		session_start();
		header('Location: Account.php');
	}
	if (isset($_POST['register'])){
		session_start();
		header('Location: Register.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="UTF-8">
  	<meta name="description" content="PHP Sessions">
 	<meta name="keywords" content="Sample Login Formats">
  	<meta name="author" content="Earl">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="jumbotron jumbotron-fluid" style="background-color: lightblue">
	<h1 style="text-align: center; ">LOGIN</h1>
		<div class="container">
			<form method="POST" action="<?php echo$_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" value="">
				</div>
				<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
				<h4 style="text-align: center;">OR</h4>
				<button type="submit" name="register" class="btn btn-outline-primary btn-block">Register Here</button>
			</form>
		</div>
	</div>
</body>
</html>
