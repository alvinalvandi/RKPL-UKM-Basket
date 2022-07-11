<?php 
if(isset($_POST['daftar'])){
	include 'db.php';
		$daftar = mysqli_query($koneksi, "INSERT INTO user(id, nama, email, angkatan, alasan) VALUES(
			NULL,
			'".$_POST['nama']."',
			'".$_POST['email']."',
			'".$_POST['angkatan']."',
			'".$_POST['alasan']."')");
		if($daftar){
			echo "<script>
                alert('Pendaftaran Berhasil!');
                document.location.href = '../index.html';
        </script>
        ";
		} else {
        	echo "<script>
                alert('Pendaftaran Gagal!');
                document.location.href = '../form-daftar.php';
            </script> 
            ";
  		} 
	}
?>


