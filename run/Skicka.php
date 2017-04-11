<?php
	include("./connection.php");
	
	$name = $_POST["name"];
	$ort = $_POST["ort"];
	$mail = $_POST["mail"];
	$personnummer = $_POST["personnummer"];
	
	$sql = "INSERT INTO lista (namn, epost, ort, personnummer) VALUES('$name', '$mail', '$ort', '$personnummer')";
	
	if($connection->query($sql) === TRUE){  ?>
        <script>
            alert("Klart");
            window.location.replace("http://localhost/Folkom");
        </script>
 <?php
	}
	else{
		echo "Fuck off";
	}
?>