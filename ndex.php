<?php
//1. PHP script which displays all the numbers between 500 and 1000 that are divisible by 5.

/* for($i = 500; $i <= 1000; $i++){
	if (($i%5) == 0) {
		echo $i.'<br>';
	}
} */

			//2. a program to find the largest number in an array.
	/* $numbers = [5,6,11,88,32,44,87,46];
		if(count($numbers) > 0){
			rsort($numbers);
			echo $numbers[0];
		}
		// echo max($numbers); */

	//3. PHP function to generate a random password (contains uppercase, lowercase, numeric and other)
	 
	/* echo substr(str_shuffle(alphabets()),0,3).substr(str_shuffle(numbers()),0,3).substr(str_shuffle(others()),0,3);
	
	 function alphabets(){
	 	return "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	 }
	 function numbers(){
	 	return "0123456789";
	 }
	 function others(){
	 	return "/@$()%?*[]";
	 } */
// 5. create Chess board in PHP using for loop.
	/*$table = "<table>";
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
	echo $table;*/
	
			//4. PHP program to get the extension of a file.
		/*if (isset($_POST['submit'])) {

			$file = $_FILES["image"]["name"];
				$ext = explode(".", $file);
				$ext = end($ext);
				echo $ext;
		}*/

		//6. program to construct the following pattern using for loop

		/*for ($i=0; $i < 8; $i++) { 
			for ($j=1; $j <= $i+1; $j++) { 

				echo '* ';
			}
				echo '<br>';
		}*/

	//7. program to construct the following pattern, using a nested for loop

	/*	for ($i=1; $i <= 5; $i++) { 
			for ($j=1; $j < $i+1; $j++) { 

				echo '* ';
			}
				echo '<br>';
		}
		for ($i=1; $i <= 5; $i++) { 
			for ($j=1; $j <= 5-$i; $j++) { 

				echo '* ';
			}
				echo '<br>';
		}	*/

// 8: Make a simple calculator program. Operations are:
	/*function calculat(){
		if (isset($_POST['submit'])) {
			
			$a = $_POST['number1'];
			$b = $_POST['number2'];
			$cal = $_POST['cal'];

			if ($cal == 'add') {
				
				echo $a + $b;
				
			}
			else if ($cal == 'sub') {
					
					echo $a - $b;
					
				}
			else if ($cal == 'multi') {
					
					echo $a*$b;
					
				}
			else {
					
					echo $a / $b;	
				}	
		}
	} */

	//9. program which will give you all of the potential combinations of a two-digit decimal combination

	/*for ($i=0; $i < 20; $i++) { 
		
		if(count(str_split($i)) == 2){
			echo $i.', ';
		}
		else {
			echo '0'.$i.', ';
		}
	}*/

	//10. PHP program to print alphabet pattern 'A'

	// for ($i=0; $i < 5; $i++) {
		
	// }

	//11. PHP script which decodes the following JSON string.

	/*$json = '{
				"Title": "The Cuckoos Calling",
				"Author": "Robert Galbraith",
				"Detail": {
				"Publisher": "Little Brown"
				}}';

	$arr = json_decode($json);

	 // $arr1 = json_decode($arr['Detail']);
	 echo "<pre>";
	 print_r($arr);

	 foreach ($arr as $key => $value) {
	 	echo $key.' : '.$value .'<br>';
	 }*/

	 // 12. PHP script to sort the following associative array:

	/* $info = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
	 // asort($info); //ascending => by value
	 // ksort($info); //ascending => by key
	 // arsort($info);	//descending  => by value
	 // krsort($info); //descending  => by Key
	 foreach ($info as $key => $value) {
	 		echo $key .'= '.$value.'<br>';
	 }
	 echo "<pre>";
	 print_r($info); */
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>image</title>
</head>
<body>

	<!-- <table style='border:1px solid black;'> -->
	<?php
	/*	for ($i=1; $i <= 8 ; $i++) { 
			echo "<tr>";
				for ($j=1; $j <= 8; $j++) { 

					if (($j+$i)%2 == 0) {
						echo "<td style='height:35px; width:35px;background:black;'></td>";
					}
					else {
						echo "<td style='height:35px; width:35px;background:white;'></td>";
					}
					
				}
			echo "</tr>";
		} */

		echo date("Y-m-d H:i:s");

		 ?>
	<!-- </table> -->

	<!-- <form method="post" action="" enctype="multipart/form-data">	
		<input type="file" name="image">
		<input type="submit" name="submit">
	</form> -->

	<!-- <form method="post" action="">
		<input type="text" name="number1">
		<input type="text" name="number2">

		<select name="cal">
			<option value="add">+</option>
			<option value="sub">-</option>
			<option value="multi">x</option>
			<option value="div">/</option>
		</select>
		<input type="submit" name="submit">

	</form> -->

	<!-- <label>Result:<?php //calculat(); ?> </label> -->
</body>
</html>
