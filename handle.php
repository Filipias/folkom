<?php 
	include("/includes/connection.php");
	
	session_start();

	if(!isset($_SESSION['username']) || (trim($_SESSION['username']) =='')) {
		header("location: loginSite.php");
	}
?>
<html>
	<head>
		<title>Folkval</title>
		<meta charset="utf-8">
		
		<!-- Egen CSS -->
		<link rel="stylesheet" href="./css/style.css">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div id="Rubrik">
			<h2>Tappat ditt ID i sn&#246;n?</h2>
			<h3>Vi har l&#246;sningen!</h3>
		</div>
		<table class="table table-striped">
			<tr>
				<th>Användarnamn</th>
				<th>Redigera</th>
				<th>Ta bort</th>
			</tr>
			<?php
				$sql = "SELECT * FROM login";
				$result = $connection->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $row['username'];?></td>
			    <td><?php echo "<a href=\"./editSite.php?id=" . $row['id'] . "\">Redigera</a>"; ?></td>
				<td><?php if ($result->num_rows > 1){ echo "<a href=\"./run/delete.php?id=" . $row['id'] . "\">Ta Bort</a>"; }?></td>				
			</tr>
			<?php
				}
				} 
				else {
					echo "0 results";
				}
			?>
		</table>
		<center>
			<a href="resultat.php"><button type="button" class="btn btn-primary">Tillbaka</button></a>
			<a href="addSite.php"><button type="button" class="btn btn-primary">Ny inloggning</button></a>
			<a href="./run/logout.php"><button type="button" class="btn btn-primary">Logga ut</button></a>
		</center>
	</body>
</html>