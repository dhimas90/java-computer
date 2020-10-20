<?php 
include '../controller/conn.php';


if (isset($_POST["submit"])) {
	$user = $_POST['user'];
	$dept = $_POST['dept'];
	$mb = $_POST['mb'];
	$capacity_ram = $_POST['capacity_ram'];
	$brand_ram = $_POST['brand_ram'];
	$processor = $_POST['processor'];
	$hdd_type = $_POST['hdd_type'];
	$capacity_hdd = $_POST['capacity_hdd'];
	$computer_name = $_POST['computer_name'];
	$user_account = $_POST['user_account'];
	$password = $_POST['password'];
	$os = $_POST['os'];
	$antivirus = $_POST['antivirus'];
	$antimalware = $_POST['antimalware'];

	$query = "INSERT INTO `comp_complete` (`id`, `user`, `dept`, `mb`, `capacity_ram`, `brand_ram`, `processor`, `hdd_type`, `capacity_hdd`, `computer_name`, `user_account`, `password`, `os`, `antivirus`, `antimalware`) VALUES ('id', '$user', '$dept', '$mb', '$capacity_ram', '$brand_ram', '$processor', '$hdd_type', '$capacity_hdd', '$computer_name', '$user_account', '$password', '$os', '$antivirus', '$antimalware')";

		// notif
	if ( mysqli_query ( $conn, $query)) {
						echo "<script>alert('received!');</script>";
	} else {
						echo "error" . $query . "" . mysqli_error($conn);}

	mysqli_close($conn);
	}

header("location:computer.php");
?>