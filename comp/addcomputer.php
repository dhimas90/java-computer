<?php 
include '../attribut/header.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Computer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/Bootstrap.min.css">
	
</head>
<body>

		<div class="container">
			<div class="container-md">
			<!-- start form -->
			<form>
				<div class="form-group">
			    	<label for="user">Name of User</label>
			    	<input type="text" class="form-control" id="user" placeholder="User" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="dept">Department</label>
			    	<input type="text" class="form-control" id="dept" placeholder="Department" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="mb">Motherboard</label>
			    	<input type="text" class="form-control" id="mb" placeholder="Mother Board" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="capacity_ram">Kapasitas Ram</label>
			    	<input type="text" class="form-control" id="capacity_ram" placeholder="RAM Capacity" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="brand_ram">Brand RAM</label>
			    	<input type="text" class="form-control" id="brand_ram" placeholder="RAM Brand" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="processor">Processor</label>
			    	<input type="text" class="form-control" id="processor" placeholder="Processor Series" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="hdd_type">HDD/SSD Harddisk</label>
			    	<input type="text" class="form-control" id="hdd_type" placeholder="Fill with HDD/SSD" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="computer_name">Computer Name</label>
			    	<input type="text" class="form-control" id="computer_name" placeholder="Computer Name" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="user_account">User Account</label>
			    	<input type="text" class="form-control" id="user_account" placeholder="User Account" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="password">Password</label>
			    	<input type="text" class="form-control" id="password" placeholder="password" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="os">Operating System</label>
			    	<input type="text" class="form-control" id="os" placeholder="Operating System" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="antivirus">Antivirus</label>
			    	<input type="text" class="form-control" id="antivirus" placeholder="Name of Antivirus" autocomplete="off" required>
		 		</div>
		 		<div class="form-group">
			    	<label for="antimalware">Antimalware</label>
			    	<input type="text" class="form-control" id="antimalware" placeholder="Name of Antimalware" autocomplete="off" required>
		 		</div>
		 		<button type="submit" class="btn btn-outline-success" name="submit">Submit</button>
			</form>
			<!-- end form -->
			</div>
		</div>
		<br><br><br>
<?php 
include '../attribut/footer.php';
?>

</body>
 	<script src="../asset/js/jquery.js"></script>
    <script src="../asset/js/popper.js"></script>
    <script src="../asset/js/bootstrap.js"></script>
</html>