<?php
mysql_connect("localhost","root","password");
mysql_select_db("media");
$check = "select id from login where username = '".$_POST['username']."';";
$qry = mysql_query($check) or die ("Could not match data because ".mysql_error());
$num_rows = mysql_num_rows($qry);
echo "<script language=\"Javascript\">\n";
if ($num_rows != 0) {
	echo "window.alert('Maaf, Username Sudah Ada yang Punya');";
	echo "window.location = 'signup.php';";
} else {
$insert = mysql_query("insert into login values ('NULL', '".$_POST['username']."',
'".$_POST['password']."')")
or die("Could not insert data because ".mysql_error());
	echo "window.alert('Akun Sudah Berhasil Terdaftar');";
	echo "window.location = 'admin.php';";
}
echo "</script>";
?>