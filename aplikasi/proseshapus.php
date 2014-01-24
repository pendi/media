<?php  
mysql_connect("localhost","root","password");
mysql_select_db("media");
mysql_query("delete from produk where kdbrg = '$_POST[kode]'");
echo "<script>window.alert('Data Berhasil Dihapus');</script>";
echo "<script>window.location = 'produk.php';</script>";
?>