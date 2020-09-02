<?php

       
        define('HOST','shareddb-w.hosting.stackcp.net');

        define('USER','anfaas-48f2');

       	define('PASS','Anfaas@123');

	define('DB','huparidatabase-3134395390');


        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

        $uid = $_GET['uid'];
	
	$catname = $_GET['catname'];
	
	$catimage = $_GET['catimage'];

		if($uid == '' || $catname == '' || $catimage == '')
		{
	
		echo 'please fill all values';
		}
		else{

		$sql = "SELECT * FROM mcategory WHERE uid='$uid' OR catimage='$catimage'";

	        $check = mysqli_fetch_array(mysqli_query($con,$sql));

		if(isset($check)){
		 
		 echo 'uid or catimage already exist';

		}else{
		$sql = "INSERT INTO mcategory (uid,catname,catimage) VALUES('$uid','$catname','$catimage')";

		if(mysqli_query($con,$sql)){

			echo 'successfully registered';
	    
	}
		else{
				
			echo 'oops! Please try again!';
		
		}
}
			$create_table_sql ="CREATE TABLE `huparidatabase-3134395390`.`$catname` ( `name` VARCHAR(200) NOT NULL , `stars` VARCHAR(200) NOT NULL , `ratings` VARCHAR(200) NOT NULL , `ranks` VARCHAR(200) NOT NULL , `address` VARCHAR(200) NOT NULL , `phone` VARCHAR(50) NOT NULL , `status` VARCHAR(60) NOT NULL , `image` VARCHAR(200) NOT NULL )";
		  	if(mysqli_query($con,$create_table_sql)){

			echo 'successfully registered';
	    
	}
		else{
				
			echo 'oops! Please try again!';
		
		}
	        mysqli_close($con);

		}