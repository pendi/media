<?php
	error_reporting(0);
	session_start();
	include "koneksi.php";
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM orders_temp, produk WHERE id_session='$sid' AND orders_temp.id_produk = produk.id_produk");
	$ketemu = mysql_num_rows($sql);
	if($ketemu < 1) {
		echo "<script>window.alert('Keranjang Belanjanya Masih Kosong');
			  		  window.location=('menu.php?module=tampil')</script>";
	}
	echo "<form method=post action=aksi.php?module=keranjang&act=update>
			<center>
			<table border=2>
				<tr bgcolor='#6633FF'>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Jumlah</th>
					<th>Harga Satuan</th>
					<th>Sub Total</th>
					<th>Hapus</th>
				</tr>";
			$no=1;
			while($r=mysql_fetch_array($sql)){
				$subtotal = $r[harga] * $r[jumlah];
				$total = $total + $subtotal;
				$subtotal_rp = ($subtotal);
				$total_rp = ($total);
				$harga = ($r[harga]);
	echo "<tr bgcolor=#CCFF99>
			<td>$no</td>
			<input type=hidden name=id[$no] value=$r[id_orders_temp]>
			<td>$r[nama_produk]</td>
			<td><select name='jml[$no]' value=$r[jumlah] onChange='this.form.submit()'>";
	for ($j=1;$j <= $r[stok];$j++) {
		if($j == $r[jumlah]) {
			echo "<option selected>$j</option>";
		} else {
			echo "<option>$j</option>";
		}
	}	
	echo "</select></td>";
	echo "<td>Rp. $harga</td>
		  <td>Rp. $subtotal_rp</td>
		  <td align=center><a href='aksi.php?module=keranjang&act=hapus&id=$r[id_orders_temp]'>HAPUS</td>
		</tr>";
	$no++;
}

echo "<tr>
		<td colspan=4 align=right><b>Total</b></td>
		<td colspan=2 align='right'>Rp. <b>$total_rp</b></td>
	</tr>
	<tr>
		<td colspan=6>&nbsp;</td>
	</tr>
	<tr>
		<td colspan=3><a href=menu.php?module=tampil>BELI LAGI</a></td>
		<td colspan=3 align=right><a href=menu.php?module=selesai>SELESAI</a></td>
	</tr>
</table>
</center>
</form>";
?>