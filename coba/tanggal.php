<!DOCTYPE html>
<html>
<head>
	<title>Tanggal & Tahun</title>
</head>
<body>
<form action="" method="post">
	<?php 
	echo"Tanggal Lahir : <select size='1' name=''>
			<option>=>Pilih Tanggal<=</option>";
		for($a=1; $a<=31; $a++) {
			echo "<option>$a</option>";
		}
	echo "</select><br />";

	echo"Tahun Lahir : <select size='1' name=''>
			<option>=>Pilih Tahun<=</option>";
		for($a=1981; $a<=2000; $a++) {
			echo "<option>$a</option>";
		}
	echo "</select>";
	?>
</form>
</body>
</html>