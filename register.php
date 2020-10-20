
<!-- php script -->
<?php
include 'koneksi.php';


if (isset($_POST["register"]) ) {
  if (register ($_POST) > 0 ) {
    echo "<script>
              alert('user baru berhasil ditambahkan!');
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>

<!-- end of phpp script -->
<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <style>
      .container {
        width: 500px;
      }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top">
                <a class="navbar-brand" href="#">Java Agritech</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                    <button type="button" name="login" class="btn btn-outline-success"><a href="login.php">Login</a></button>
                  </div>
    </nav>
    <div class="">
      

    </div>
    <br><br><br>

      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h3>Form Registrasi</h3>
            
            <br>
            

                <form action="register.php" method="post">
                  <!-- login -->
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" autocomplete="off" required>
                    <small id="username" class="form-text text-muted">Masukkan username untuk login</small>
                  </div>
                  <!-- password -->
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" autocomplete="off" required>
                    <small id="password" class="form-text text-muted">Masukkan kata sandi untuk masuk</small>
                  </div>
                  <!-- password2 -->
                  <div class="form-group">
                    <label for="password2">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="password2" id="password2" autocomplete="off" required>
                    <small id="password" class="form-text text-muted">Masukkan kata sandi kembali</small>
                  </div>
                  <!-- email -->
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" autocomplete="off" required>
                    <small id="email" class="form-text text-muted">Masukkan Email yang masih aktif</small>
                  </div>
                  <!-- level -->
                  <div class="form-group">
                    <label for="level">Jabatan</label>
                    <input type="text" class="form-control" name="level" id="level" autocomplete="off" required>
                    <small id="level" class="form-text text-muted">Masukkan jabatan</small>
                  </div>
                  <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
                  <!-- button -->
                      <button type="submit" name="register" class="btn btn-success">Register</button>

                </form>
          </div>
        </div>
      </div>
<br><br><br>
<footer style="background-color: #999">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">Administrator | Java Agritech</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- js style -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>



  </body>
</html>
