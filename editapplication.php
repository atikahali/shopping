<?php
	//to retrieved data
	if (isset($_GET['item_id']))
		$app_id = $_GET['item_id'];
	else
		$app_id = 0;
		
	include 'dbconnect.php';
	$sql = "SELECT *
			 FROM item where item_id = $item_id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	//to edit data
	if (isset($_POST['edit']) && isset($_POST['app_id']))
	{
		$item_id = addslashes($_POST['item_id']);
		$item_name = addslashes($_POST['item_name']);
		$item_code = addslashes($_POST['item_code']);
		$item_desc = addslashes($_POST['item_desc']);
		$item_colour = addslashes($_POST['item_colour']);
	
		
		include 'dbconnect.php';
		
		$sql = "UPDATE item SET
			item_id = '$item_id',
			item_name = '$item_name',
			item_code = '$item_code',
			item_desc = '$item_desc',
			item_colour = '$item_colour',
			
			
		if(mysqli_query($conn,$sql)){
			echo "Edit is successfull!";
		}
		else 
		{
			echo 'Edit failed';
		}
		
		echo '<a href= "viewapplication.php"> Back</a>';
	}
?>



<center>
  <tr>
    <td height="90" colspan="3"><img src="zalora1.png" width="1000" height="200" /></td>
  </tr></center>
  
<center><td width="59" height="192"><?php include 'mainmenu.php' ?></td></center>
    <td width="400"><div align="center"><h1>WELCOME TO STUDENT PORTAL </h1></div></td></p>
    <td width="77">&nbsp;</td>
  
  <?php
if (!isset($_SESSION['isLogged_in']))
{
$_SESSION['isLogged_in'] = FALSE;
$_SESSION['adm_id'] = 'guest';
$_SESSION['adm_type'] = 'guest';
}

?>

   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css"/>
   
   
   <title>CSS MenuMaker</title>

<body>

<br><br>
  
 <h1> EDIT APPLICATION </h1>
    
    
   <form action="" method="post">
    	<TABLE border="1" cellpadding="5" cellspacing="2">
        	<TR>
            	<td>Item ID:</td>
                <td><input name="item_id" value="<?php echo $row['item_id']; ?>" type="text" size="50" maxlength="50"></td>
            </TR>
            <TR>
            	<td>item name :</td>
                <td><input name="item_name" value="<?php echo $row['item_name']; ?>" type="text" size="50" maxlength="50"></td>
            </TR>
            <TR>
            	<td>Item code:</td>
                <td><input name="item_code" value="<?php echo $row['item_code']; ?>" type="text" size="50" maxlength="50"></td>
            </TR
            ><TR>
            	<td>Item description:</td>
                <td><input name="item_desc" value="<?php echo $row['item_desc']; ?>" type="text" size="50" maxlength="50"></td>
            </TR>

            
            <TR>
            	<td>Item colour:</td>
                <td><input name="item_colour" value="<?php echo $row['item_colour']; ?>" type="text" size="50" maxlength="50"></td>
            </TR>
            
            
           <TR align="center">
           		<td colspan="2">
                <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
				<input type="submit" name="edit" value="Edit">
				
				</form></td>
            </TR>
		</TABLE>
            

            
            
            
			
			
				