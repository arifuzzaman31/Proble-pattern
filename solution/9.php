<?php


//9. program which will give you all of the potential combinations of a two-digit decimal combination

for ($i=0; $i < 200; $i++) { 
	
	if(count(str_split($i)) == 1){
		echo '0'.$i.', ';
	}
	else {
		echo $i.', ';
	}
}

?>