<!DOCTYPE html>
<html id="home">
<head>
	<title>File Download</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
		<script type="text/javascript">
			function printValue(sliderID, textbox) {
	        var x = document.getElementById(textbox);
	        var y = document.getElementById(sliderID);
	        x.value = y.value;
	    }
		</script>
</head>
<body style="background: #fff">
 <!-- NAV SECTION -->
     <div class="navbar navbar-inverse navbar-fixed-top">
   
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#home">JOMBANG NGALAM</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">HOME</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">DESTINASI <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="../berita/index1.php">WISATA ALAM</a></li>
                  </ul>
                </li>
                 <li><a href="download.php">DOWNLOAD FILE</a></li>
                <li><a href="../contact.php">CONTACT</a></li>
                <li><a href="../LoginPage/index.php"><i class="fa fa-user" title="sign-in"></i></a></li>
            </ul>
        </div>
       
    </div>
</div>
 <!--END NAV SECTION -->
<div class="container-fluid">
	<div class="col-xs-6 col-xs-offset-3">
		<div class="col-xs-12" style="margin-top: 20%;">
			<?php
				error_reporting(E_ALL ^ E_NOTICE);
			  $konek = mysqli_connect("localhost","root","","adminlogin");

			  $query = "SELECT * FROM upload ORDER BY id_upload DESC";
			  $hasil = mysqli_query($konek, $query);

			  while ($r = mysqli_fetch_array($hasil)){
			    echo "Nama File : <b>$r[nama_file]</b> <br>";
			    echo "Deskripsi : $r[deskripsi] <br>";
			    echo "<a href=\"donlot.php?file=$r[nama_file]\">Download File</a><hr><br";
			  }
			?>
		</div>
	</div>
</div>
				
		    </div><!--/.fluid-container-->

			<!--FOOTER SECTION -->
			<hr>
			<div id="footer" class="col-xs-8 col-xs-offset-2">
			    <div class="row text-left container">
			      <div class="col-xs-4">
			        <h3>Social Link</h3>
			        <a href="" title="facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
			        <a href="" title="twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
			        <a href="" title="instagram"><i class="fa fa-instagram fa-2x"></i></a>
			        <a href="" title="google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
					</div>
				<div class="col-xs-4">
					<h3>Partner</h3>
			        <p>Mas Fatkhun Blog</p>
			        <p>W3school</p>
			        <p>idHostinger</p>
				</div>
				<div class="col-xs-4">
					<h3>Layanan</h3>
			        <p><i class="fa fa-envelope fa-2x"></i> jbgngalam@gmail.com</p>
			        <p><i class="fa fa-phone fa-2x"></i> 085732326736</p>
			        <p><i class="fa fa-home fa-2x"></i> Jombang Mojoagung</p>
				</div>
			  </div>
		
			</div>
			<div class="col-xs-12">
				<hr>
				<footer>
				<p>Jombang Ngalam (2017) &copy; Jombang Beriman</p>
				<div id="ikon1" class="col-xs-6 col-xs-6">
				    <a href="#home" class="page-scroll"><img src="../assets/Images/under.png" style="width: 50px;height: 50px;transform: rotate(270deg);border-radius: 50%;background: lightskyblue;margin-top: 4px;float: right;"></a>
				</div>
				</footer>
			</div>
			<!-- END FOOTER SECTION -->
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/pagescroll.js"></script>
		<script src="../assets/js/jquery.stellar.js"></script>
		<script src="../assets/js/scrip.js"></script>
		<script src="../assets/js/jquery.nicescroll.js"></script>
</body>
</html>
