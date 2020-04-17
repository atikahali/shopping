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
    <center><td width="59" height="100"><?php include 'mainmenu.php' ?></td></center>
      <td width="400"><div align="center"><h1>MEMBER DELETE</h1></div></td></p>

    
     <div align="center">
<table width="1340" border="1">
  </tr>

<?php 
$memberid = '';
$memberusername = '';
$membername ='';
$memberic ='';
$membergender ='';
$memberphoneno = '';
$memberemail = '';
if (isset($_GET['memberid'])) {
	$studmatricno = $_GET['memberid'];
	// Cre ate connection
	include 'dbconnect.php';
	
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT *
			FROM member
			WHERE memberid='$memberid'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		$row = mysqli_fetch_assoc($result);
		$memberid = $row['memberid'];
		$memberusername = $row['memberusername'];
		$membername = $row['membername'];
		$memberic = $row['memberic'];
		$membergender = $row['membergender'];
		$memberphoneno = $row['memberphoneno'];
		$memberemail = $row['memberemail'];		
		
	} else {
		echo "0 results";
	}
	
	mysqli_close($conn);
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?memberid=<?php echo $row['memberid']; ?>">
<table border="1" cellpadding="5" cellspacing="2">
<tr><td>Member Id:</td>
<td><input type="text" name="memberid" value="<?php echo $memberid?>" ></td></tr></br>
<tr><td>Member Username:</td>
<td><input type="text" name="memberusername" value="<?php echo $memberusername?>"></td></tr></br>
<tr><td> Name:</td>
<td><input type="text" name="membername" value="<?php echo $membername?>"></td></tr></br>
<tr><td> IC:</td>
<td><input type="text" name="memberic" value="<?php echo $memberic?>" ></td></tr></br>
<tr><td>Gender:</td>
<td><input type="text" name="membergender" value="<?php echo $membergender?>"></td></tr></br>
<tr><td>Phone Number:</td>
<td><input type="text" name="memberphoneno" value="<?php echo $memberphoneno?>"></td></tr></br>
<tr><td>Email:</td>
<td><input type="text" name="memberemail" value="<?php echo $memberemail?>"></td></tr></br>
</br>
<tr><td colspan="2"><input type="hidden" name="memberid" value="<?php echo $memberid?>">
<input type="submit" name="AddMember" value=" OK "></br>
</form></td></tr>
</table>
<?php
if (isset($_POST['AddMember'])){
	$memberid = $_POST['memberid'];
	$memberusername = $_POST['memberusername'];
	$membername = $_POST['membername'];
	$memberic = $_POST['memberic'];
	$membergender = $_POST['membergender'];
	$memberphoneno = $_POST['memberphoneno'];
	$memberemail = $_POST['memberemail'];

	$conn = mysqli_connect("127.0.0.1", "root", "", "collegedb") or die (mysql_error ());

	// SQL query
	$sql = "UPDATE member SET				
				membername = '$membername',
				memberic = '$memberic', 
				membergender = '$memberic',
				memberphoneno = '$memberic',
				membergender = '$membergender',
				memberemail = '$memberemail'
				WHERE
				memberid = '$memberid'";

	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		echo "The record is updated successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>
</br><a href="stud_view.php">Back</a>
</table>
</tr>
  <tr><td height="55" colspan="2" align="center" valign="middle"><?php include ("footer.php");?></td></tr>
</table>
</div> 
</body>
</html>