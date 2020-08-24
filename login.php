


<?php
if(isset($_POST['login']))
  {
// start vaalidation 

    if($_POST['email']== ""  ||  $_POST['password']== " ")
   {
    
	 header("location:index.php?value=1");



}


 else
     {
  
    $u_eml = $_POST['email'];

      $u_pwd = $_POST['password'];
	  
                include "include/db.php";
       
	     $login_query = "select * from resisters where c_email='$u_eml' AND c_password='$u_pwd'";
 
        $login_run =  mysqli_query($conn,$login_query);
 
        $count = mysqli_num_rows($login_run);
 
      if($count>0)
	        
			    {
				
				
				//  .  . . . .fetch customer name for show in index page . . . . 
				  
				 /* session_start();
				
				   while($cst_nm = mysqli_fetch_array($login_run))
				     {
								
			           $_SESSION[$c_name]= $cst_nm['c_name'];
				
				     $_SESSION[$c_name]
				
				
				         header("location:index.php");
						 
				        
						 } */
				
				
				setcookie("ready","1",time()+(30*24*60*60));
            
	   
                       header("location:index.php");
           
		      }


          else
                
				{
   
                    header("location:wish-list.php?err=404");
                }

        }

 }










?>