<html>
<body>
<?php
	$db = mysqli_connect("localhost","root","","cinemax movies"); //connect to database
if (!$db){
	die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}


if(isset($_POST['login_btn']))
{
	
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$pwd = md5($pwd);

	$sql = "SELECT * FROM `it personnel` WHERE username='$uname' AND password='$pwd'";
	$result2 = mysqli_query($db, $sql);

	if (mysqli_num_rows($result2) == 1)
	{
		session_start();
		$_SESSION['message'] = "You are now logged in";
		
		header('location: home.php');
	}
	else
	{
		header('refresh:1 url=index2.php');
		echo "Login Failed.";
	}
}

?>
</html>
</body>