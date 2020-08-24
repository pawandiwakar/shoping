<?php
include "include/db.php";

if(isset($_POST['sub'])){

$u_id=uniqid();
$name=$_POST['name'];
$l_name=$_POST['l_name'];
$m_num=$_POST['m_num'];
$radi=$_POST['radi'];
$eml=$_POST['eml'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$code=$_POST['code'];
 
 $insrt_query="insert into resisters(c_u_id,c_name,c_l_name,c_mobile,c_gender,c_email,c_password,c_confirm_pwd,c_capcha) values('$u_id','$name','$l_name','$m_num','$radi','$eml','$pwd','$cpwd','$code')";
 
$insrt_run= mysqli_query($conn, $insrt_query);
 
if($insrt_run){
header("location:ragister.php?success=101");

}
else{
header("location:ragister.php?failed=404");

}

}






?>