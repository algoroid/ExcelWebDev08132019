<?php
	if (isset($_GET['submit'])){
		$fname = htmlentities($_GET['fname']);
		$lname = htmlentities($_GET['lname']);
		$bday = htmlentities($_GET['bday']);
		$adrs = htmlentities($_GET['adrs']);
		$eml = htmlentities($_GET['eml']);
		$cnum = htmlentities($_GET['cnum']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LEARNER'S PROFILE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdS  JQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<h1>LEARNER'S PROFILE</h1>
	<form method="GET" action="learnprof.php">
	<h1 style="color:blue"><?php echo "{$fname} {$lname}'s Profile"; ?></h1>
	<div class="container">
		<ul class="list-group">
			<li class="list-group-item">
				<strong><?php echo 'First Name' ; ?>:</strong>
				<?php echo $fname; ?>
			</li>
			<li class="list-group-item">
				<strong><?php echo 'Last Name' ; ?>:</strong>
				<?php echo $lname; ?>
			</li>
			<li class="list-group-item">
				<strong><?php echo 'Birthday' ; ?>:</strong>
				<?php echo $bday; ?>
			</li>
			<li class="list-group-item">
				<strong><?php echo 'Address' ; ?>:</strong>
				<?php echo $adrs; ?>
			</li>
			<li class="list-group-item">
				<strong><?php echo 'Email' ; ?>:</strong>
				<?php echo $eml; ?>
			</li>
			<li class="list-group-item">
				<strong><?php echo 'Contact Number' ; ?>:</strong>
				<?php echo $cnum; ?>
			</li>
		</ul>
	</div>
</body>
</html>