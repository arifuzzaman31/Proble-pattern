<?php

//7. program to construct the following pattern, using a nested for loop
*
* *
* * *
* * * *
* * * * *
* * * *
* * *
* *
*
	
$n = 10;
$m = 1;
$flag = 0;
$j = $n/2;

for ($i=1; $i <= $n; $i++) {
	($n/$m==2) ? $flag=1 : '';
	$y = $flag==0 ? $m : $j;
	echo str_repeat('* ', $y).'<br>';
	$flag==0 ? $m++ :$j--;
	
}	
?>
