<!DOCTYPE html>
<html>
<head>
	<title>Form Upload</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="prosesupload.php">
Pilih File Foto:<br>
<input type="file" name="file_foto" size="20"><br>
<p>
Keterangan : <br><input type="text" name="keterangan" size="50" maxlength="5"></p>
<p><input type="submit" value="Upload">
</body>
</html>