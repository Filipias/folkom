<?php 
	include("/includes/connection.php");
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
	<body>
		<?php include("./includes/header.php"); ?>
		<form id="formLogin" action="./run/login.php" method="POST">
			<div class="form-group">
				<label for="username">Användarnamn</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="Användarnamn">
			</div>
			<div class="form-group">
				<label for="password">Lösenord</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Lösenord">
			</div>
			<a href="index.php"><button type="button" class="btn btn-primary">Tillbaka</button></a>
			<button type="submit" class="btn btn-primary">Logga in</button>
		</form>
		<div class="footer">
			<p class="footer_text">Kontakt :</p>
			<p class="footer_text">E-Mail : te14.daniel.lyxell@umea.nti.se</p>
			<p class="footer_text">Telefon : 070-123 45 67</p>
		</div>
	</body>
</html>