<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$username = $_SESSION['username'];
$comment = $_SESSION['comment'];
$password = $_SESSION['password'];
$gender = $_SESSION['gender'];
if (isset($_POST['submit'])){
	header('Location: Account.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Validation Inputs</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<style>
	body {
		background-image: url(lego5.jpg);
		height: 100%;
		background-size: cover;
		background-repeat: no-repeat;
	}
	h4{
		margin-left: 10px;
		text-align: left;
	}
	</style>
</head>
<body>
<div class="container" style="
	background-color: rgba(0,191,255, 0.4);
	 float: left;
	 margin-left: 40px;
	 margin-top: 100px;
	 width: 400px;
	 border-radius: 25px;">
	<h1 style="text-align: center; color: #FFFF00; margin-top: 10px;">Information</h1>
	<h4><strong style="color: white">Name: </strong><input readonly class="form-control-plaintext" style="text-align: center; color: red;" value="<?php echo $name;?>"><h4>
	<h4><strong style="color: white">Email: </strong><input readonly class="form-control-plaintext" style="text-align: center; color: red;" value="<?php echo $email;?>"><h4>
	<h4><strong style="color: white">Userame: </strong><input readonly class="form-control-plaintext" style="text-align: center; color: red;" value="<?php echo $username;?>"></h4>
	<h4><strong style="color: white">Password: </strong><input readonly class="form-control-plaintext" style="text-align: center; color: red;" value="<?php echo $password;?>"></h4>
	<h4><strong style="color: white">Comment: </strong><input readonly class="form-control-plaintext" style="text-align: center; color: red;" value="<?php echo $comment;?>"></h4>
	<h4><strong style="color: white">Gender: </strong><input readonly class="form-control-plaintext" style="text-align: center; color: red;" value="<?php echo $gender;?>"></h4>
	<div style="border-radius: 10px; height: 40px;" class="container bg-primary text-center">
	<a href="validation.php" class="nav-link text-light">Click Here to Go Back</a>
	</div>
</div>
</body>
</html>
