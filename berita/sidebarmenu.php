<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style type="text/css">
        div.controls button {
           width: 150px;
           margin-top: 5px;
           margin-bottom: 5px; 
        }

        div.controls a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php
include "koneksi.php";
$ambil_recent = mysqli_query($koneksi, "select id_berita,judul,kategori,isi,tanggal,gambar from tabel_berita order by rand() limit 10");

?>
<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">Menu</li>
        <form class="form-horizontal">
            <div class="control-group" style="margin-top: 10px;">
              <div class="controls">
                <button type="submit" class="btn btn-success"><a href="index1.php?link=lihatArtikel.php">Lihat Artikel</a></button>
              </div>
            </div>
        </form>
        <li class="nav-header">Daftar Artikel</li>
        <ul type="square">
        	<?php
				while($hasil_recent= mysqli_fetch_array($ambil_recent)){
        			echo "<li><a href='index1.php?link=lihatDetailArtikel.php&id=$hasil_recent[id_berita]'>".$hasil_recent['judul']."</a></li>";
				}
			?>
        </ul>
    </ul>
</div>
</body>
</html>