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
    <td width="77">&nbsp;</td>
    
     <div align="center">
<table width="1340" border="1">
  </tr>
<style>
table {
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 80%;
}

td, th {
	border: 1px solid #dddddd;
	text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
include 'dbconnect.php';

if (isset($_POST['search'])) {
	$searchname = $_POST['searchname'];
} else 
	$searchname = '';
$sql = "SELECT * FROM admin";
$sql = $sql . " WHERE username LIKE '%" . $searchname . "%'";
$result = mysqli_query($conn, $sql);
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>?page=userview&searchkey=<?php echo $searchname?>">
	<input type="text" name="searchname" value="<?php echo $searchname?>">
	<input type="submit" name="search" value="Search User">
</form>

</br><a href="admin_add.php">ADD ADMIN</a>
<table>
  <tr>
  	<th>Admin ID</th>
    <th>Username</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th colspan="2">Action</th>
  </tr>
<?php 
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>	
    
    	<tr>
        <td><?php echo $row["adminId"] ?></td>
    	<td><?php echo $row["username"] ?></td>
    	<td><?php echo $row["name"] ?></td>
    	<td><?php echo $row["phone"] ?></td>
        <td><?php echo $row["email"] ?></td>
    	<td><a href="admin_edit.php?username=<?php echo $row['username']; ?>">Edit</a></td>
    	<td><a href="admin_delete.php?username=<?php echo $row['username']; ?>">Delete</a></td>
    	</tr>
<?php
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}

mysqli_close($conn);
?>
</table>
</tr>
  <tr><td height="55" colspan="2" align="center" valign="middle"><?php include ("footer.php");?></td></tr>
</table>
</div> 
</body>
</html>