<?php
session_start();
include "koneksi.php";
$tgl_sekarang = date("Ymd");
$jam_sekarang = date("H:i:s");

$module = $_GET['module'];
// $act=$_GET['act'];
if(isset($_GET['act'])) { $act = $_GET['act']; } 
else { $act = ""; } 

if ($module=='detail') {
	include "detail_produk.php";
} 
elseif ($module=='keranjang' AND $act=='tambah') {
	$sid = session_id();
	$sql2 = mysql_query("SELECT stok FROM produk WHERE id_produk = '$_GET[id]'");
	$r=mysql_fetch_array($sql2);

	if ($r['stok'] == 0) {
		echo "stokhabis";
	}
	else {
		$sql = mysql_query("SELECT id_produk FROM orders_temp WHERE id_produk = '$_GET[id]' AND id_session = '$sid'");
		$ketemu = mysql_num_rows($sql);

		if ($ketemu==0) {
			mysql_query("INSERT INTO orders_temp (id_produk, jumlah, id_session, tgl_order_temp, jam_order_temp)VALUES ('$_GET[id]', 1, '$sid', '$tgl_sekarang', '$jam_sekarang')");
		}
		else {
			mysql_query("UPDATE orders_temp SET jumlah = jumlah + 1 WHERE id_session ='$sid' AND id_produk='$_GET[id]'");
		}
		deleteAbandonedCart();
		header('Location:menu.php?module=keranjang');
	}

}
elseif ($module=='keranjang' AND $act=='hapus') {
	mysql_query("DELETE FROM orders_temp WHERE id_orders_temp='$_GET[id]'");
	header('Location:menu.php?module=keranjang');
}
elseif ($module=='keranjang' AND $act=='update') {
	$id = $_POST[id];
	$jml_data = count($id);
	$jumlah = $_POST[jml]; // quantity
	for ($i=1; $i<=$jml_data; $i++) {
		mysql_query("UPDATE orders_temp SET jumlah = '".$jumlah[$i]."' WHERE id_orders_temp = '".$id[$i]."'");
	}
	header('Location:menu.php?module=keranjang');
}

function deleteAbandonedCart() {
	$kemarin = date('Y-m-d', mktime(0,0,0, date('m'), date('d') - 1, date('Y'))); //mktimemenyatakankejadianwaktu
	mysql_query("DELETE FROM orders_temp WHERE tgl_order_temp < '$kemarin'");
}
?>