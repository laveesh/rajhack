<!DOCTYPE html>
<html>
<head>
	<title>Oye Trip</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="library/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<?php 
		include "./pages/header.php";
		require_once "./pages/connect.php";
		include './pages/search.php';
	 ?>
	<div class="footer">
		
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script src="./js/main.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8X1VLAveP6mIsNclPhp3N4sC9RxaIjKo&libraries=places&callback=getloc"></script>

</body>
</html>