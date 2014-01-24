<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<body bgcolor="#80B2FF">
<form action="simpanproduk.php" method="post" enctype="multipart/form-data">
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
	<tr>
		<td>
			&nbsp;<a href='admin.php'><img src='http://localhost/belajar/aplikasi/gambar/glyphicons_halflings_020_home@2x.png'></a>
		</td>
	</tr>
	<tr>
		<td align="center"><h2>TAMBAH PRODUK</h2></td>
	</tr>
	<tr>
		<td width="40%">
			<table border="1" width="50%" align="center" bgcolor="#33FF33">
				<tr>
					<td width="25%">Kode Produk</td>
					<td width="20%"><input type="text" name="kode" maxlength="5" placeholder="Kode Produk"></td>
				</tr>
				<tr>
					<td>Nama Produk</td>
					<td><input type="text" name="nama" placeholder="Nama Produk"></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><input type="text" name="tipe" placeholder="Type"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" placeholder="Harga"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><textarea name="deskripsi" rows="5" cols="20" placeholder="Deskripsi"></textarea></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="text" name="stok" placeholder="Stok"></td>
				</tr>
				<tr>
					<td>Pilih File Gambar</td>
					<td><input type="file" name="gambar"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Kirim"> <input type="reset" name="reset" value="Batal"></td>
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
</form>
</body>
</html>