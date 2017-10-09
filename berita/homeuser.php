<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
require '../LoginPage/dbconfig/config.php';

//cek apakah user sudah login
if(!isset($_SESSION['username'])){ echo " Login <a href='../LoginPage/index.php'> disini </a>, Karena "; die("Anda belum login");//jika belum login jangan lanjut..
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman User</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="css/bootswatch.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php echo "<h3>".$_SESSION['id']."</h3>";?>
	<div class="container-fluid">
	<div class="col-xs-12">
	  <div class="col-xs-3">
	    <?php include("menuuser.php");?>
	          </div><!--/span-->
	<div class="col-xs-9">
	            <!--letak konten-->
	              <?php
	      if(empty($_GET['link']))
	                  include "lihatArtikelID.php";
	      else
	        include($_GET['link']);           
	    ?>
	  </div>
	</div>
	
	<footer>
	<p>Jombang Ngalam (2017) &copy; Member Panel</p>
	</footer>
	</div>

</body>
</html>