<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style.css"/>
   
<title>Add Application</title>
</head>

<body>
    
    <?php
if (!isset($_SESSION['isLogged_in']))
{
$_SESSION['isLogged_in'] = FALSE;
$_SESSION['adm_id'] = 'guest';
$_SESSION['adm_type'] = 'guest';
}

?>
    
    <h1>  REGISTRATION </h1>
    
    
    <form method="post" action=""?>
   		<TABLE border="1" cellpadding="5" cellspacing="2">
    
    <TR>
    <td>Id:</td>
    <td><input name="memberid" type="text" value="" /></td>
    </TR>
  
  	<TR>
   	<td>Username:</td>
    <td><input name= "memberusername" type="text" value=""></td>
    </TR>
    
    <TR> 
   	<td>Name :</td>
    <td><input name="membername" type="text" value=""></td>
    </TR>
    
    <TR>
   	<td>IC:</td>
    <td><input name="memberic" type="text" value=""></td>
    </TR>
    
   <TR>
	<td>Gender :</td>
        <TD>	
		<input type="radio" name="membergender" value="Male" > Male
		<input type="radio" name="membergender" value="Female" > Female
			</TD>
		</TR>
    
    
       <TR>
   	<td>Number Phone:</td>
    <td><input name="memberphoneno" type="text" value=""></td>
    </TR>
    
       <TR>
   	<td>Email:</td>
    <td><input name="memberemail" type="text" value=""></td>
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
		$memberid= ($_POST['memberid']);
		$memberusername = ($_POST['memberusername']);
		$membername= ($_POST['membername']);
		$memberic=($_POST['memberic']);
		//$membergender=($_POST['membergender']);
		
		if (isset($_POST['membergender'])) {
    	$membergender = $_POST['membergender'];
		}
		
		$memberphoneno=($_POST['memberphoneno']);
		$memberemail=($_POST['memberemail']);
		
	
		include 'dbconnect.php';
		
		$sql= "INSERT INTO member(memberid,memberusername,membername,memberic,membergender,memberphoneno,memberemail) 
		VALUES ('$memberid','$memberusername', '$membername','$memberic','$membergender','$memberphoneno','$memberemail' )";
		
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

