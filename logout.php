<?php  
session_start();

// menghancukrna $_SESSION["pelanggan"]
session_destroy();

echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='index.php';</script>";

?>