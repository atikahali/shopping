
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

 
    
<h1><p>LIST OF ITEM</p></h1>
<?php
include 'dbconnect.php';


$sql = "SELECT * FROM item";

$result = mysqli_query($conn, $sql);
?>

</br><a href="applicationform.php">ADD ITEM</a>
<table>
  <tr>
  	<th>Item Id</th>
    <th> Item name</th>
    <th> Item code</th>
    <th>Item description</th>
    <th>Item colout</th>
 
    <th colspan="2">Action</th>
  </tr>
<?php 
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>	
    
    	<tr>
        <td><?php echo $row["item_id"] ?></td>
    	<td><?php echo $row["item_name"] ?></td>
    	<td><?php echo $row["item_code"] ?></td>
        <td><?php echo $row["item_desc"] ?></td>
        <td><?php echo $row["item_colour"] ?></td>
 
    	<td><a href="editapplication.php?app_id=<?php echo $row['item_id']; ?>">Edit</a></td>
    	<td><a href="deleteapplication.php?app_id=<?php echo $row['item_id']; ?>">Delete</a></td>
    	</tr>
<?php
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}

mysqli_close($conn);
?>
</table>