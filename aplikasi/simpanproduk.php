<?php  
mysql_connect("localhost","root","password");
mysql_select_db("media");

$kode = $_POST['kode'];
$nama = $_POST['nama']; 
$tipe = $_POST['tipe']; 
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$stok = $_POST['stok'];
$folder = "gambar";
$tmp_name = $_FILES["gambar"]["tmp_name"];
$name = $folder."/".$_FILES["gambar"]["name"];

move_uploaded_file($tmp_name, $name);

echo "<script language=\"Javascript\">\n";
if($kode!="" && $nama!="" && $tipe!="" && $harga!="" && $deskripsi!="" && $stok!="")
{		
	$query = "INSERT INTO produk(kdbrg,nama,type,harga,deskripsi,stok,gambar) VALUES('$kode','$nama','$tipe','$harga','$deskripsi','$stok','$name')";
	mysql_query("$query");
	echo "window.alert('Data Berhasil Disimpan');";
	echo "window.location = 'produk.php';";
	// echo "<h2>Data Berhasil Disimpan</h2>";
}
else
{
	echo "window.alert('Data Tidak Boleh Kosong');";
	echo "window.location = 'tambahproduk.php';";
	// echo "<h2>Isikan Data Dengan Benar</h2>";	
}
echo "</script>";
?>