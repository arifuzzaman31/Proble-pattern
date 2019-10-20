<?php
//2. a program to find the largest number in an array.
$numbers = [5,6,11,88,32,44,85,46];

$max = 0;
foreach ($numbers as $number) {
	// echo $number.'<br>';
	if ($number > $max) {
		$max = $number;
	}
}
echo $max;

?>