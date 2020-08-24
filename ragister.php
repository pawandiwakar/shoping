<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Register</title>
<link rel="stylesheet" href="css/ragister.css" type="text/css">
</head>

<body>
<div class="topheader">
<div class="lft-top"><h1 id="log">A2ZSHOPPING.COM</h1></div>
<div class="rt-top"><div id="num"><p id="dtl"><span>Toll Free:-</span>+91  9834235454</p><p><b>Already Have A Acount</b><button><a href="wish-list.php">Login Here</a></button></p></div></div>
</div>
<hr>
<div class="body-section">
<?php
if(@$_GET['success']==101){

echo "<h1 align='center'>Successfull</h1>";
}
elseif(@$_GET['failed']==404)
{
echo "Try again";

}



?>
<div class="lt-stion">
<form action="reg_insert.php" method="post">

<table id="tbl">
<tr><th colspan="5"  id="hd">Personal Info..</th></tr>


<tr><td></td><td>Name:*</td><td><input type="text" name="name" placeholder="Enter name here" required></td></tr>
<tr><td></td><td>Last Name:*</td><td><input type="text" name="l_name" placeholder="Enter last name here"></td></tr>
<tr><td></td><td>Mobile No:*</td><td><input type="text" name="m_num" placeholder="Enter number here"></td></tr>
<tr><td></td><td>Gender:*</td><td><input type="radio" name="radi" value="male">Male <input type="radio" name="radi" value="male">Female</td></tr>

<tr ><th id="hd">Login Info..</th></tr>

<tr><td></td><td>E-mail Id:*</td><td><input type="text" name="eml" placeholder="Enter email here"></td></tr>
<tr><td></td><td>Password:*</td><td><input type="text" name="pwd" placeholder="password"></td></tr>
<tr><td></td><td>Confirm password:*</td><td><input type="text" name="cpwd" placeholder="Confirm password"></td></tr>


<tr ><th id="hd">Other Info.</th></tr>

<tr><td></td><td></td> <td> <input type="Checkbox" name="chk"  > Sign Up:-</td></tr>
<tr><td></td><td></td> <td><input type="Checkbox" name="term" >  Term & condition-</td> </tr>
<tr><td></td><td></td><td><input type="text" name="code" class="cod" placeholder="Enter code" >Capcha code</td></tr>
<tr><td></td><td></td><td><input type="submit" name="sub" value="Create My Account"><input type="Reset" name="reset" value="Reset"></td></tr>




</table>
</form>


</div>

<div class="rt-stion"><div id="why"><p>WHY REGISTER WITH</p><p id="a2z">A2ZSHOPPEE</p></div>
 <div id="pro">
  <p> <span> -> </span>Save product yuo want to buy in your favorite line</p>
   <p> <span> -> </span>Add products in your shopping cart for further process</p>
   <p> <span> -> </span>Save product yuo want to buy</p>
  <p> <span> -> </span>Review product buing</p>
 </div>
</div>



</div>





</body>
</html>
