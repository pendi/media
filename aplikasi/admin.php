<!DOCTYPE html>
<html>
<head>
	<title>Anila Shop</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<body bgcolor="#80B2FF">
<?php 
session_start();
mysql_connect("localhost","root","password");
mysql_select_db("media");
?>
<html>
<table width="70%" align="center" bgcolor="#3385FF">
	<tr>
		<td colspan="2"><font color="white" size="30">&nbsp;ANILA SHOP</font></td>
		<td align="right" style="vertical-align: top;">
			<a href="menuadmin.php" style="text-decoration: none;"><font color="white"> MENU ADMIN &nbsp;</font></a>||
			<a href="logout.php" style="text-decoration: none;"><font color="white"> Logout &nbsp;</font></a>
		</td>
	</tr>
	<tr>
		<td width="10%" align="center"><img src="http://localhost/belajar/aplikasi/gambar/a.jpg" width="80%" height="20%"></td>
		<td width="25%">Jual Laptop Baru Bergaransi</td>
		<td width="35%" align="right"><font size="6">PENDI SETIAWAN</font></td>
	</tr>
</table>
<table width="70%" align="center" bgcolor="#0052CC">
	<tr>
		<td colspan="2">
			<ul class="dropmenu">
				<li><a href="#1">Acer</a>
					<ul>
						<li><a href="#11">Sub Menu 1</a></li>
						<li><a href="#12">Sub Menu 2</a></li>
					</ul>
				</li>
				<li><a href="#2">Asus</a>
					<ul>
						<li><a href="#21">Sub Menu 1</a></li>
						<li><a href="#22">Sub Menu 2</a></li>
						<li><a href="#23">Sub Menu 3</a></li>
						<li><a href="#24">Sub Menu 4</a></li>
					</ul>
				</li>
				<li><a href="#3">Apple</a>
					<ul>
						<li><a href="#31">Sub Menu 1</a></li>
						<li><a href="#32">Sub Menu 2</a></li>
						<li><a href="#33">Sub Menu 3</a></li>
					</ul>
				</li>
				<li><a href="#4">Dell</a>
					<ul>
						<li><a href="#41">Sub Menu 1</a></li>
						<li><a href="#42">Sub Menu 2</a></li>
						<li><a href="#43">Sub Menu 3</a></li>
					</ul>
				</li>
				<li><a href="#4">Hp</a>
					<ul>
						<li><a href="#41">Sub Menu 1</a></li>
						<li><a href="#42">Sub Menu 2</a></li>
						<li><a href="#43">Sub Menu 3</a></li>
					</ul>
				</li>
				<li><a href="#4">Lenovo</a>
					<ul>
						<li><a href="#41">Sub Menu 1</a></li>
						<li><a href="#42">Sub Menu 2</a></li>
						<li><a href="#43">Sub Menu 3</a></li>
					</ul>
				</li>
				<li><a href="#4">Samsung</a>
					<ul>
						<li><a href="#41">Sub Menu 1</a></li>
						<li><a href="#42">Sub Menu 2</a></li>
						<li><a href="#43">Sub Menu 3</a></li>
					</ul>
				</li>
				<li><a href="#4">Toshiba</a>
					<ul>
						<li><a href="#41">Sub Menu 1</a></li>
						<li><a href="#42">Sub Menu 2</a></li>
						<li><a href="#43">Sub Menu 3</a></li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
</table>
<table width="70%" align="center" bgcolor="#E6E6E6">
	<tr>
		<td align="right" colspan="2">
			<form action="searchadmin.php" method="post">
				<input type="search" name="search" placeholder="search">
				<input type="submit" name="submit" value="search">		
			</form>
		</td>
	</tr>
	<tr>		
		<td width="40%"><img src="http://localhost/belajar/aplikasi/gambar/nida1.jpg" width="50%"></td>
		<td width="30%"></td>
	</tr>
</table>
<table width="70%" align="center" bgcolor="#E6E6E6">
	<tr>
		<td width="14%"><img src="http://localhost/belajar/aplikasi/gambar/nida.jpg" width="80%"></td>
		<td width="14%"><img src="http://localhost/belajar/aplikasi/gambar/sub3.jpg" width="80%"></td>
		<td width="14%"><img src="http://localhost/belajar/aplikasi/gambar/nida3.jpg" width="80%"></td>
		<td width="14%"><img src="http://localhost/belajar/aplikasi/gambar/4.jpg" width="80%"></td>
		<td width="14%"><img src="http://localhost/belajar/aplikasi/gambar/5.jpg" width="80%"></td>
	</tr>
</table>
</body>
</html>