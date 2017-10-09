<?php
//hosting
$host ='localhost';
//username mysql/mariadb/sejenisnya

$user ='root';
//password mysql/mariadb/sejenisnya
$pass ='';
//lokasi peyimpanan backup file
$drive = 'E:/simpandb/';
//database yang tidak ingin di backup
$lewati = array('mysql', 'information_schema','test','performance_schema','phpmyadmin');
//Proses Di Mulai
$conn=mysqli_connect($host,$user,$pass);
if (mysqli_connect_errno())
{echo "Koneksi Gagal: " . mysqli_connect_error();}
$goummi = null;$ummigo=0;$hitung = time();
$sql = 'show databases';
$hasil = mysqli_query($conn,$sql);
if(!$hasil){die('Tidak dapat menemukan database: '. mysqli_connect_error());}
$db = array();
while ($row = mysqli_fetch_assoc($hasil)) {$db[] = $row['Database'];}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Backup Data</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body style="background: #34495e;">
<div class="container col-xs-12" style="margin-top: 15%;">
	<div class="col-xs-8 col-xs-offset-2 well text-center">
		<?php 
		foreach($db as $database) {
		if(in_array($database, $lewati)) {continue;}
		exec("c:/xampp/mysql/bin/mysqldump --complete-insert --create-options --add-locks --disable-keys --extended-insert --quick --quote-names -u $user --password=$pass $database -c>{$drive}/$database.sql 2>&1", $goummi, $hasil);
		if($hasil){echo("Error $lokasi: $hasil");}$ummigo=$ummigo+1;}
		echo("Database yang di proses : $ummigo");
		echo('</br> Dalam Tempo: '.(time() - $hitung).' detik.');
		?>	
	</div>
	<div class="col-xs-8 col-xs-offset-2 text-center">
		<?php
			echo "<div style='color: white;'>by Jombang Ngalam. Kembali ke Admin Panel <a href='panel.php' target='_blank'>disini</a></div>";
		?>
	</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="../assets/js/pagescroll.js"></script>
<script src="../assets/js/jquery.stellar.js"></script>
<script src="../assets/js/scrip.js"></script>
<script src="../assets/js/jquery.nicescroll.js"></script>
</body>
</html>