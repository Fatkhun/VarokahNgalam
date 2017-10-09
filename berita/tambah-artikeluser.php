<!DOCTYPE html>
<html>
<head>
  <title>Form Artikel</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="../ckeditor/contents.css">
</head>
<body>
<h2>Form Inputan Artikel</h2>
<form class="form-horizontal col-xs-12" method="post" action="simpanArtikel.php" name="frmBerita" enctype="multipart/form-data">
  <div class="control-group">
    <label class="control-label" for="inputJudul">Judul</label>
    <div class="controls">
      <input type="text" class="col-xs-12" placeholder="Judul Artikel" name="jdl_berita" required style="max-width: 50%">
    </div>
  </div><br><br>
  <div class="control-group">
    <label class="control-label" for="inputKategori">Kategori</label>
    <div class="controls">
      <input type="text" class="col-xs-12" placeholder="Kategori Artikel" name="kat_berita" required style="max-width: 50%">
    </div>
  </div><br><br>
  <div class="control-group">
    <label class="control-label" for="inputIsiArtikel">Konten Artikel</label>
    <div class="controls">
      <textarea class="texteditor col-xs-12" name="isi_berita" required style="max-width: 90%;"></textarea>
    </div>
  </div><br><br><br><br><br><br>
  <div class="control-group">
    <label class="control-label" for="inputGambar">Gambar Artikel : File maksimal 1 Mb</label>
    <div class="controls">
      <input type="file" id="inputGambar" name="gbr_berita" required>
    </div>
  </div>
  <div class="control-group" style="margin-top: 10px;">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Post</button>
      <button type="reset" class="btn btn-inverse">Cancel</button>
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
