<!-- php script -->
<?php
// session
session_start();

if ( isset ($_SESSION["login"])) {
    header("Location: comp/computer.php");
    exit;
}

include 'koneksi.php';

if ( isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $name = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
  // check Username
  if (mysqli_num_rows($name) === 1) {
    // check PASSWORD_DEFAULT
    $databaris = mysqli_fetch_assoc($name);
    if (password_verify($password, $databaris["password"])) {
      // set session
      $_SESSION["login"] = true;
      header ('Location: comp/computer.php');
      exit;
    }
  }
  $error = true;
}
?>

<!-- end of phpp script -->

<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <style>
      .container {
        width: 500px;
      }
    </style>
  </head>
  <body>
  
  <!-- navbar -->
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
		              </div>
	  </nav>
  <!-- end navbar -->
  <br><br><br>
    <div style="text-align: center">
      <img width="10%" height="10%" src="img/logo1.jpg">
    </div>
      <div class="container">
          
        <div class="row">
          <div class="col-sm">
          		<br><br><br>
                <form action="" method="post">
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
                  <!-- salah password -->
                  <?php if (isset($error)) : ?>
          <p style="color:red; font-style: italic;">*Username atau password salah</p>
      <?php endif; ?>
                  <!-- button -->
                      <button type="submit" name="login" class="btn btn-primary">Login</button>
                      <button type="button" class="btn btn-outline-success"><a href="register.php">Registrasi</a></button>
                </form>
          </div>
        </div>
      </div>
      <br><br><br><br>
      <!-- footer  -->
    <div class="fixed-bottom">
		<footer style="background-color: #777; padding: 2px;  font-size: 12px;">
		      <div class="container" style="text-align: center; color: white;">
		        <span>copyright@Java Agritech | Administrator</span>
		      </div>
		</footer>
		</div>
<!-- js style -->

  </body>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>

</html>
