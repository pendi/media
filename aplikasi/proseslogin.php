<?php
session_start();
mysql_connect("localhost","root","password");
mysql_select_db("media");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM login WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
echo "<script language=\"Javascript\">\n";
if($jumlah == 0) {
	echo "window.alert('Username Belum Terdaftar');";
	echo "window.location = 'login.php';";
} else {
if($pass <> $hasil['password']) {
	echo "window.alert('Password Anda Salah');";
	echo "window.location = 'login.php';";
} else {
$_SESSION['username'] = $hasil['username'];
header('location:admin.php');
}
}
echo "</script>";
?>