<?php
	session_start();
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
	<h1>Hello <?php echo $name; ?></h1>
	<a href="session.php">Back To Messaging</a>
</body>
</html>