<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
  header("Location: ../login.php");
  exit;
}
include '../koneksi.php';
include 'conn.php';
include '../attribut/header.php';
?>


        <!-- isi start here -->

        <div class="container-sm">
          <table class="table">
            <!-- table head -->
            <thead class="table-striped table-dark">
              <th scope="col">No</th>
              <th scope="col" width="200px">User</th>
              
              <th scope="col" width="300px">Processor</th>
              <th scope="col">RAM</th>
              <th scope="col">HDD</th>
              <th scope="col" width="140px" ;>Action</th>
            </thead>

            <tbody>
            <?php
		        $no = 1;
		        $sql = "SELECT * FROM comp_complete";
		        $data = mysqli_query ($conn, $sql) or die(mysqli_error());
		        $jumlah = mysqli_num_rows ($data);
		        while ($isi = mysqli_fetch_array ($data)) {
		    ?>
              <td><?php echo $no++; ?></td>
              <td><?php echo $isi['user']; ?></td>
              
              <td><?php echo $isi['processor']; ?></td>
              <td><?php echo $isi['capacity_ram']; ?></td>
              <td><?php echo $isi['capacity_hdd']; ?></td>
              <td>

                  <button type="button" class="btn btn-outline-primary btn-sm" name="button">Detail</button>
                
              </td>
            </tbody>
            <?php } ?>
          </table>
        </div>

        <!-- Pagination --> <!-- footer start here -->
<?php
include '../attribut/footer.php';
?>

</body>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../asset/js/jquery.js"></script>
    <script src="../asset/js/popper.js"></script>
    <script src="../asset/js/bootstrap.js"></script>

</html>
