
<?php
//10. PHP program to print alphabet pattern 'A'

for ($c=0; $c <= 10; $c++) {
	for ($r=0; $r <= 10; $r++) { 
		if (($r==1 or $r==10) and $c != 0) {	
			echo "*";
		} elseif (($c==0 or $c==5) and ($r>1 and $r<10)) {
			echo "*";
		} else{	
			echo "&nbsp ";
		}
	}
		echo "<br>";
}
		

?>