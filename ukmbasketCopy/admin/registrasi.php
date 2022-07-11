<?php 
require 'functionadmin.php';

 if(isset($_POST["register"])) {
     
     if( registrasi($_POST) > 0) {
         echo "<script>
            alert('tes admin');
         </script>";
     } else {
         echo mysqli_error($conn);
     }
 }


?>
<!DOCTYPE html>
<html>
<head>
    <title> Halaman tes</title>
    
    </head>

<body>
    
    <h1>Halaman daftar Admin</h1>
   
    <form action="" method="post">
    
    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>    
         <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
            
        </li> 
         <li>
           <button type="submit" name="register">Tes daftar admin</button>
        </li>    
    </ul>
    
    
    </form>
    
    </body>

</html>