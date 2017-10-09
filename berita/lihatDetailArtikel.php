<?php
include "koneksi.php";
$ambil_data = mysqli_query($koneksi, "select * from tabel_berita where id_berita='$_GET[id]'");
$hasil_data = mysqli_fetch_array($ambil_data);
mysqli_free_result($ambil_data);
?>

<div class="container-fuid">
  <div class="col-xs-12">
    <div class="col-xs-10 col-xs-offset-1">
      <img class="img-thumbnail text-center" src="<?=$hasil_data['gambar'];?>" style="width:800px;height:450px;background-size: cover;"/>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
      <div class="content-heading"><h1><?=$hasil_data['judul'];?></h1></div>
      <p><a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a> </p>
      <p><a href="#" class="btn btn-inverse">Kategori <?=$hasil_data['kategori'];?></a> </p>
      <p><?=$hasil_data['isi'];?></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>