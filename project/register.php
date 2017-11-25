<?php
$con = mysqli_connect("localhost","root","","cinemax movies"); //connect to database
if (!$con){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
if(isset($_POST['register_btn'])){
	$id=$_POST['id'];
	$pname=$_POST['pname'];
	$uname=$_POST['uname'];
	$pwd= $_POST['pwd'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$pwd2 = md5($pwd);
	$register_query = "INSERT INTO `it personnel`(`personnel_id`, `personnel_name`, `username`, `password`, `contact`, `address`, `email`) VALUES ('$id','$pname','$uname','$pwd2','$contact','$address','$email')";

	mysqli_query($con,  $register_query);
		echo "Register Successful";
}
?>