<!DOCTYPE html>
<html>
<head>
	<title>Produk</title>
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<body bgcolor="#80B2FF">
<?php  
mysql_connect("localhost","root","password");
mysql_select_db("barang");
?>
<table width="70%" align="center" bgcolor="#3385FF">
	<tr>
		<td colspan="2"><font color="white" size="30">&nbsp;ANILA SHOP</font></td>
		<td align="right" style="vertical-align: top;"><a href="logout.php" style="text-decoration: none;"><font color="white"> Logout &nbsp;</font></a></td>
	</tr>
	<tr>
		<td width="10%" align="center"><img src="http://localhost/belajar/aplikasi/gambar/a.jpg" width="80%" height="20%"></td>
		<td width="25%">Jual Laptop Beserta Aksesoris</td>
		<td width="35%" align="right"><font size="6">PENDI SETIAWAN</font></td>
	</tr>
</table>
<table width="70%" align="center" bgcolor="#E6E6E6">
	<tr>
		<td align="center"><h2>LIST PRODUK</h2></td>
	</tr>
</table>
<table width="70%" align="center" bgcolor="#E6E6E6" border="1">
	<tr>
		<th width="8%">Kode Produk</th>
		<th width="8%">Nama Produk</th>
		<th width="12%">Type</th>
		<th width="10%">Harga</th>
		<th width="5%">Stok</th>
		<th width="10%">Aksi</th>
	</tr>
	<?php
		$batas   = 5; 
		$halaman = $_GET['halaman']; 
		if(empty($halaman)){ 
		    $posisi=0; 
		    $halaman=1; 
		} 
		else{ 
		    $posisi = ($halaman-1) * $batas; 
		} 

		$que = "select * from produk limit $posisi,$batas";
		$tampil = mysql_query("$que");
		$no=$posisi+1;
		while ($data = mysql_fetch_array($tampil)) {
			echo "<tr>
					<td align='center'>$data[0]</td>
					<td align='center'>$data[1]</td>
					<td align='center'>$data[2]</td>
					<td align='center'>$data[3]</td>
					<td align='center'>$data[4]</td>
					<td align='center'></td>
				 </tr>";
			$no++;
		}
	 ?>
	 <tr>
	 	<td colspan="6"><center><input type="submit" value="Tambah Produk" /></center></td>
	 </tr>
</table>
<table width="70%" bgcolor="#E6E6E6" align="center">
<tr>
	<td align="right">		
		<?php
			echo "<br>Halaman : "; 
			$file="produk.php"; 

			$tampil2="select * from produk"; 
			$hasil2=mysql_query($tampil2); 
			$jmldata=mysql_num_rows($hasil2); 
			$jmlhalaman=ceil($jmldata/$batas); 

			for($i=1;$i<=$jmlhalaman;$i++) 
			if ($i != $halaman) 
			{ 
			    echo " <a href=$_SERVER[PHP_SELF]?halaman=$i>$i</A> | "; 
			} 
			else 
			{ 
			    echo " <b>$i</b> | "; 
			}
		?>
	</td>
</tr>
<table width="70%" align="center" bgcolor="#E6E6E6">
	<tr>
		<td colspan="5"><a href="menuadmin.php"><img src="http://localhost/belajar/aplikasi/gambar/back1.png" width="10%"></a></td>
	</tr>
</table>
</body>
</html>