<?php
include('database.php');

$fname 		= $_POST['first_name'];
$lname		= $_POST['last_name'];
$email		= $_POST['email'];
$dob 		= $_POST['dob'];
$contact 	= $_POST['contact'];
$city 		= $_POST['city'];
$state 		= $_POST['state'];
$zip 		= $_POST['zip'];
$gender 	= $_POST['gender'];
$status 	= $_POST['status'];

 $sql = " INSERT INTO `persons`(`first_name`, `last_name`, `email`, `dob`, `contact`, `city`, `state`, `zip`, `gender`, `status`) VALUES ('$fname','$lname','$email','$dob','$contact','$city','$state','$zip','$gender',$status) ";

$result = mysqli_query($con, $sql);
if(mysqli_affected_rows($con)){
	$result = ["status" => true,"message" => "Data Add Successfull"];
		echo json_encode($result);
	}else{
		$result = ["status" => false,"message" => "Data Add Unsuccessfull"];
		echo json_encode($result);
	}

?>