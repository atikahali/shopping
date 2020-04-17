<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css"/>
<title>Add Itemn</title>
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


<h1>Admin Add</h1>
<form method="post" action="admin_add.php">
<table border="1" cellpadding="5" cellspacing="2">
<tr><td>Admin ID:</td>
<td><input type="text" name="adminId" value=""></td></tr></br>
<tr><td>Username:</td>
<td><input type="text" name="username" value=""></td></tr></br>
<tr><td>Name:</td>
<td><input type="text" name="name" value=""></td></tr></br>
<tr><td>Phone Number:</td>
<td><input type="text" name="phone" value=""></td></tr></br>
<tr><td>Email:</td>
<td><input type="text" name="email" value=""></td></tr></br>
</br>
<tr><td colspan="2"><input type="submit" name="AddAdmin" value=" OK "></br>
</form></td></tr>
</table>

<?php
if (isset($_POST['AddAdmin'])){
	$adminId = $_POST['adminId'];
	$username = $_POST['username'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	
	include 'dbconnect.php';

	// SQL query
	$sql = "INSERT INTO admin 
				(adminId, username, name, phone, email)
				VALUES
				('$adminId',
				'$username',
				'$name',
				'$phone',
				'$email')";

	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>
</br><a href="admin_view.php">Back</a>
