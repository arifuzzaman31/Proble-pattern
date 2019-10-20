<?php
/*$age = array(5,6,25,4,8,9);
array_splice($age,3,0,'15');
foreach($age as $n){
    echo $n.',';
}
exit;

$inputs = [1,2,3,'4-9',10];
$output = [];
foreach ($inputs as $input) {
	$output[] = $input;
}
// exit;
echo "<pre>";
print_r($output);*/
$string = '[{"name":"Jonathon","gender":"male"},{"name":"Trot","gender":"male"},{"name":"Gunn","gender":"female"},{"name":"sima","gender":"female"}]';

$array = json_decode($string);
// echo $array;
echo "<pre>";
print_r($array);

$objOrArray = [
				[
					"name" => "Jonathon", "gender" => "male"
				],
				[
					"name" => "Trot", "gender" => "male"
				],
				[
					"name" => "Gunn", "gender" => "female"
				],
				[
					"name" => "sima", "gender" => "female"
				]
		   ];

$string = json_encode($objOrArray);
// echo $string;
// exit;
echo "<pre>";
print_r($string);
// echo $array[0]["name"];
// echo $array[0]->name;
exit;
foreach($string as $k => $val){
	echo $val['name'].'-->'.$val['gender']."<br>";
}
?>