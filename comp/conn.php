<?php
// koneksi dimulai disini
$host = "localhost";
$root = "root";
$pass = "enterajadhim";
$tb_db = "it_database";


$conn = mysqli_connect ($host, $root, $pass, $tb_db );

if (!$conn) {
  echo "Error" . mysqli_connect_error();
  exit();
}


?>
