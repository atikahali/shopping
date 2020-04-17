<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css"/>
<title>Add Item</title>
</head>

<body>

<center>
  <tr>
    <td height="90" colspan="3"><img src="zalora1.jpg" width="1000" height="400" /></td>
  </tr></center>
    
     <center><td width="59" height="192"><?php include 'mainmenu.php' ?></td></center>
    <td width="400"><div align="center"><h1>WELCOME TO LAURA SHOPPING </h1></div></td></p>
    <td width="77">&nbsp;</td>
    
    <?php
if (!isset($_SESSION['isLogged_in']))
{
$_SESSION['isLogged_in'] = FALSE;
$_SESSION['adm_id'] = 'guest';
$_SESSION['adm_type'] = 'guest';
}

?>
    
    <h1> Add Item </h1>
    
    
    <form method="post" action=""?>
   		<TABLE border="1" cellpadding="5" cellspacing="2">
    
    <TR>
    <td>Item id :</td>
    <td><input name="item_id" type="text" value="" /></td>
    </TR>
  
  	<TR>
   	<td>Item name:</td>
    <td><input name= "item_name" type="text" value=""></td>
    </TR>
    
    <TR> 
   	<td>Item code :</td>
    <td><input name="item_code" type="text" value=""></td>
    </TR>
    
    <TR>
   	<td>Item description:</td>
    <td><input name="item_desc" type="text" value=""></td>
    </TR>
    
    
    <TR> 
    <td>Item colour:</td>
    <td><input name="item_colour" type="text" value=""></td>
    </TR>
    
  
    
    <TR align="center">
      <td colspan="2">
 		<input NAME="reset" type="reset" value="RESET">
    	<input name="register" type="submit" value="SUBMIT">
	</td>
    </TR>
    
    </form>
    </TABLE>
    
  <?php
	
	if (isset($_POST['register']))
	{
		$item_id = ($_POST['item_id']);
		$item_name = ($_POST['item_name']);
		$item_code= ($_POST['item_code']);
		$item_desc=($_POST['item_desc']);
		$item_colour=($_POST['item_colour']);
	
		
		include 'dbconnect.php';
		
		$sql= "INSERT INTO item(item_id,item_name,item_code,item_desc,item_colour) 
		VALUES ('$item_id', '$item_name', '$item_code', '$item_desc', '$item_colour')";
		
			//Execute the query 
		if(mysqli_query($conn,$sql)){
			echo "Add is successfull!";
		} 
		else{
			echo "Error: " . $sql . "<br>". mysqli_error($conn);
		}
		mysqli_close($conn);
			  
	}
			?>
	
	  
  </tr>
</div>
</body>
</html>

