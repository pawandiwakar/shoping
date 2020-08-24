
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to A2z Shopping</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/foooter.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	
</head>
<div class="header">
	<?php 
include 'header.php';
	?>
</div>
<div class="sub-menu">
	<div class="sub">
	<a href="#">Home</a><span> / </span><span>Contact Us</span>
</div>
</div>
<div class="contact"><br>
<div class="sub"><h1 style="border-bottom: 1px dotted grey;">Contact Us</h1><br>
	<div class="part">
<h3>HAVE A QUERY ?</h3><br>
<p>Just Fill the Below Information:</p>
<form name="frm" method="post">
	<p><input type="text" name="" placeholder="First Name*" id="name">
	<input type="text" name="" placeholder="Last Name*" id="name"></p>
	<P><input type="text" name="" placeholder="Mobile Number*"></P>
	<p><input type="text" name="" placeholder="Email*"></p>
	<p><textarea type="text" name="" placeholder="Enquiry/Comments*"></textarea></p>
	<p><input type="text" name="" id="code" placeholder="Enter Code*"></p>
	<p><input type="submit" name="" value="Submit" id="btn"><input type="submit" name="" value="Reset" id="btn"></p>
</form>	
</div>
<div class="part">
	<h3>HOW TO REACH ?</h3><br>
	<p>Feel free to call us, we will be very happy to assist you.</p><br>
	<h2>Shoppee.com</h2>
	<p>B 3,Sector 2</p>
	<p>Noida, Up.</p><br><br>
	<p>CALL US:</p>
	<p>+91 98408 73300 Mobile</p>
	<p>+91 98408 73300 Mobile</p><br>
	<p>EMAIL:</p>
	<p>contact@abc.com</p><br>
	<p>WEBSITE:</p>
	<p>www.shoppee.com</p>
</div>
</div><br>
</div><hr>
<div class="contact">
	<div class="sub"><br>
		<h3>GOOGLE MAP</h3>
		<div class="map"></div>
	</div>
</div><hr><br>

<div class="footer">

	<?php include 'foooter.php'; ?>
</div>
</body>
</html>