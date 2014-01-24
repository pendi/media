<!DOCTYPE html>
<html>
<head>
	<title>Toko Online</title>
</head>
<body>
<table border="3" align="center">
	<tr bgcolor="#CC00CC">
		<td height="48" colspan="2">
			<div align="center"><strong><font color="#000000" size="5">...:: HOME ::...</font></strong></div>
		</td>
	</tr>
	<tr bgcolor="#CC99FF">
		<td width="111">
			<p align="center"><font size="2" face="Georgia, Times New Roman, Times, serif">
			<strong><a href="login.php">ADMIN</a></strong></font></p>
		</td>
		<td width="693">
			<p align="center"><font size="2" face="Georgia, Times New Roman, Times, serif">
			<strong>Data Produk &#187;&nbsp;Akses : <?php echo date("l, d F Y h:i:s"); echo " WIB"; ?></strong></font></p>
		</td>
	</tr>
	<tr bgcolor="#CC99FF">
		<td colspan="2"><br><br><br>
			<?php
				// $module = $_REQUEST['module'];
				if(isset($_REQUEST['module'])) { $module = $_REQUEST['module']; } 
				else { $module = ""; } 
					if($module=='keranjang') {
						include "keranjang_belanja.php";
					}
					else if($module=='selesai') {
						include "selesai_belanja.php";
					}
					else if($module=='simpan') {
						include "simpan_transaksi.php";
					}
					else if($module=='detail') {
						include "detail_produk.php";
					}
					else {
						include "tampil_produk.php";
					}
				echo "<div align='center'><strong><font color='#000000' size='5'>SELAMAT DATANG , Pengunjung...</font></strong></div>";
			?>
		</td>
	</tr>
</table>
</body>
</html>