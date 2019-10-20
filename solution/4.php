<?php

//4. PHP program to get the extension of a file.
if (isset($_POST['submit'])) {
	$file = $_FILES["image"]["name"];
	$ext = pathinfo($file,PATHINFO_EXTENSION);
	echo $ext;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>image Extension</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<label>Picture :</label>
		<input type="file" name="image">
		<input type="submit" name="submit">
	</form>
</body>
</html>