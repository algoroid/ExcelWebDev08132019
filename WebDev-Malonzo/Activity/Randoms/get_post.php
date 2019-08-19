<?php
	if (isset($_GET['name'])){
		#print_r($_GET);
		$name = htmlentities($_GET['name']);
		#echo $name;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="GET" action="get_post.php">
	<div>
		<label>Name</label><br>
		<input type="text" name="name">
	</div>
	<div>
		<label>Email</label><br>
		<input type="text" name="email">
	</div>
	<input type="submit" value="Submit">
	</form>
	<h1 style="color:red"><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>