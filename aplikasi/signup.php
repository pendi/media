<!DOCTYPE html>
<html>
<head>
	<title>Form Register</title>
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<body bgcolor="#80B2FF">
<table width="70%" align="center" bgcolor="#3385FF">
	<tr>
		<td colspan="2"><font color="white" size="30">&nbsp;ANILA SHOP</font></td>
		<td align="right" style="vertical-align: top;"><a href="logout.php" style="text-decoration: none;"><font color="white"> Logout &nbsp;</font></a></td>
	</tr>
	<tr>
		<td width="10%" align="center"><img src="http://localhost/belajar/aplikasi/gambar/a.jpg" width="80%" height="20%"></td>
		<td width="25%">Jual Laptop Baru Bergaransi</td>
		<td width="35%" align="right"><font size="6">PENDI SETIAWAN</font></td>
	</tr>
</table>
<form action="prosessignup.php" method="post">
	<table width="70%" bgcolor="#E6E6E6" align="center" style="padding: 72px;">
		<tr>
			<td colspan="2" align="center"><h1>Tambah Admin</h1></td>
		</tr>
		<tr>
			<td align="right" width="30%">Username</td>
			<td width="40%"><input required type="text" name="username"></td>
		</tr>
		<tr>
			<td align="right">Password</td>
			<td><input required type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Sign Up"> <input type="reset" value="Batal"></td>
		</tr>
		<tr>
			<td colspan="2"><a href="menuadmin.php"><img src="http://localhost/belajar/aplikasi/gambar/back1.png" width="10%"></a></td>
		</tr>
	</table>
</form>
</body>
</html>