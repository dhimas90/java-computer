<?php
$host = 'localhost';
$user = 'root';
$password = 'enterajadhim';
$namedb = 'java';



$conn = mysqli_connect ($host, $user, $password, $namedb);

if ( mysqli_connect_errno()) {
  echo "koneksi gagal";
}
// start register function
function register($data) {
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);
  $email = strtolower(stripslashes($data["email"]));
  $level = $data["level"];
  $date = $data["date"];


  // cek username
  $name = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
  if (mysqli_fetch_assoc($name) ) {
    echo "<script>
            alert('Username sudah terdaftar!');
          </script>";
          return false;
  }
  // cek konfirmasi password
  if ( $password !== $password2) {
      echo "<script>
            alert('Konfirmasi Password tidak sesuai');
      </script>";
      return false;
  }
  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);
  //tambahkan user baru
  mysqli_query($conn, "INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `timestamp`) VALUES ('', '$username', '$password', '$email', '$level', '$date');");


  return mysqli_affected_rows($conn);
}
// end register function
?>
