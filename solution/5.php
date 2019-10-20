<?php

// 5. create Chess board in PHP using for loop.
$table = "<table>";
	for ($i=1; $i <=8 ; $i++) { 
		$table .= "<tr>";
			for ($j=1; $j <=8 ; $j++) {
				if (($i+$j)%2 == 0) {
					$table .= "<td style='height:35px;width:35px; background:black'></td>";
				} else {
					$table .= "<td style='height:35px;width:35px; background:white'></td>";
				}
				
			}
		$table .= "</tr>";
	}

$table .= "</table>";
echo $table;

?>