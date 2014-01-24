<?php  
session_start();
// if(isset($_SESSION['username'])) {
// header('location:index.php'); }
mysql_connect("localhost","root","password");
mysql_select_db("login");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
<center>
	<form action="proseslogin.php" method="post">
		<table>
			<tr>
				<td colspan="2" align="center"><h1>Masuk</h1></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" value="Login"> <input type="reset" value="Batal"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>