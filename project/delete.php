<?php
	$con = mysqli_connect("localhost","root","","cinemax movies"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if(isset($_POST['delete']))
{
	$id = $_POST['id'];
	$pname = $_POST['pname'];
	$uname = $_POST['uname'];
	$contact = $_POST['contact'];
	$pwd = $_POST['pwd'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	
	$query = "DELETE FROM `it personnel` WHERE personnel_id = '$id'";
	
	$result = mysqli_query($con, $query);
	
	if($result)
	{
		echo "Date Deleted";
	}
	else
	{
		echo "Data not Deleted";
	}
	mysqli_close($con);
}

?>