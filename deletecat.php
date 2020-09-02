<?php

       
        define('HOST','shareddb-w.hosting.stackcp.net');

        define('USER','anfaas-48f2');

       	define('PASS','Anfaas@123');

	define('DB','huparidatabase-3134395390');


        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

        $uid = $_GET['uid'];
	    $table=$_GET['tablename'];

		if($uid == '')
		{
	
		echo 'please fill all values';
		}
		else{

	if($table=='')
	  $sql = "DELETE FROM mcategory WHERE catname = \"$uid\"" ;
	 
	   else
	   
	     $sql = "DELETE FROM $table WHERE name = \"$uid\"" ;
echo $sql;
		if(mysqli_query($con,$sql)){

			echo 'successfully deleted ';
	
	}
		else{
				
			echo 'oops! Please try again!';
		
		}
		 $sql1 = "DROP TABLE $uid";
         
         if(mysqli_query($con, $sql1)) {  
            echo "Table is deleted successfully";  
         } else {  
            echo "Table is not deleted successfully\n";
         }  
}
			
	        mysqli_close($con);

		