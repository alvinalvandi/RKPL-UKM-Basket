<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="style.css">
	<title>Pendaftaran Online</title>
</head>
<body style="background-image: url('gambar/img.jpg'); background-size: cover; ">
	<div class="wrapper">
		<h3>Formulir Pendaftaran Online</h3><hr><br>
		
		<form action="proses-daftar.php" method="post">

			Nama Lengkap :<br>
			<textarea name="nama" rows="2" cols="45"></textarea><br><br>
			Email :<br>
			<textarea name="email" rows="2" cols="45"></textarea><br><br>
			Angkatan :<br>
			<textarea name="angkatan" rows="2" cols="45"></textarea><br><br>
			Alasan :<br>
			<textarea name="alasan" rows="7" cols="45"></textarea><br><br>
			<input type="submit" name="daftar" value="Daftar">

		</form>
	</div>	
</body>
</html>