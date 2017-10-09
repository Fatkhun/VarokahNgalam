<!DOCTYPE html>
<html id="home">
<head>
	<title>Pencarian Artikel</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body>
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
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="Package.html">DESTINASI <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="wisata-alam.html">WISATA ALAM</a></li>
                    <li><a href="wisata-religi.html">WISATA RELIGI</a></li>
                    <li><a href="wisata-kuliner.html">WISATA KULINER</a></li>
                  </ul>
                </li>
                <li><a href="agenda.html">AGENDA</a></li>
                 <li><a href="Gallery.html">GALLERY</a></li>
                <li><a href="Contact.html">CONTACT</a></li>
                <li><a href="../LoginPage/index.php"><i class="fa fa-user" title="sign-in"></i></a></li>
            </ul>
        </div>
       
    </div>
</div>
 <!--END NAV SECTION -->
<!-- menampilkan hasil pencarian -->
<?php
if(isset($_GET['q']) && $_GET['q']){
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "adminlogin");
	$q = $_GET['q'];
	$sql = "select * from tabel_berita where judul like '%$q%' or 
	kategori like '%$q%' or isi like '%$q%'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
		?>
		<table>
			<?php
			while($hasil_data = mysqli_fetch_array($result)){?>
				<div class="container col-xs-12" style="margin-top: 100px;border-bottom:1px solid grey;padding-bottom: 10px; ">
			      <div class="col-xs-10 col-xs-offset-1">
			        <img data-src="holder.js/300x200" alt="300x200" src="<?=$hasil_data['gambar'];?>" style="width: 300px; height: 200px;">
			          <h2><?=$hasil_data['judul'];?></h2>
			          <p style="text-align:justify;"><?=substr($hasil_data['isi'],0,350);echo "..."?></p>
			          <p>
			          	<a href="index1.php?link=lihatDetailArtikel.php&id=<?=$hasil_data['id_berita'];?>" class="btn btn-primary">Baca Selengkapnya</a> 
			          	<a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a>
			          	<a href="#" class="btn btn-inverse">Kategori <?=$hasil_data['kategori'];?></a>
			          </p>
			      </div>      
			    </div>
			<?php }?>
		</table>
		<?php
	}else{
		echo 'Data not found!';
	}
}
?>
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
		        <p><i class="fa fa-home fa-2x"></i> Mojoagung Mancilan</p>
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

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="../assets/js/pagescroll.js"></script>
	<script src="../assets/js/jquery.stellar.js"></script>
	<script src="../assets/js/scrip.js"></script>
	<script src="../assets/js/jquery.nicescroll.js"></script>
</body>
</html>
