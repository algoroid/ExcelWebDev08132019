<?php
session_start();
$name = $_SESSION['name'];
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
	<h2 style="text-align: center; ">Congratulations <?php echo $name;?>, You have successfully registered</h2>
		<div class="container" style="position: center">
		<img src="chuck.gif" style="display: block; margin-left: auto; margin-right: auto;">
		</div>
		<a href="Login.php" style="text-align: center;">Back To Login</a>
	</div>
</body>
</html>