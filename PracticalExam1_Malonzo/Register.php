<?php
	if (isset($_POST['submit'])){
		session_start();
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);
		$_SESSION['address'] = htmlentities($_POST['address']);
		$_SESSION['username'] = htmlentities($_POST['username']);
		$_SESSION['password'] = htmlentities($_POST['password']);
		header('Location: Registered.php');
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
	<h1 style="text-align: center; ">REGISTER</h1>
		<div class="container">
			<form method="POST" action="<?php echo$_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" value="">
				</div>
				<button type="submit" name="submit" class="btn btn-primary btn-block">Register!</button>
			</form>
		</div>
	</div>
</body>
</html>