<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hapus Artikel</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/styledelete.css">
	<?php
	        $con = mysqli_connect("mysql.idhostinger.com","u272182955_admin","mancilan28");   
	        mysqli_select_db($con, "u272182955_admin");
	        ?>
	    <?php
	    switch($_GET['act']){
	        case 'del';
	    $id=$_GET['id_upload'];
	    $qr=mysqli_query($con, "SELECT * FROM upload WHERE id_upload='$id'");
	    $r=mysqli_fetch_array($qr);
	    
	    $hapus=mysqli_query($con, "DELETE FROM upload WHERE id_upload ='$id'") or die ('query gagal'.mysql_error());
	    if ($hapus){
	            ?><script language="javascript">alert('Data Anda Berhasil Dihapus')</script><?php
	            ?><script>document.location.href="../berita/panel.php?link=../uploaddownload/lihat_file.php";</script><?php
	        }
	        break;
	    }
	    ?>
</head>
<body>
	<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:97%; height:100vh;">
	<h2 align="center"><font color="orange" size="4" face="arial"><b>Data Upload</b></font></h2>
	<input type="button" value="Export To PDF" title="Save as PDF Format" onclick=window.open('#');><br><br>
	<table>
	<tr bgcolor="#FFA800" style="width: 70%;">
		<th width="5">Nomor</td>&nbsp;
		<th width="5">id_upload</td>&nbsp;
		<th width="15">Nama_File</td>&nbsp;
		<th width="15">Deskripsi</td>&nbsp;      
		<th width="15">Tanggal</td>&nbsp;
		<th width="15">Hits</td>&nbsp;
		<th width="20">Action</td>&nbsp;     
	</tr>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);
		$Open = mysqli_connect("mysql.idhostinger.com","u272182955_admin","mancilan28");
			if (!$Open){
			die ("Koneksi ke Engine MySQL Gagal !<br>");
			}
		$Koneksi = mysqli_select_db($Open, "u272182955_admin");
			if (!$Koneksi){
			die ("Koneksi ke Database Gagal !");
			}
		$Cari="SELECT * FROM upload ORDER BY id_upload";
		$Tampil = mysqli_query($Open, $Cari);

		$nomer=0;
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
	    		$id = $hasil['id_upload'];
				$id_upload = stripslashes ($hasil['id_upload']);
				$nama_file = stripslashes ($hasil['nama_file']);
				$deskripsi = stripslashes ($hasil['deskripsi']);
				$tanggal = stripslashes ($hasil['tgl_upload']);
				$hits = stripslashes ($hasil['hits']);
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
			<td><?=$id_upload?><div align="center"></div></td>
			<td><?=$nama_file?><div align="center"></div></td>
			<td><?=$deskripsi?><div align="center"></div></td>
			<td><?=$tanggal?><div align="center"></div></td>
			<td><?=$hits?><div align="center"></div></td>
			<td width="71"><div align="center"><a href="../uploaddownload/lihat_file.php?act=del&id_upload=<?php echo "$id"; ?>">Delete</div></td>
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
