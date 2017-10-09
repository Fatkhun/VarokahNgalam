<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";

// tanggal sekarang
$tgl_upload = date("Ymd");

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";
  
  // Masukkan informasi file ke database
  $konek = mysqli_connect("localhost","root","","adminlogin");

  $query = "INSERT INTO upload (nama_file, deskripsi, tgl_upload)
            VALUES('$nama_file', '$_POST[deskripsi]', '$tgl_upload')";
            
  mysqli_query($konek, $query);
}
else{
  echo "File gagal di upload";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Upload</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body>
	<button class="btn btn-danger"><a href="../berita/homeuser.php">Kembali</a></button>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
