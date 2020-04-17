<?php

    //to retreive data 
	   if(isset($_GET['studmatricno'])){
		   $studmatricno = $_GET['studmatricno'];
		   include 'dbconnect.php';
		   
		   $sql = "DELETE FROM student where studmatricno = $studmatricno";
		   $result = mysqli_query($conn, $sql);
		   
		if(mysqli_query($conn,$sql)){
			echo "Delete is successfull!";
		}
		else 
		{
			echo 'Delete failed';
		}
		
		echo '<a href= "stud_view.php"> Back</a>';
	}
	   ?>