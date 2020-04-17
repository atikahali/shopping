<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css"/>
   
   <title>LAURA</title>
<body>

<center>
  <tr>
    <td height="90" colspan="3"><img src="zalora1.jpg" width="1000" height="400" /></td>
  </tr></center>
  <tr>
    <center><td width="59" height="192"><?php include 'mainmenu.php' ?></td></center>
      <td width="400"><div align="center"><h1>DELETE</h1></div></td></p>

    <td width="77">&nbsp;</td>
    
     <div align="center">
<table width="1340" border="1">
  </tr>

<?php 
$adminId = '';
$username = '';
$name ='';
$phone = '';
$email = '';
if (isset($_GET['username'])) {
	$username = $_GET['username'];
	// Cre ate connection
	include 'dbconnect.php';
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT adminId, username, name, phone, email 
			FROM admin
			WHERE username='$username'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		$row = mysqli_fetch_assoc($result);
		$adminId = $row['adminId'];
		$username = $row['username'];
		$name = $row['name'];
		$phone = $row['phone'];
		$email = $row['email'];		
		
	} else {
		echo "0 results";
	}
	
	mysqli_close($conn);
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?username=<?php echo $row['username']; ?>">

<table border="1" cellpadding="5" cellspacing="2">
<tr><td>Admin ID:</td>
<td><input type="text" name="adminId" value="<?php echo $adminId?>"  disabled="disabled"></td></tr></br>
<tr><td>Username:</td>
<td><input type="text" name="username" value="<?php echo $username?>"  disabled="disabled"></td></tr></br>
<tr><td>Name:</td>
<td><input type="text" name="name" value="<?php echo $name?>" disabled="disabled"> </td></tr></br>
<tr><td>Phone Number</td>
<td><input type="text" name="phone" value="<?php echo $phone?>" disabled="disabled"></td></tr></br>
<tr><td>Email:</td>
<td><input type="text" name="email" value="<?php echo $email?>"  disabled="disabled"></td></tr></br>
</br>
<tr><td colspan="2"><input type="hidden" name="username" value="<?php echo $username?>">
<input type="submit" name="DeleteAdmin" value=" OK "></br>
</form></td></tr>
</table>
<?php
if (isset($_POST['DeleteAdmin'])){
	$username = $_POST['username'];

	$conn = mysqli_connect("127.0.0.1", "root", "", "collegedb") or die (mysql_error ());

	// SQL query
	$sql = "DELETE FROM admin
				WHERE username = '$username'";

	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		echo "The record is deleted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>
</br><a href="admin_view.php">Back</a>
</table>
</tr>
  <tr><td height="55" colspan="2" align="center" valign="middle"><?php include ("footer.php");?></td></tr>
</table>
</div> 
</body>
</html>