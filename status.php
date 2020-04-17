<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Status e-college</title>
</head>

<body>
<div align="center">
<table width="absolute" border="1">
  <tr>
    <td height="absolute" colspan="3"><img src="zalora1.jpg" width="1000" height="400" />
    </td>
  </tr>
 <!-- <table width="absolute" border="1">-->
  
  <td width="188" height="341";>
  </td>  
    <td width="1152" height="300">
    <?php
include 'dbconnect.php';	
mysqli_select_db($conn, 'shoppingdb');
		
			if($_SESSION['status'] == 'Success')
			{
			 echo "<font color='#00CC00'>Congratulation, your application form have been sucessfull.</font>";
			}
			else if ($_SESSION['status'] == 'Unsuccess')
			{
			 echo "<font color='#FF0000'>Sorry, your application form have been unsucessfull</font>";
			}
			 else if ($_SESSION['status'] == '')
		 	{
			 echo "<font color='#0000ff'> your application form have been loading.</font>";
			}
			 ?> 

  </td>
  </tr>

  </table>
  </div>
</body>
</html>