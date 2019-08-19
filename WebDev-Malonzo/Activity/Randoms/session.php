<?php
	if (isset($_POST['submit'])){
		session_start();
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);
		header('Location: page2.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron jumbotron-fluid" style="background-color: lightblue">
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
					<label>Message</label>
					<textarea name="message" class="form-control"></textarea>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>