<?php
//koneksi ke MySQL
mysql_connect("localhost","root","password");
mysql_select_db("media");

$keterangan = $_POST['keterangan'];
$folder = "gambar";
$tmp_name = $_FILES["file_foto"]["tmp_name"];
$name = $folder."/".$_FILES["file_foto"]["name"];

//kode untuk upload ke folder gambar
move_uploaded_file($tmp_name, $name);

//masukkan datanya ke database
$input = mysql_query("INSERT INTO gambar VALUES(null,'$keterangan','$name')");

if($input){
    //jika berhasil kita redirect ke halaman untuk menampilkan foto
    // header("location: tampil.php");
  echo "berhasil";
}else{
    echo "gagal";
}
?>