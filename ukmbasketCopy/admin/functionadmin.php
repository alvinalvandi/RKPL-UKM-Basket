<?php

	$conn = mysqli_connect ("localhost", "root", "", "ukmbasket");
   


function registrasi($data) {
    $conn = mysqli_connect ("localhost", "root", "", "ukmbasket");
    
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO admin VALUES('','$username','$password')");
    
    return mysqli_affected_rows($conn);

}

?>