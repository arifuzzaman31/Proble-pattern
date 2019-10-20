<?php

// 12. PHP script to sort the following associative array:
$info = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "<h4>Ascending by Value</h4>";
asort($info);
foreach ($info as $key => $value) {
		echo $key .'= '.$value.'<br>';
}

echo "<h4>Ascending by Key</h4>";
ksort($info);
foreach ($info as $key => $value) {
	echo $key .'= '.$value.'<br>';
}

echo "<h4>Descending by Value</h4>";
arsort($info);
foreach ($info as $key => $value) {
	echo $key .'= '.$value.'<br>';
}

echo "<h4>Descending by Key</h4>";
krsort($info);
foreach ($info as $key => $value) {
	echo $key .'= '.$value.'<br>';
}
?>