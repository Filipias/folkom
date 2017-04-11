<?php 
	include("/includes/connection.php");
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
			<form action="./run/login.php" method="POST">
			<div class="form-group">
				<label for="username">Användarnamn</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="Användarnamn">
			</div>
			<div class="form-group">
				<label for="password">Lösenord</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Lösenord">
			</div>
			<a href="index.html"><button type="button" class="btn btn-primary">Till startsidan</button></a>
			<button type="submit" class="btn btn-primary">Logga in</button>
		</form>
	</body>
</html>