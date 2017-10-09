
<!DOCTYPE html>
<html>
<head>
	<title>Hapus Artikel</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/styledelete.css">
</head>
<body>
	<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:97%; height:100vh;">
	<h2 align="center"><font color="orange" size="4" face="arial"><b>Data Artikel</b></font></h2>
	<input type="button" value="Export To PDF" title="Save as PDF Format" onclick=window.open('#');><br><br>
	<table>
	<tr bgcolor="#FFA800" style="width: 70%;">
		<th width="5">Nomor</td>&nbsp;
		<th width="5">id_artikel</td>&nbsp;
		<th width="15">Judul</td>&nbsp;
		<th width="15">Kategori</td>&nbsp;      
		<th width="15">Isi</td>&nbsp;
		<th width="15">Tanggal</td>&nbsp;
		<th width="15">Gambar</td>&nbsp;
		<th width="20">Action</td>&nbsp;     
	</tr>
	<?php
		$Open = mysqli_connect("localhost","root","");
			if (!$Open){
			die ("Koneksi ke Engine MySQL Gagal !<br>");
			}
		$Koneksi = mysqli_select_db($Open, "adminlogin");
			if (!$Koneksi){
			die ("Koneksi ke Database Gagal !");
			}
		$Cari="SELECT * FROM tabel_berita ORDER BY id_berita";
		$Tampil = mysqli_query($Open, $Cari);
		$nomer=0;
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
				$id_berita = stripslashes ($hasil['id_berita']);
				$judul = stripslashes ($hasil['judul']);
				$kategori = stripslashes ($hasil['kategori']);
				$isi = stripslashes ($hasil['isi']);
				$tanggal = stripslashes ($hasil['tanggal']);
				$gambar = stripslashes ($hasil['gambar']);
			{
		$nomer++;
	?>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr align="center">
			<td><?=$nomer?><div align="center"></div></td>
			<td><?=$id_berita?><div align="center"></div></td>
			<td><?=$judul?><div align="center"></div></td>
			<td><?=$kategori?><div align="center"></div></td>
			<td><?=$isi?><div align="center"></div></td>
			<td><?=$tanggal?><div align="center"></div></td>
			<td><?=$gambar?><div align="center"></div></td>
			<td bgcolor="#EEF2F7" style="width: 10%;"><div align="center"><a href="edit.php?page=edit&id_berita=<?=$id_berita?>">Edit</a> | <a href="panel.php?page=hapus&id_berita=<?=$id_berita?>" OnClick="return confirm('Anda Yakin Seluruh Data Artikel <?=$id_berita?> Atas Judul <?=$judul?>  akan dihapus?');">Delete</a></div></td>
		</tr>
		<tr align="center" bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td> 
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysqli_close($Open);
	?>
	</table>
	</div>
</body>
</html>
