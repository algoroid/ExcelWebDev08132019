<?php 
	$msg = '';
	$msgClass = '';
	if (filter_has_var(INPUT_POST, 'submit')){
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);
		if (!empty($email) && !empty($name) &&!empty($message)){
			if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$msg = 'Please use a VALID EMAIL';
				$msgClass = 'alert-danger';
			}
			else{
				$msg = 'Your email has been sent';
				$msgClass = 'alert-success';
			}
		}
	}
	else {
		$msg = 'Please fill in all fields';
		$msgClass = 'alert-danger';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdS  JQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">My Website</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<?php if($msg !=''): ?>
			<div class="<?php echo $msgClass; ?>">
				<?php echo $msg; ?>
			</div>
		<?php endif; ?>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
		</div>
		<div class="form-group">
			<label>Message</label>
			<textarea class="form-control" name="message" value="<?php echo isset($_POST['message']) ? $message : ''; ?>"></textarea>
		</div>
		<br>
		<button type="submit" name="submit" class="btn btn-primary" >Submit</button>
	</div>
	</form>
</body>
</html>