<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";

if(isset($_GET['id_berita'])){
 $id_berita = $_GET['id_berita'];
}

$query = "SELECT id_berita, judul, kategori, isi, tanggal, gambar FROM tabel_berita WHERE id_berita='$id_berita'";
$sql = mysqli_query($koneksi, $query);
$hasil = mysqli_fetch_array($sql);
$id_berita = $hasil['id_berita'];
$judul = stripslashes($hasil['judul']);
$kategori = stripslashes($hasil['kategori']);
$isi = stripslashes($hasil['isi']);
$tgl_berita = date('d M Y H:i');

//proses edit berita
if(isset($_POST['edit'])){
 $id_berita = $_POST['hidberita'];
 $judul = addslashes(strip_tags($_POST['judul']));
 $kategori = $_POST['kategori'];
 $isi = addslashes(strip_tags($_POST['isi']));
 $tgl_berita = date('d M Y H:i');
 $gambar = addslashes(strip_tags($_POST['gbr_berita']));

 #tangkap gambar
 $namafolder="gambar/"; //folder tempat menyimpan file
 if (!empty($_FILES["gbr_berita"]["tmp_name"]))
 {
     $jenis_gambar=$_FILES['gbr_berita']['type'];
     if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
     {           
         $gambar = $namafolder . basename($_FILES['gbr_berita']['name']);       
         if (move_uploaded_file($_FILES['gbr_berita']['tmp_name'], $gambar)) {
            mysqli_query($koneksi, "insert into tabel_berita values ('','$gambar')"); 
           ?>
                <script language="javascript">
                     alert('Berhasil menambahkan');
                     document.location="panel.php?link=lihatArtikel.php";
                 </script>
                <?php
         } else {
            ?>
                <script language="javascript">
                     alert('Gagal menambahkan');
                     document.location="edit.php";
                 </script>
                <?php
         }
    } else {
         ?>
            <script language="javascript">
                 alert('Gambar harus berformat .jpg .png .gif');
                 document.location="edit.php";
             </script>
            <?php
    }
 } else {
    ?>
         <script language="javascript">
              alert('Anda belum memilih gambar');
          </script>
         <?php
 }

 //update berita
 $query = "UPDATE tabel_berita SET judul='$judul', kategori='$kategori', 
 isi='$isi', tanggal='$tgl_berita', gambar='$gambar' WHERE id_berita='$id_berita' ";
 $sql = mysqli_query($koneksi, $query);
}
?>
<!DOCTYPE html>
<html>
    <head><title>Edit Berita</title>
     <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">
     <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
     <link rel="stylesheet" type="text/css" href="../ckeditor/contents.css">
    </head>
<body>
    <form class="form-horizontal container" style="margin-top: 1%;">
        <button class="btn btn-default"><a href="../index.php">Halaman Depan</a></button>  
        <button class="btn btn-default"><a href="panel.php">Artikel Lain</a></button> 
        <button class="btn btn-default"><a href="tambahArtikel.php">Tambah Artikel</a></button>
    </form>
   <br>
    <form class="form-horizontal container" method="post" action="" name="input" enctype="multipart/form-data">
    <h1 class="text-center">Edit Artikel</h1>
    <div class="controls">
        <h4>Judul Artikel</h4>
        <input name="judul" size="50" value="<?=$judul?>" type="text">
    </div> 
    <div class="controls">
        <h4>Kategori</h4>
        <textarea cols="53" name="kategori" rows="4"><?=$kategori?></textarea>
    </div>
    <div class="controls">
        <h4>Konten Artikel</h4>
        <textarea class="texteditor" cols="100" name="isi" rows="10"><?=$isi?></textarea>
    </div>
    <h4>Gambar Artikel</h4>
        <div class="control-group">
          <label class="control-label" for="inputGambar">Pilih Gambar : File Maksimal 1 Mb</label>
          <div class="controls">
            <input type="file" id="inputGambar" name="gbr_berita" required value="<?=$gambar?>">
        <input name="hidberita" value="<?=$id_berita?>" type="hidden"><br>
        <input name="edit" value="Edit Berita" type="submit">
        <input name="reset" value="Cancel" type="reset">
          </div>
        </div>
</form>  
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="../ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="../ckeditor/adapters/jquery.js"></script>
            <!-- setup selector -->
            <script type="text/javascript">
                $('textarea.texteditor').ckeditor();
            </script>
</body>
</html>