<?php

include('../database/DB.php');
var_dump(extract($_POST)); exit;


$fname 		= $_POST['fname'];
$lname 		= $_POST['lname'];
$email 		= $_POST['email'];
$password	= $_POST['password'];
$address 	= $_POST['address'];
$city 		= $_POST['city'];
$dob 		= $_POST['date_of_birth'];
$zip_code 	= $_POST['zip_code'];
$gender 	= $_POST['gender'];
$checkbox 	= $_POST['checkbox'];

$sql = " INSERT INTO registration (first_name,last_name,email,password,address,city,date_of_birth,zip_code,genger,status) VALUES ($fname,$lname,$email,$password,$address,$city,$dob,$zip_code,$gender,$checkbox) ";

$result = mysqli_query($conn,$sql);
// if ($result) {
// 	# code...
// }

?>