<?php session_start();?>
<html>
<head>
<title>Log-in</title>
</head>

<body>
<h1>Login</h1>
 <form method="post" action=""?>
   		<TABLE border="1" cellpadding="5" cellspacing="2">
    
    <TR>
    <td>User name:</td>
    <td><input name="username" type="text"> <br></br></td>
    </TR>
  
  	<TR>
   	<td>Password: </td>
    <td><input name="password" type="password"> <br></br></td>
    </TR>
  
    <TR align="center">
      <td colspan="2">
 		<input type="submit"
		value="Login" name="login">
	</td>
    </TR>
    
    </form>
    </TABLE>

<?php
if (isset ( $_POST ['login'] )) {
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "shoppingdb";
	
	//create connection
	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

	//check connection
	if (!$conn)
	{
		die ("Connection failed: ".mysqli_connect_error());
	}

	$sql = "SELECT username, role FROM login WHERE username = '$username' AND password = PASSWORD('$password')";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
	if(mysqli_num_rows($result) == 1)
	{
		$_SESSION['username'] = $username;
		$_SESSION['role'] = $row["role"];
		setcookie('username', $username);
		echo '<p>Hello ' . $_SESSION['username']. '</p>';
		echo '<p>You login as ' . $_SESSION['role']. '</p>';
	}
	
	else
	{
		echo 'incorrect username or/and password. Please try again.';
	}
	}
	
	else 
	{
		echo '<p>Hello, please login</p>';
		$username = '';
		$_SESSION['username'] = '';
	}
	?>
</body>
</html>
