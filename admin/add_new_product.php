<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
	<link href="css/dashboard.css" rel="stylesheet" type="text/css">
	<link href="css/adminleft.css" rel="stylesheet" type="text/css">
	<link href="css/addproduct.css" rel="stylesheet" type="text/css">
	<script src="jquery/jquery.js"></script>
	<script src="jquery/adminleft.js"></script>
</head>
<body>
	<div class="header">
		<?php
		include 'include/admintopheader.php';
		?>
	</div>
	<div class="admin-left">
		<?php
		include 'include/adminleft.php';
		?>

	</div>


	<div class="admin-right">
		<?php
		include 'include/adminproduct.php';
		?>
	</div>
</body>
</html>