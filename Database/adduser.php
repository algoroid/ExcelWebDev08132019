<?php
#require('config/config.php');
require('config/db.php');
#create submit
if(isset($_POST['submit'])){
	#Get Form data
	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
}
#Query
$query = "INSERT INTO users(uname,fname,lname) VALUES ('$uname','$fname', '$lname')";
if(mysqli_query($conn, $query)){
	header('Location'.ROOT_URL.'');
}
else{
	echo 'ERROR:'.mysqli_error($conn);
}

?>
<?php include('inc/header.php');?>

	<div class="jumbotron">
		<h1 style="font-family: 'Roboto';text-align: center;">ADD USER</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div>
				<label>Username</label>
				<input type="name" name="uname" class="form-control">
			</div>
			<div>
				<label>First Name</label>
				<input type="name" name="fname" class="form-control">
			</div>
			<div>
				<label>Last Name</label>
				<input type="name" name="lname" class="form-control">
			</div>
			<br>
			<input type="submit" name="submit" class="btn btn-primary">
		</form>
	</div>
<?php include('inc/footer.php');?>