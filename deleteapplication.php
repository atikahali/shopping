<?php
		
		// to retrieve data		
		if (isset($_GET['item_id'])) {
			$item_id = $_GET['item_id'];
			include 'dbconnect.php';
			
			$query = "DELETE FROM item where item_id = $item_id";
			$result = mysqli_query($conn, $query);;
			
			if ($result)
				echo 'Delete item Success';
			else
				echo mysqli_error($conn);
				
			echo '<a href="viewapplication.php">Back</a>';	
		}
		?>
  