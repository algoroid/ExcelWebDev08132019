<?php
#require('config/config.php');
require('config/db.php');
#create Query
$query = 'SELECT * FROM users';
#get result
$result = mysqli_query($conn, $query);
#Fetch data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
#Free Result/ Clear Cookies
mysqli_free_result($result);
#close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron">
		<h1 style="font-family: 'Impact';text-align: center;">USERS</h1>
		<?php foreach ($users as $user):?>
			<div class="container" style="background-color: #CCCCCC; text-align: center">
				<h3><?php echo $user['uname']; ?></h3>
				<small>Created On: <?php echo $user['datecreated'];?></small>
			<a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $user['id']; ?>">Read More</a>
			<hr class="my-4">
			</div>
		<?php endforeach;?>
	</div>
</body>
</html>