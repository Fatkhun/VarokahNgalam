<!-- Hapusa Artikel -->
<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'hapus': include "hapus.php"; break;
	case 'lihat' : include "lihat.php"; break;
	case 'main' :
}
?>
<!-- end -->

<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'koneksi.php';
if(isset($_POST["userinfotable"])) {
        $username   = $_POST["username"];
        $password   = $_POST["password"];
}
$sql_login  = mysqli_query($koneksi, "SELECT * FROM userinfotable WHERE username = '$username' AND password = '$password'");
// hitung hasil dan cek ada atau tidaknya data
if(mysqli_num_rows($sql_login)>0) {
            $row_akun = mysqli_fetch_array($sql_login);
            $_SESSION["userinfotable_id"] = $row_akun["id"];
            $_SESSION["userinfotable_username"] = $row_akun["username"];
            $_SESSION["userinfotable_fullname"] = $row_akun["fullname"];
            $_SESSION["userinfotable_gender"] = $row_akun["gender"];
            $_SESSION["userinfotable_qualification"] = $row_akun["qualification"];
            $_SESSION["userinfotable_password"] = $row_akun["password"];
}

#------- memulai page number -------------------------------------------------------------------------------------#
$dataPerPage = 6; 
if(isset($_GET['hal']))
{	
	$noPage = $_GET['hal'];
}else{	
	$noPage = 1;
}
$offset   = ($noPage - 1) * $dataPerPage;
$id_author = $_SESSION['userinfotable_username'];
$ambil_data = mysqli_query($koneksi, "SELECT * FROM tabel_berita WHERE username = '$id_author' ORDER BY id_berita DESC limit $offset, $dataPerPage");
$hitung_record = mysqli_query($koneksi, "SELECT COUNT(*) AS jumData FROM tabel_berita");
$data          = mysqli_fetch_array($hitung_record);
$jumData       = $data['jumData'];
$jumPage  = ceil($jumData/$dataPerPage);
# ceil digunakan untuk membulatkan hasil pembagian
#------- akhir page number -------------------------------------------------------------------------------------#
if(mysqli_num_rows($ambil_data) > 0){
	while($hasil_data = mysqli_fetch_array($ambil_data)){
	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Halaman Artikel</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
	</head>
	<body>
		<div class="col-sm-6 col-sm-6">
	      <div class="container-fluid col-sm-12">
	        <img data-src="holder.js/300x200" alt="300x200" src="<?=$hasil_data['gambar'];?>" style="width: 300px; height: 200px;">
	          <h2><?=$hasil_data['judul'];?></h2>
	          <p><a href="#" class="btn btn-inverse">Kategori <?=$hasil_data['kategori'];?></a></p>
	      
	          <p style="text-align:justify;"><?=substr($hasil_data['isi'],0,350);echo "..."?></p>
	          <p style="margin-bottom: 20px;">
	          	<a href="index1.php?link=lihatDetailArtikel.php&id=<?=$hasil_data['id_berita'];?>" class="btn btn-primary">Baca Selengkapnya</a>
	          	<a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a> 
	          </p>
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
	<?php } ?>
<?php
}else{
	echo 'Artikel belum ditambahkan';
}
?>

<!----  menampilkan page number di bawah post ------------>
<div class="container col-sm-12">
	<div class="pagination pagination-centered">
	    <ul style="padding:5px;list-style: none;display:flex;flex-direction: row;:">
		<?php
			$link = "index1.php?link=lihatArtikel.php&hal=";
			# menampilkan link previous
			if ($noPage > 1) echo  "<li style='margin-right:5px;'><a href='".$link."".($noPage-1)."'>&larr; Prev</a></li>";
			# memunculkan nomor halaman dan linknya
			for($jml_hal = 1; $jml_hal <= $jumPage; $jml_hal++)
			{
				if($noPage == $jml_hal){
					echo "<li class='disabled' style='margin-right:5px;'><a href='#' style='cursor'>".$jml_hal."</a></li> ";
				}else{
					echo "<li style='margin-right:5px;'><a href='".$link."".$jml_hal."'>".$jml_hal."</a></li> ";}
			}
			# menampilkan link next
			if ($noPage < $jumPage) echo "<li><a href='".$link."".($noPage+1)."'>Next &rarr;</a></li>";
			?>
	    </ul>
	</div>
</div>
