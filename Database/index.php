<?php
	require('config/config.php');
	require('config/DB.php');
	#Create Query
	$query = 'SELECT * FROM users ORDER BY datecreated DESC';
	#Get result
	$result = mysqli_query($conn, $query);
	#Fetch data
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
	#Free result
	mysqli_free_result($result);
	#Close connection
	mysqli_close($conn);
?>
	<?php include('inc/header.php'); ?>
	<?php include('inc/navbar.php'); ?>
	<div class="jumbotron">
		<h1 style="font-family: 'Impact'">USERS</h1>
		<?php foreach($users as $user): ?>
			<div class="container" style="background-color: #CCCCCC; text-align: center">
				<h3>username: <?php echo $user['uname']; ?></h3>
				<small>Created On<?php echo $user['datecreated']; ?></small>
				<br>
				<a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $user['id']; ?>">Read More</a>
				<hr class="my-2"> 
			</div>
		<?php endforeach; ?>
	</div>
<?php include('inc/footer.php'); ?>





