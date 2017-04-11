<?php
	include("../connection.php");
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$sql = "INSERT INTO login (username, password) VALUES('$username', '$password')";
	
	if($connection->query($sql) === TRUE){  ?>
        <script>
            alert("Klart");
            window.location.replace("http://localhost/Folkom/handle.php");
        </script>
 <?php
	}
	else{
		echo "Fuck off";
	}
?>