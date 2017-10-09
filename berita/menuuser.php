<?php
include "koneksi.php";
require "../LoginPage/dbconfig/config.php";
$ambil_recent = mysqli_query($koneksi, "select id_berita,judul,tanggal from tabel_berita order by rand() limit 20");

?>
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
<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">Menu</li>
        <form class="form-horizontal">
            <div class="control-group" style="margin-top: 10px;">
              <div class="controls">
                <button type="submit" class="btn btn-default"><a href="homeuser.php?link=tambah-artikeluser.php">Tambah Artikel</a></button><br>
                <button type="submit" class="btn btn-default"><a href="homeuser.php?link=../uploaddownload/form_upload.php">Upload File</a></button><br>
                <button type="submit" class="btn btn-default"><a href="homeuser.php?link=info-user.php">Data Member</a></button><br>
                <button type="submit" class="btn btn-default"><a href="logout.php">Logout</a></button>
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