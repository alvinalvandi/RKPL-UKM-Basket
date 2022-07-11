 <?php 
 
$connection = mysqli_connect("localhost","root","","tutorialweb");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
<?php 
    
       
        mysqli_query($connection, "DELETE FROM galeri WHERE id = $id");
    
        return mysqli_affected_rows($connection);
    if( hapus($id) > 0 ) {
    
    echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = 'galeri/foto.php';
        </script>
        ";
    } else {
        echo "<script>
                alert('data gagal dihapus!');
                document.location.href = 'galeri/foto.php';
            </script> 
            ";
  } 
?>