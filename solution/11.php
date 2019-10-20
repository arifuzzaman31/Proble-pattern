
<?php
//11. PHP script which decodes the following JSON string.

$json = '{
		"Title": "The Cuckoos Calling",
		"Author": "Robert Galbraith",
		"Detail": {
		"Publisher": "Little Brown"
	 	}}';

$array = json_decode($json,true);

?>

<!DOCTYPE html>
<html>
<head>
	<title>json data</title>
</head>
<body>
	<p>Title : <?php echo $array['Title']; ?></p>
	<p>Author : <?php echo $array['Author']; ?></p>
	<p>Publisher : <?php echo $array['Detail']['Publisher']; ?></p>
</body>
</html>