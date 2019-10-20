<?php

//6. program to construct the following pattern using for loop

for ($i=0; $i < 8; $i++) { 
	for ($j=1; $j <= $i+1; $j++) { 
		echo '* ';
	}
	echo '<br>';
}