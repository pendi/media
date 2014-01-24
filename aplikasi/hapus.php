<!DOCTYPE html>
<html>
<head>
	<title>Form Hapus</title>
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<body bgcolor="#80B2FF">
<?php  
mysql_connect("localhost","root","password");
mysql_select_db("media");
$que=mysql_query("select * from produk where kdbrg='$_GET[kdbrg]'");
$data=mysql_fetch_array($que);
?>
<form action="proseshapus.php" method="post" enctype="multipart/form-data">
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
<table width="70%" align="center" bgcolor="#E6E6E6">
<input type="hidden" name="kode" value="<?php echo $data['0']; ?>" />
	<tr>
		<td>
			&nbsp;<a href='admin.php'><img src='http://localhost/belajar/aplikasi/gambar/glyphicons_halflings_020_home@2x.png'></a>
		</td>
	</tr>
	<tr>
		<td align="center"><h2>HAPUS PRODUK</h2></td>
	</tr>
	<tr>
		<td>
			<table align="center" border="1" width="45%" bgcolor="#33FF33">
				<tr>
					<td width="25%">Kode Produk</td>
					<td width="20%"><?php echo $data[0]; ?></td>
				</tr>
				<tr>
					<td>Nama Produk</td>
					<td><?php echo $data[1]; ?></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><?php echo $data[2]; ?></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><?php echo $data[3]; ?></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><?php echo $data[4]; ?></textarea></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><?php echo $data[5]; ?></td>
				</tr>
				<tr>
					<td>Pilih File Gambar</td>
					<td><img src="<?php echo $data['gambar']; ?>" width="70%"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Hapus"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table width="70%" align="center" bgcolor="#E6E6E6">
	<tr>
		<td>&nbsp;<a href="produk.php"><img src="http://localhost/belajar/aplikasi/gambar/back1.png" width="10%"></a></td>
	</tr>
</table>
</body>
</html>