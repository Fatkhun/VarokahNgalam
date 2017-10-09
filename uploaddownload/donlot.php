<!DOCTYPE html>
<html>
<head>
	<title>File Download</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body style="background: lightgrey">
<div class="container-fluid">
	<div class="col-xs-6 col-xs-6">
		<div class="col-xs-12">
			<?php
			// Tentukan folder file yang boleh di download
			$folder = "files/";

			// Lalu cek menggunakan fungsi file_exist
			if (!file_exists($folder.$_GET['file'])) {
			  echo "<h1>Access forbidden!</h1>
			      <p> Anda tidak diperbolehkan mendownload file ini.</p>";
			  exit;
			}

			// Apabila mendownload file di folder files
			else {
			  header("Content-Type: octet/stream");
			  header("Content-Disposition: attachment; filename=".$_GET['file']."");
			  $fp = fopen($folder.$_GET['file'], "r");
			  $data = fread($fp, filesize($folder.$_GET['file']));
			  fclose($fp);
			  print $data;
			}
			?>			
		</div>
	</div>
</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>
