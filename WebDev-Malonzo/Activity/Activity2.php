<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>PHP FUNCTION</title>
</head>
<body>
	<?php
	$age = 0;
	$msg = 'The person is ';
	if ($age >0){
		echo $msg.'inside the womb';
	}
	elseif($age <=0 || $age <=4){
		echo $msg.'an Infant';
	}
	else if($age <=5 || $age <=7){
		echo $msg."a Toddler";
	}
	else if ($age <=8 || $age <=15) {
		echo $msg."a Kid";
	}
	else if ($age <=16 || $age <=21) {
		echo $msg."an Adolescence";
	}
	else if ($age <=22 || $age <=35) {
	echo $msg."a Young Professional";
	}
	else if ($age <=36 || $age <=59) {
		echo $msg."an Adult";
	}
	else if ($age >=60) {
		echo $msg."a Senior";
	}
	?>
</body>
</html>