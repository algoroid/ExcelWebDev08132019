<?php
	require('config/config.php');
	require('config/DB.php');
	
	//Check submit
	 if(isset($_POST['submit'])){
	 	//Get Form data
	 	$updid = mysqli_real_escape_string($conn, $_POST['updid']);
	 	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	 	$password = mysqli_real_escape_string($conn, $_POST['password']);
	 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	 	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	 	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	 	$age = mysqli_real_escape_string($conn, $_POST['age']);

	 
		 //Query
		 $query = "UPDATE users SET 
		           uname ='$uname',
		           password ='$password',
		           email ='$email',
		           fname='$fname', 
		           lname='$lname',
		           age ='$age'
		           WHERE id = {$updid}";

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
		<h1 style="font-family: 'Roboto'">Add User</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="uname" class="form-control" value="<?php echo $user['uname'];?>">
			</div>
			<div class="form-group"> 
				<label>Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $user['password'];?>">
			</div>
			<div class="form-group"> 
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $user['email'];?>">
			</div>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="fname" class="form-control" value="<?php echo $user['fname'];?>">
			</div>
			<div class="form-group"> 
				<label>Last Name</label>
				<input type="text" name="lname" class="form-control" value="<?php echo $user['lname'];?>">
			</div>
			<div class="form-group"> 
				<label>Age</label>
				<input type="number" name="age" class="form-control" value="<?php echo $user['age'];?>">
			</div>
			<br>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			<input type="hidden" name="updid" value="<?php echo $user['id']?>">
		</form>
	</div>
<?php include('inc/footer.php'); ?>





