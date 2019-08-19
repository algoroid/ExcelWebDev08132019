<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>PHP FUNCTION</title>
</head>
<body>
	<?php
	#Function - block of code that can be repeatedly called
	#Different Way to Format the fucntion
		#Camel Case - myFunction()
		#lower Case - my_function()
		#pascal case - MyFunction () - use for classes

	#Sample Function
		/*function simpleFunction($name){
			echo 'Bigyan ng Paybtawsan! -'.$name;
		}
		simpleFunction('KoyaWel');*/

	#Return Values
		/*function addNumbers($num1, $num2){
			$sum =  $num1 + $num2;
			return $sum;
		}
		echo addNumbers(4999.99,0.01);*/

	function reverze($n1, $n2, $n3, $n4){
		$reve = array ($n1, $n2, $n3, $n4);
		for ($x = 3; $x >= 0; $x--){
			echo $reve[$x];
		}
	}
	reverze(1, 2, 3, 4);

	#ANSWER
	/*function reverze($n){
		$n = (string)$n;
		$revstr = strrev($n);
		$reverse = (int)$revstr;
		return $reverse;
	}
	echo reverze(1234);*/
	
	?>
</body>
</html>