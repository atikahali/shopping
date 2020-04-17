<?php
		
		if (isset($_GET['memberid']))
			$memberid = $_GET['memberid'];
		else
			$memberid = 0;
		
		include 'dbconnect.php';
		$sql = "SELECT *
				 FROM member where memberid = $memberid";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		?>
		
		<h3>MEMBER PROFILE</h3>
		
		
		
        <br />
        <a href="stud_view.php"><input type="Submit" name="view" value=" VIEW "/>
   		<a href="stud_edit.php"><input type="Submit" name="edit" value=" EDIT "/> 
   		<!--<a href="stud_delete.php"><input type="Submit" name="delete" value=" DELETE " />-->
	
  </tr>