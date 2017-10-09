<?php
include "koneksi.php";
$judul_berita  = addslashes($_POST['jdl_berita']);
$kate_berita = addslashes($_POST['kat_berita']);
$isi_berita	= addslashes($_POST['isi_berita']);
$tgl_berita	= date('d M Y H:i');

// Paragraph
// membaca input dari form
$input = $_POST['isi_berita'];

// memecah string input berdasarkan karakter '\r\n\r\n'
$pecah = explode("\r\n\r\n", $input);

// string kosong inisialisasi
$text = "";

// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
// lalu menggabungnya menjadi satu string utuh $text
for ($i=0; $i<=count($pecah)-1; $i++)
{
   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
   $text .= $part;
}

#tangkap gambar
$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["gbr_berita"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['gbr_berita']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['gbr_berita']['name']);       
        if (move_uploaded_file($_FILES['gbr_berita']['tmp_name'], $gambar)) {
           mysqli_query($koneksi, "insert into tabel_berita values ('','$judul_berita','$kate_berita','$isi_berita','$tgl_berita','$gambar')"); 
		   ?>
				<script language="javascript">
                    alert('Berhasil menambahkan');
                    document.location="homeuser.php?link=lihatArtikelID.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="homeuser.php?link=tambah-artikeluser.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="panel.php?tambahArtikel.php";
            </script>
   		<?php
   }
} else {
    echo "Anda belum memilih gambar";
}
?>