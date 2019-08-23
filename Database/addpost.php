<?php
	require('config/config.php');
	require('config/DB.php');
	
	//Check submit
	 if(isset($_POST['submit'])){
	 	//Get Form data
	 	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	 	$password = mysqli_real_escape_string($conn, $_POST['password']);
	 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	 	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	 	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	 	$age = mysqli_real_escape_string($conn, $_POST['age']);
	 
		 //Query
		 $query = "INSERT INTO users(uname, password, email, fname, lname, age) VALUES('$uname', '$password','$email', '$fname', '$lname','$age')";

		 if(mysqli_query($conn, $query)){
		 	header('Location: '.ROOT_URL.'');
		 } else {
		 	echo 'ERROR:'.mysqli_error($conn);
		 }
	 }
?>
	<?php include('inc/header.php'); ?>
	<?php include('inc/navbar.php'); ?>
	<div class="jumbotron">
		<h1 style="font-family: 'Roboto'">Add User</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="uname" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="fname" class="form-control">
			</div>
			<div class="form-group"> 
				<label>Last Name</label>
				<input type="text" name="lname" class="form-control">
			</div>
			<div class="form-group">
				<label>Age</label>
				<input type="number" name="age" class="form-control">
			</div>
			<br>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form>
	</div>
<?php include('inc/footer.php'); ?>





