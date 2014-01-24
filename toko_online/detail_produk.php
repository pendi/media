<?php
	include "koneksi.php";
	$tampil = mysql_query("SELECT * FROM produk where id_produk='$_GET[id]'");
	$r = mysql_fetch_array($tampil);
	echo"
		<div align='center'>
		<table bgcolor='#00FFFF' width='400' border='4'>
			<tr>
				<td colspan='2'>
					<marquee direction='right'><div align='center'><strong>DETAIL BARANG</strong></div></marquee>
				</td>
			</tr>
			<tr>
				<td>Id Barang</td>
				<td>$r[0]</td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td> $r[1]</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td> $r[2]</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td> $r[3]</td>
			</tr>
			<tr>
				<td>Stok</td>
				<td> $r[4]</td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td><img src='gambar/$r[5]' width=200 height=300 /></td>
			</tr>
			<tr>
				<td>Aksi</td>
				<td>
					<input type=button value='Beli' onclick=\"window.location.href='aksi.php?module=keranjang&act=tambah&id=$r[id_produk]';\">
					<input type=button value='Kembali' onclick=\"window.location.href='menu.php';\">
				</td>
			</tr>
		</table>
		</div>";
?>