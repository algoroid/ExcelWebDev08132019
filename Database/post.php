<?php
#require('config/config.php');
require ('config/db.php');
#GET id
$id = mysqli_real_escape_string($conn, $_GET['id']);
#create Query
$query = 'SELECT * FROM users WHERE id='.$id;
#get result
$result = mysqli_query($conn, $query);
#Fetch data
$user = mysqli_fetch_assoc($result);
#Free Result/ Clear Cookies
mysqli_free_result($result);
#close connection
mysqli_close($conn);
?>
<?php include('inc/header.php');?>
<?php include('inc/navbar.php');?>
	<div class="jumbotron">
		<h1 style="font-family: 'Impact';text-align: center;">USERS</h1>
			<div class="container" style="background-color: #CCCCCC; text-align: center">
				<h3><?php echo $user['uname']; ?></h3>
				<h4>User's Details: <?php echo $user['fname'];  ?> <?php echo $user['lname'] ?></h4>
				<small>Created On: <?php echo $user['datecreated'];?></small>
			<br>
			<a class="btn btn-success" href="index.php">Back</a>
			<hr class="my-4">
			</div>
	</div>
<?php include('inc/footer.php');?>