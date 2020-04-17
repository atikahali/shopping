<?php
	//1. Create connection to database server
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "shoppingdb";
		
		//Create connection
		$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error()); 
			}

?>