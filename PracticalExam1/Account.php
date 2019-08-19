<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$address = $_SESSION['address'];
$username = $_SESSION['username'];
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
	<h3 style="text-align: center; "><?php echo $name; ?>'s Account</h3>
		<ul class="nav justify-content-center">
	  	<li class="nav-item">
	    	<a class="nav-link active" href="#">Account</a>
	  	</li>
	   	<li class="nav-item">
	    	<a class="nav-link active" href="Pictures.php">Pictures</a>
	  	</li>
		<li class="nav-item">
		    <a class="nav-link" href="Login.php">Logout</a>
		</li>
		</ul>
		<div class="container">
			<form method="POST" action="<?php echo$_SERVER['PHP_SELF']; ?>">
				<h4><strong>NAME: </strong><?php echo $name;?></h4>
				<h4><strong>USERNAME: </strong><?php echo $username;?></h4>
				<h4><strong>EMAIL: </strong><?php echo $email;?></h4>
				<h4><strong>ADDRESS: </strong><?php echo $address;?></h4>
			</form>
		</div>
	</div>
</body>
</html>