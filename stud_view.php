
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
if (!isset($_SESSION['isLogged_in']))
{
$_SESSION['isLogged_in'] = FALSE;
$_SESSION['adm_id'] = 'guest';
$_SESSION['adm_type'] = 'guest';
}

?>
 <center>
  <tr>
    <td height="90" colspan="3"><img src="zalora1.jpg" width="1000" height="400" /></td>
  </tr></center>
  


   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css"/>
   
   <title>CSS MenuMaker</title>

<body>

    <center><td width="59" height="192"><?php include 'mainmenu.php' ?></td></center>
    <td width="400"><div align="center"><h1>WELCOME TO LAURA SHOPPING</h1></div></td></p>
    <td width="77">&nbsp;</td>
 

  </tr>
<br><br>

 
    
<h1><p>LIST OF MEMBERS</p></h1>
<?php
include 'dbconnect.php';


$sql = "SELECT * FROM member";

$result = mysqli_query($conn, $sql);
?>

</br><a href="stud_register.php">MEMBER REGISTRATION</a>
<table>
  <tr>
  	<th>ID</th>
    <th> Username</th>
    <th> Name</th>
    <th>IC</th>
    <th>Gender</th>
    <th>Phone No</th>
    <th>Email</th>
    <th colspan="2">Action</th>
  </tr>
<?php 
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>	
    
    	<tr>
        <td><?php echo $row["memberid"] ?></td>
    	<td><?php echo $row["memberusername"] ?></td>
    	<td><?php echo $row["membername"] ?></td>
        <td><?php echo $row["memberic"] ?></td>
        <td><?php echo $row["membergender"] ?></td>
    	<td><?php echo $row["memberphoneno"] ?></td>
        <td><?php echo $row["memberemail"] ?></td>
    	<td><a href="stud_edit.php?app_id=<?php echo $row['memberid']; ?>">Edit</a></td>
    	<td><a href="stud_delete.php?app_id=<?php echo $row['memberid']; ?>">Delete</a></td>
    	</tr>
<?php
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}

mysqli_close($conn);
?>
</table>