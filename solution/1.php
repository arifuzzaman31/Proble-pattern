<?php
//1. PHP script which displays all the numbers between 500 and 1000 that are divisible by 5.

for($i = 500; $i <= 1000; $i++){
	if (($i%5) == 0) {
		echo $i.'<br>';
	}
} 

?>