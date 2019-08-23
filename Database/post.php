<?php
	require('config/config.php');
	require('config/DB.php');
		//Check submit
	 if(isset($_POST['delete'])){
	 	//Get Form data
	 	$delid = mysqli_real_escape_string($conn, $_POST['delid']);
	 	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	 	$password = mysqli_real_escape_string($conn, $_POST['password']);
	 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	 	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	 	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	 	$age = mysqli_real_escape_string($conn, $_POST['age']);
	 
		 //Query
		 $query = "DELETE FROM users WHERE id={$delid}";

		 if(mysqli_query($conn, $query)){
		 	header('Location: '.ROOT_URL.'');
		 } else {
		 	echo 'ERROR:'.mysqli_error($conn);
		 }
	 }
	#Get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	#Create Query
	$query = 'SELECT * FROM users WHERE id = '.$id;
	#Get result
	$result = mysqli_query($conn, $query);
	#Fetch data
	$user = mysqli_fetch_assoc($result);
	#Free result
	mysqli_free_result($result);
	#Close connection
	mysqli_close($conn);
?>
<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
	<div class="jumbotron">
		<h1 style="font-family: 'Impact'">USERS</h1>
			<div class="container" style="background-color: #CCCCCC; text-align: center">
				<h3>Your username is: <?php echo $user['uname']; ?></h3>
				<h4>User's Name: <?php echo $user['fname']; ?> <?php echo $user['lname']; ?></h4>
				<h4>User's Email: <?php echo $user['email']; ?></h4>
				<h4>User's Age: <?php echo $user['age']; ?></h4>
				<small>Created On <?php echo $user['datecreated']; ?></small>
				<br>
				<form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
					<input type="hidden" name="delid" value="<?php echo $user['id']; ?>">
					<input type="submit" name="delete" value="Delete" class="btn btn-danger">
				<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $user['id']; ?>" class="btn btn-warning">Edit</a>
				<a href="<?php echo ROOT_URL; ?>index.php" class="btn btn-success">Back</a>
				<hr class="my-4"> 
				</form>
			</div>
	</div>
<?php include('inc/footer.php'); ?>





