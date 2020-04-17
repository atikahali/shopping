<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<center><h3>MEMBER LOGIN</h3></center>

<form action= "<?php $_SERVER['PHP_SELF']?>" method="post">
<table width="462" height="221" border="5" align="center" cellpadding="0" cellspacing="1" bordercolor="#000000" bgcolor="#CCCCCC">
  <tr>
      <td height="219"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
      
        <tr>
          <td width="118"><strong>ID</strong></td>
          <td width="4"><strong>:</strong></td>
          <td width="204"><input type="text" name="memberId" /></td>
        </tr>
        
        <tr>
          <td><b>Username </b></td>
          <td><strong>:</strong></td>
          <td><input type="text" name="memberusername" /></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="Submit" name="Login" value=" LOGIN "></td>
        </tr>
        
        <p><center>
       <br>Not yet register? <a href="stud_register.php"> SIGN UP </a>
    </p></center>
    
      </table></td>
    </form>
  </tr>
</table>

   
<?php
if(isset($_POST['Login'])){
		$memberusername = $_POST['memberusername'];
		$memberId = $_POST['memberId'];
		
		//1.create connection to database server
		include('dbconnect.php');
		
		//2. Create and execute SQL to databse server
		$sql = "SELECT memberId, memberusername FROM member WHERE memberId = '$memberId' AND memberusername = ('$memberusername') ";
		$result = mysqli_query($conn, $sql);
		
		//3. fetch data from database server to web server
		$row = mysqli_fetch_assoc($result);
		
		//4. read the query result
		
		if(mysqli_num_rows($result) == 1) {
			
			$_SESSION['isLogged_in'] = true;
			$_SESSION['memberId'] = $row['memberId'];
			$_SESSION['memberusername'] = $row['memberusername'];
			header ("Location: student_main.php");
			exit;
			
		} 
		else $message = 'WRONG STUDENT MATRIC NO OR USERNAME';
		print ($message); }
?>


   
</body>
</html>