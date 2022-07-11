<?php 
//koneksi ke database
require 'functionedit.php';

//ambil data dari url
$id = $_GET["id"];

//query berdasarkan id
$update = query("SELECT * FROM user WHERE id = $id")[0];
    
//cek apakah tombol submit sudah ditekan atau belom
if( isset($_POST["submit"]) ){
   if( ubah($_POST) > 0 ) {
       echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = '../user/adduser.php'
            </script>
       ";
   } else {
       echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = '../user/adduser.php'
            </script>
       ";
   }
    
   
 }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Halaman Admin</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../Home/index.php">Logout</a></li>
                      
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
                      <li>
                        <a href="../user/adduser.php"><i class="fa fa-desktop "></i>Daftar Pendaftar</a>
                    </li>
					
              </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Update Data</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
						
  <form action="" method="post">
            <ul>
            
                <input type="hidden" name="id" value="<?= $update["id"]; ?>">
            
                <label for="nama">Nama : </label>
                <input class="form-control" type="text" name="nama" id="nama" required value="<?= $update["nama"]; ?>">
            
            
                <label for="email">email : </label>
                <input class="form-control" type="text" name="email" id="email" required value="<?= $update["email"]; ?>">
            
            
                <label for="angkatan">angkatan : </label>
                <input class="form-control" type="number" name="angkatan" id="angkatan" required value="<?= $update["angkatan"]; ?>">
                
                 <label for="alasan">alasan : </label>
                <input class="form-control" type="text" name="alasan" id="alasan" required value="<?= $update["alasan"]; ?>">
                
                <label for="konfirmasi">konfirmasi : </label>
                <input class="form-control" type="text" name="konfirmasi" id="konfirmasi" required value="<?= $update["konfirmasi"]; ?>">
            
             
			 <br>
                <!--
				<a type="submit" name="submit" class="btn btn-danger btn-lg btn-block">Submit</a>
				-->
				<button class="btn btn-danger btn-lg btn-block" name="submit">
							Submit
				</button>
            
        </ul>
    
    </form>    
    
 	
                        </div>
                    </div>
                    
                    
                </div>
                
                </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
