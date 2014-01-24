<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<body bgcolor="#80B2FF">
<?php  
mysql_connect("localhost","root","password");
mysql_select_db("media");
?>
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
<table width="70%" align="center" bgcolor="#E6E6E6" border="1">
	<tr bgcolor="orange">
		<th width="8%">Nama</th>
		<th width="8%">Type</th>
		<th width="8%">Harga</th>
		<th width="5%">Gambar</th>
		<th width="5%"></th>
	</tr>	
	<?php
		$search= $_POST['search'];
		$q = "select * from produk where nama like '%$search%' or harga like '%$search%' or type like '%$search%'";
		$result = mysql_query($q);
		$jumlah = mysql_num_rows($result);
		if($jumlah > 0) {
			while ($data = mysql_fetch_array($result)) {
			echo "
				<tr>
					<td align='center'>$data[1]</td>
					<td align='center'>$data[2]</td>
					<td align='center'>$data[3]</td>
					<td align='center'><img src='$data[gambar]' width='50%'></td>
					<td align='center'><a href='detail.php' style='text-decoration: none;'><font color='blue'>Detail</font></a></td>
				</tr>";
			}
		} else {
			echo"<script>window.alert('Data Tidak Ditemukan');</script>";
			echo"<script>window.location = 'admin.php';</script>";
			// header('Location: index.php');
		}
	?>
</table>
<table width="70%" align="center" bgcolor="#E6E6E6">
	<tr>
		<td>&nbsp;<a href="admin.php"><img src="http://localhost/belajar/aplikasi/gambar/back1.png" width="10%"></a></td>
	</tr>
</table>
</form>
</body>
</html>