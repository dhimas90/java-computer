<?php 
include 'conn.php';
$query = "SELECT * FROM comp_complete WHERE id = '$id'";
$data = mysqli_query($conn, $query) or die (mysqli_error());
$jumlah = mysqli_num_rows ($data);
var_dump($query);
var_dump($data);
var_dump($jumlah);
?>