<?php
	require('config/config.php');
	require('config/DB.php');
session_start();
if (isset($_POST['uname'])){
	$uname = stripslashes($_REQUEST['uname']);
	$uname = mysqli_real_escape_string($conn,$_POST['uname']);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
        $query = "SELECT * FROM `users` WHERE uname='$uname' and password='".($password)."'";
	$result = mysqli_query($conn,$query);
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['uname'] = $username;
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<?php include('inc/header.php'); ?>
	<div class="jumbotron">
		<h1 style="font-family: 'Impact'; text-align: center">LOGIN</h1>
			<div class="container" style="background-color: #CCCCCC">
				<form method="POST" name="login">
				  <div class="form-group">
				    <label><strong>Username</strong></label>
				    <input type="text" name="uname" class="form-control" placeholder="Enter Username">
				  </div>
				  <div class="form-group">
				    <label><strong>Password</strong></label>
				    <input type="password" name="password" class="form-control" placeholder="Password">
				  </div>
				  <input type="submit" value="Login" name="Login" class="btn btn-primary btn-block">
				</form>
			</div>
	</div>
<?php } ?>
<?php include('inc/footer.php'); ?>