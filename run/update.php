<?php

	include(./connection.php);
 

	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		$id = $_GET['id'];
		$username = $_GET['username'];
		$password = $_GET['password'];
	
		$result = mysql_query("UPDATE login SET username='$username', password='$password' WHERE id=$id" )
		or die(mysql_error()); 
 

		header("Location: handle.php");
	}
	else {
		header("Location: error.php");
	}
?>