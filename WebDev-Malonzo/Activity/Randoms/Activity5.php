<!DOCTYPE html>
<html>
<head>
	<title>Ternary</title>
</head>
<body>
	<?php
		#TERNARY
		#$var = condition ? if true : if false
		#Typical IF-ELSE
		/*$lagin = false;
		if ($lagin){
			echo 'You are Logged in';
		}
		else {
			echo "Please Log in";
		}*/

		/*$lagin = true;
		echo ($lagin) ? 'You are Logged in' : 'Please Log in';*/

		#ACTIVITY
		#96-100 Excellent
		#91-95 Very Good
		#85-90 Satisfactory
		#75-84 Good
		#74-DW Failed
		/*$scr = 10;
		echo '<h1 style = "color:
		blue">Your score is: </h1>'.$scr.'<h1 style = "color: red">'.($scr <= 74 ? 'Failed' : ($scr <= 75 || $scr <= 84 ? 'Good' : ($scr <= 85 || $scr <= 90 ? 'Satisfactory' : ($scr <= 91 || $scr <= 95 ? 'Very Good' : ($scr == 100 ? 'Excellent':'Not in Range'))))).'</h1>';*/

		#
		$lagin = false;
		$arr = [1,2,3,4,5];
	?>
	<div>
		<?php if ($lagin=true):?>
			<h1>Welcome User</h1>
		<?php else: ?>
			<h1>Welcome Guest</h1>
		<?php endif; ?>
	</div>
	<div>
		<?php foreach ($arr as $val):?>
		<?php echo $val; ?>
		<?php endforeach; ?>
	</div>
	<div>
		<?php for($i=0; $i < 10; $i++): ?>
			<li><?php echo $i ?></li>
		<?php endfor; ?>
	</div>
</body>
</html>