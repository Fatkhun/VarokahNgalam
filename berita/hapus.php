<?php
//koneksi ke engine mysql
$Open = mysqli_connect("localhost","root","");
if (!$Open){
die ("Koneksi ke Engine MySQL Gagal !");
}
$Koneksi = mysqli_select_db($Open, "adminlogin");
if (!$Koneksi){
die ("Koneksi ke Database Gagal !");
}
// Cek nik
if (isset($_GET['id_berita'])) {
$id_berita = $_GET['id_berita'];
// membaca nama file yang akan dihapus
$query = "SELECT * FROM tabel_berita WHERE id_berita='$id_berita'";
$hasil = mysqli_query($Open, $query);
}
else {
die ("Error. Tidak ada id_berita yang dipilih Silakan cek kembali! ");
}
//proses hapus data
if (!empty($id_berita) && $id_berita != "") {
$hapus = "DELETE FROM tabel_berita WHERE id_berita='$id_berita'";
$sql = mysqli_query ($Open, $hapus);
if ($sql) {
?>
<script language="JavaScript">
alert('Seluruh Data Artikel <?=$id_berita?> Berhasil dihapus!');
document.location='panel.php';
</script>
<?php
} else {
echo "<font color=red><center>Data Artikel gagal dihapus</center></font>";
}
}
//Tutup koneksi engine MySQL
mysqli_close($Open);
?>