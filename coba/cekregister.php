<?php
mysql_connect("localhost","root","password");
mysql_select_db("login");
// cek kesamaan username
$check = "select id from user where username = '".$_POST['username']."';";
$qry = mysql_query($check) or die ("Could not match data because ".mysql_error());
$num_rows = mysql_num_rows($qry);
if ($num_rows != 0) {
echo "Maaf, username  sudah ada yang punya<br>";
echo "<a href=register.php>Anda belum beruntung, silakan dicoba kembali</a>";
exit;
} else {
// masukkan data
$insert = mysql_query("insert into user values ('NULL', '".$_POST['username']."',
'".$_POST['password']."')")
or die("Could not insert data because ".mysql_error());
// tampilkan pesan sukses
echo "Akun Anda Telah Selesai Dibuat!<br>";
echo "Sekarang anda bisa <a href=login.html>Login sebagai member web Cyber4rt</a>";
}
?>