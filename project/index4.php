<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
<body>
<h1><b> Delete IT Personnel</b></h1>
<form action="delete.php" method="post">
		<table align="left">
		<tr>
			<td>Enter Personnel ID:</td>
			<td><input type="number" name="id"
			placeholder="Enter your personnel ID"></td>
		</tr>
		<tr>
			<td>Delete Name:</td>
			<td><input type="text" name="pname"
			placeholder="Enter your name"></td>
		</tr>
		<tr>
			<td>Delete Username:</td>
			<td><input type="text" name="uname"
			placeholder="Enter your username"></td>
		</tr>
		<tr>
			<td>Delete Contact:</td>
			<td><input type="number" name="contact"
			placeholder="Enter your contact number"></td>
		</tr>
		<tr>
			<td>Delete Password:</td>
			<td><input type="password" name="pwd"
			placeholder="Enter your password"></td>
		</tr>
		<tr>
			<td>Delete Address:</td>
			<td><input type="text" name="address"
			placeholder="Enter your address"></td>
		</tr>
		<tr>
			<td>Delete Email:</td>
			<td><input type="email" name="email"
			placeholder="Enter your email"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="delete" value="Delete Data"></td>
		</table>