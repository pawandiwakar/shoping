<html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/header.css" type="text/css">
<link rel="stylesheet" href="css/cart.css" type="text/css" >
<link rel="stylesheet" href="css/footer.css" type="text/css">

</head>
<body>

<div class="header">
	<?php
	if(isset($_COOKIE{'ready'})){
	
	include 'head1.php';
	}
	else{
include 'header.php';
}

?>
</div>


<div class="section">
	<?php
include 'addcart.php';

?>
</div>
<div class="footer">
<?php
include 'footer.php';

?>
</div>







</body>
</html>