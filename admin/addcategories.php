<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
	<link href="css/dashboard.css" rel="stylesheet" type="text/css">
	<link href="css/adminleft.css" rel="stylesheet" type="text/css">
	<script src="jquery/jquery.js"></script>
	<script src="jquery/adminleft.js"></script>
</head>
<body>
	<div class="header">
		<?php
		include 'include/admintopheader.php';
		?>
	</div>

	<div class="body">
		<div class="leftpart">
			<?php 
				include 'include/adminleft.php';
			?>
		</div>		<div class="rightpart">
			<form method="post" action="allaction.php">
				<input type="text" name="cats" placeholder="Enter new category">
				<br><br>
				<center>
					<input type="submit" name="category" value="Submit">
				</center>
			</form>

			
		</div>
	</div>

</body>
</html>