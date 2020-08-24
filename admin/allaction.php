<?php 
		include 'include/db.php';

		if(isset($_POST['category']))
		{
			if($_POST['cats']==""){
		header("location:addcategories.php?error=404");

		}
		else{

			$uid=uniqid();
			$cats=$_POST['cats'];
		

			$sql="insert into category_list(cats_uid,category_name) values('$uid','$cats')";
			
			$run=mysqli_query($conn,$sql);
			
			if($run){

				header("location:addcategories.php?result=101");
			}

			else{
				
				header("location:addcategories.php?error=404");
			}
		}
	}
?>