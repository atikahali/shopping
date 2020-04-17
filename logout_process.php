<?php session_start(); ?>
<?php
    session_destroy();
		header("Refresh: 2; url=student_login.php");
		echo 'Logged out successfully.'; 

?>
