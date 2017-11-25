<?php
	$con = mysqli_connect("localhost","root","","cinemax movies"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$pname = $_POST['pname'];
	$uname = $_POST['uname'];
	$contact = $_POST['contact'];
	$pwd=md5($_POST['pwd']);
	$address = $_POST['address'];
	$email = $_POST['email'];
	
	$query = "UPDATE `it personnel` SET personnel_name='$pname', username='$uname', password='$pwd', contact='$contact',address='$address', email='$email' WHERE personnel_id = '$id'";
	
	$result = mysqli_query($con, $query);
	
	if($result)
	{
		echo "Data UPDATED";
	}
	else
	{
		echo "Data not UPDATED";
	}
	mysqli_close($con);
}

?>