<?php
include "koneksi.php";
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
                <button type="submit" class="btn btn-default"><a href="panel.php?link=tambahArtikel.php">Tambah Artikel</a></button><br>
                <button type="submit" class="btn btn-default"><a href="panel.php?link=lihat.php">Delete/Edit</a></button><br>
                <button type="submit" class="btn btn-default"><a href="panel.php?link=../uploaddownload/form_uploadadmin.php">Upload File</a></button><br>
                <button type="submit" class="btn btn-default"><a href="../LoginPage/adminlogout.php">Logout</a></button>
              </div>
            </div>
        </form>
        <form class="form-horizontal" method="post" action="db.php" name="frmBerita" enctype="multipart/form-data">
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-danger">Backup Data</button>
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