<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body style="width: 48%; padding-left: 27%;">
<?php  
mysql_connect("localhost","root","password");
mysql_select_db("media");

// echo "<table align='center' border='0' width='70%'>
// 		<tr>";

$batas   = 10; 
// $halaman = $_GET['halaman']; 
if(isset($_GET['halaman'])) { $halaman = $_GET['halaman']; } 
	else { $halaman = ""; }

if(empty($halaman)){ 
    $posisi=0; 
    $halaman=1; 
} 
else{ 
    $posisi = ($halaman-1) * $batas; 
}
$sql = mysql_query("select * from produk limit $posisi,$batas");
	while ($r=mysql_fetch_array($sql)) {
		$harga = ($r['harga']);
		$deskripsi = ($r['deskripsi']);
		// $isi = substr($deskripsi,0,200);
		echo "<div class='list'>
				<div width='14%' align='center'>
					<img src='gambar/$r[gambar]' width=100 hight=100 border=0><br/>
				</div>
				<div width='14%' align='center'>
					<b>$r[nama]</b><br/>
				</div>
				<div width='14%' align='center'>
					<b>Rp. $harga</b><br />
				</div>
				<div width='14%' align='center'>
					<input type=button value='Beli' onclick=\"window.location.href='aksi.php?module=keranjang&act=tambah&id=$r[0]';\">
					<input type=button value='Detail' onclick=\"window.location.href='aksi.php?module=detail & id=$r[0]';\">
				</div>
			</div>";
	}
?>
<table width="100%" align="center">
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
				    echo " <a href=$_SERVER[PHP_SELF]?halaman=$i><font color='blue'>$i</font></A> | "; 
				} 
				else 
				{ 
				    echo " <b>$i</b> | "; 
				}
			?>
		</td>
	</tr>
</table>
</body>
</html>