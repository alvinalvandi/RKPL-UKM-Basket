<?php
require 'functionedit.php'; 
    $id = $_GET["id"];

if( hapus($id) > 0 ) {
    
    echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = '../user/adduser.php';
        </script>
        ";
} else {
        echo "<script>
                alert('data gagal dihapus!');
                document.location.href = '../user/adduser.php';
            </script> 
            ";
  } 

?>