<?php
session_start();
unset($_SESSION['username']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLE CSS -->
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
	<!--ANIMATED FONTAWESOME STYLE CSS -->
	<link href="../assets/css/font-awesome-animation.css" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: black">
	<div class="container-fluid col-sm-4 col-sm-offset-4">
		<button class="btn btn-primary text-center" style="width: 100%;margin-top: 50%;"><h2>Anda berhasil logout..</h2></button>
	<p style="color: white;">Silahkan klik <b><a href="../LoginPage/index.php">disini</a></b> untuk login kembali</p>
	</div> 
</body>
</html>
