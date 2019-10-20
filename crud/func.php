<?php

include('database.php');

$sql = " SELECT * FROM registration ";
$result = mysql_query($con, $sql);
$data = mysqli_fetch_assoc($result);
echo json_encode($data);
?>