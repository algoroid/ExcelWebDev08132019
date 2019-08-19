<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	#substr *Start from 0 to 3
	/*$output = substr('Excel', 0, 3);
	echo $output;*/

	#strlen() *String Length
	/*$msg = strlen('Excel Technical');
	echo $msg;*/

	#strpos *String 1st Position
	/*$msg = strpos('Excel Technical', 'e');
	echo $msg;*/

	#strrpos *String Last Position
	/*$msg = strrpos('Excel Technical', 'e');
	echo $msg;*/
	
	#ucwords *Replace all 1st string of the word
	/*$msg = ucwords('excel technical');
	echo $msg;*/

	#str_replace *Replace the string
	/*$msg = 'Hilu World!';
	$out = str_replace(search, replace, subject);
	echo $out;*/
	
	#is_string() *Find out if the data type is string and count it
	/*$val = '22';
	$out = is_string($val);
	echo $out;*/

	#Test Data Types
	$val = array(true, false, null, 'abaka', '123', 123, 0, '',1.0,':');
	$cntr = 0;
	$cnt = count($val);
	for ($x=0; $x < $cnt; $x++) { 
		$out = is_string($val[$x]);
		if ($out == 1){
			$cntr++;
		}
	}
	echo $cntr;
	?>
</body>
</html>
