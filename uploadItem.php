<?php

       
        define('HOST','shareddb-w.hosting.stackcp.net');

        define('USER','anfaas-48f2');

       	define('PASS','Anfaas@123');

	define('DB','huparidatabase-3134395390');


        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
        $catname = $_GET['catname'];
        $itemname = $_GET['name'];
        $stars =$_GET['stars'];
        $ratings=$_GET['ratings'];
        $ranks=$_GET['ranks'];
        $address=$_GET['address'];
        $phone=$_GET['phone'];
        $status=$_GET['status'];
        $image=$_GET['image'];


		if($catname == '' || $itemname == '' || $status == '')
		{
	
		echo 'please fill all values';
		}
		else{

		$sql = "SELECT * FROM $catname WHERE name='$itemname'";

	        $check = mysqli_fetch_array(mysqli_query($con,$sql));

		if(isset($check)){
		 
		 echo 'uid or catimage already exist';

		}else{
            $sql = "INSERT INTO `$catname` (`name`, `stars`, `ratings`, `ranks`, `address`, `phone`, `status`, `image`) VALUES ('$itemname', '$stars', '$ratings', '$ranks', '$address', '$phone', '$status', '$image')";
            echo $sql;

		if(mysqli_query($con,$sql)){

			echo 'successfully registered';
	    
	}
		else{
				
			echo 'oops! Please try again!';
		
		}
}
		
	        mysqli_close($con);

		}