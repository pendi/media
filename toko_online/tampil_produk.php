<?php
	include "koneksi.php";
	$batas = 2;
	// $halaman = $_GET['halaman'];
	if(isset($_GET['halaman'])) { $halaman = $_GET['halaman']; } 
	else { $halaman = ""; } 
	if(empty($halaman))	{
		$posisi = 0;
		$halaman = 1;
	}
	else {
		$posisi = ($halaman-1) * $batas;
	}
	echo "<table>";
	$sql = mysql_query("select * from produk order by id_produk desc LIMIT $posisi,$batas");
	while ($r=mysql_fetch_array($sql)) {
		$harga = ($r['harga']);
		$deskripsi = nl2br($r['deskripsi']);
		$isi = substr($deskripsi,0,200);
		echo "<tr>
				<td>
					<img src='gambar/$r[gambar]' width=100 hight=100 align=left hspace=10 border=0><br />
					<b>$r[nama_produk]</b><br/><br/>
					$isi 
				</td>
			</tr>
			<tr>
				<td><b>Rp. $harga</b></td>
				<td><b>Stok : $r[stok]</b></td>
				<td>
					<input type=button value='Beli' onclick=\"window.location.href='aksi.php?module=keranjang&act=tambah&id=$r[id_produk]';\">
					<input type=button value='Detail' onclick=\"window.location.href='aksi.php?module=detail & id=$r[id_produk]';\">
				</td>
			</tr>
			<tr>
				<td colspan='3'><hr /></td>
			</tr>";
	}
	echo "</table>";
	echo"<br>Halaman: ";
	$tampil2 = "select * from produk";
	$hasil2 = mysql_query($tampil2);
	$jmldata = mysql_num_rows($hasil2);
	$jmlhalaman = ceil($jmldata/$batas);
	for($i=1; $i<=$jmlhalaman; $i++)
		if($i !=$halaman) { 
			echo"<a href=menu.php?halaman=$i>$i</a>|"; }
		else { 
			echo"<b>$i</b>|";}
?>