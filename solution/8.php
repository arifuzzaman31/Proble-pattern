<?php

// 8: Make a simple calculator program. Operations are:
function calculate(){
	if (isset($_POST['submit'])) {
		$a = $_POST['number1'];
		$b = $_POST['number2'];
		$cal = $_POST['cal'];
		// echo $a;
		if ($cal == 'add') {	
			return $a + $b;	
		}
		else if ($cal == 'sub') {	
				return $a - $b;	
			}
		else if ($cal == 'multi') {	
				return $a*$b;	
			}
		else {	
				return $a / $b;	
			}	
	}
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="number1">
		<input type="text" name="number2">
		<select name="cal">
			<option value="add">+</option>
			<option value="sub">-</option>
			<option value="multi">x</option>
			<option value="div">/</option>
		</select>
		<input type="submit" name="submit">
	</form>
	<p>Result : <?php echo calculate(); ?></p>
</body>
</html>