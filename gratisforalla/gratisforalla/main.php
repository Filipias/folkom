<?php 
	include("/includes/connection.php");
	
	session_start();

	if(!isset($_SESSION['username']) || (trim($_SESSION['username']) =='')) {
		header("location: loginSite.php");
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gratis för Alla</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<?php include("./includes/header.php"); ?>
	<div id="bodyIsh">
		<div class="info">
			<p>Inloggad som: <?php echo $_SESSION['username'] ?></p>
		</div>
		<div class="howto">
			<table class="table table-striped">
					<tr>
						<th>Namn</th>
						<th>email</th>
						<th>Telefonnummer</th>
						<th>Se detaljer</th>
						<th>Ta bort</th>
					</tr>
					<?php
						$sql = "SELECT * FROM lista";
						$result = $connection->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
					?>
					<tr>
						<td><?php echo $row['firstname'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['phone'];?></td>
						<td><?php echo "<a href=\"./viewSpecific.php?id=" . $row['id'] . "\">Se detaljer</a>"; ?></td>				
						<td><?php echo "<a href=\"./run/delete.php?id=" . $row['id'] . "\">Ta bort</a>"; ?></td>				
					</tr>
					<?php
						}
						} 
						else {
							echo "0 results";
						}
					?>
				</table>
			</div>
			<a href="index.php"><button class="btn btn-secondary">Startsida</button></a>
			<a href="./run/logout.php"><button class="btn btn-secondary">Logga ut</button></a>
		</div>
		<div class="footer">
			<p class="footer_text">Kontakt :</p>
			<p class="footer_text">E-Mail : te14.daniel.lyxell@umea.nti.se</p>
			<p class="footer_text">Telefon : 070-123 45 67</p>
		</div>	
	</body>
<html>