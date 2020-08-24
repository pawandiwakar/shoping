<!DOCTYPE html>
<html>
<head>
	<title>welcome to shoppee.com</title>
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/foooter.css">
</head>
<body>
<div class="header">
	<?php 
include 'header.php';
	?>
</div>
<div class="sub-menu">
	<div class="sub">
	<a href="#">Home</a><span> / </span><span>Delivery Address</span>
</div>
</div>
<div class="shop-checkout">
	<div class="shopping-cart"><br>
		<h2>Delivery Address</h2><br>
		<img src="images/step2.png" class="step"><br>
		<div class="address">
		<p class="p">Enter Your Delivery Information</p>
		<form>
		<p><input type="text" name="" placeholder="First Name*"></p>
		<p><input type="text" name="" placeholder="Last Name*"></p>
		<p><input type="text" name="" placeholder="Mobile No*"></p>
		<p><textarea>Address*</textarea></p>
		<p><select><option>Select Country</option>
					<option>India</option>
					<option>Srilanka</option>
					<option>West Indies</option>
					<option>Pakistan</option>		
		</select></p>
		<p><input type="text" name="" placeholder="State*"></p>
		<p><input type="text" name="" placeholder="City*"></p>
		<p><input type="text" name="" placeholder="Zip Code*"></p>
		<p><input type="submit" name="" value="Continue > >" id="con"></p>
		</form>
		</div>
		
	</div>	
	<div class="shopping-cart1"><br>
		<h3>YOUR CART ITEMS</h3><br>
		<div class="product"><br>
			<h3 id="pn">Product Name</h3>
			<p>Product Code:ct002</p>
			<p>Price:<span>Rs.198</span></p>
			<p>Quantity:1,Sub total:Rs.198</p>
		</div>
		<div class="price">
			<p>Sub Total : ₹ 198.00</p>
			<h3 style="color: #27a8ba;">Estimated Total : ₹ 188.00</h3>
		</div>
	</div>
</div><div class="clr"></div>
	
<div class="footer">

	<?php include 'foooter.php'; ?>
</div>
</body>
</html>