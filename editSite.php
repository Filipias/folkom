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
			<h2>Redigera inloggning</h2>
			<h3>Fyll i skiten</h3>
		</div>
		<?php if (isset($_GET['id']) && is_numeric($_GET['id'])){
			$id = $_GET['id'];
			$sql = "SELECT * FROM login WHERE $id";
			$result = $connection->query($sql);
			if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
		?>
			<form action="./run/update.php" method="POST">
			<div class="form-group">
				<label for="username">Användarnamn</label>
				<input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>" >
			</div>
			<div class="form-group">
				<label for="password">Nytt lösenord</label>
				<input type="password" class="form-control" name="password" placeholder="Lösenord">
			</div>
			<a href="handle.php"><button type="button" class="btn btn-primary">Tillbaka</button></a>
			<button type="submit" class="btn btn-primary">Uppdatera uppgifter</button>
			
		<?php 
				} 
			}
		}
			
			?>
		</form>
	</body>
</html>