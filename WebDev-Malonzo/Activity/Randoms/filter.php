<?php
$var = 'asdasd2ee2312!<script>alert(1)</script>123@#';
#FILTERS!
#filter_var($var, *);
#*FILTER_SANITIZE_EMAIL
#*FILTER_SANITIZE_NUMBER_INT
#*FILTER_SANITIZE_SPECIAL_CHARS
/*var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
echo $var;*/

print_r(filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS));
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mi Webpage</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="data">
		<button type="submit">Submit</button>
	</form>

</body>
</html>