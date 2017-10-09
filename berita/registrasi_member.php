<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Member</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/styledelete.css">
	<?php
	        $con = mysqli_connect("mysql.idhostinger.com","u272182955_admin","mancilan28");   
	        mysqli_select_db($con, "u272182955_admin");
	        ?>
	    <?php
	    switch($_GET['act']){
	        case 'del';
	    $id=$_GET['userinfotable'];
	    $qr=mysqli_query($con, "SELECT * FROM userinfotable WHERE id='$id'");
	    $r=mysqli_fetch_array($qr);
	    
	    $hapus=mysqli_query($con, "DELETE FROM userinfotable WHERE id='$id'") or die ('query gagal'.mysql_error());
	    if ($hapus){
	            ?><script language="javascript">alert('Data Anda Berhasil Dihapus')</script><?php
	            ?><script>document.location.href="panel.php?link=registrasi_member.php";</script><?php
	        }
	        break;
	    }
	    ?>
</head>
<body>
	<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:97%; height:100vh;">
	<h2 align="center"><font color="orange" size="4" face="arial"><b>Data Member</b></font></h2>
	<input type="button" value="Export To PDF" title="Save as PDF Format" onclick=window.open('#');><br><br>
	<table>
	<tr bgcolor="#FFA800" style="width: 70%;">
		<th width="100">Nomor</td>&nbsp;
		<th width="100">id</td>&nbsp;
		<th width="100">Username</td>&nbsp;
		<th width="100">Full Name</td>&nbsp;      
		<th width="100">Gender</td>&nbsp;
		<th width="100">Password</td>&nbsp;
		<th width="100">Action</td>&nbsp;     
	</tr>
	<?php
		error_reporting(E_ALL ^ E_NOTICE);
		$Open = mysqli_connect("mysql.idhostinger.com","u272182955_admin","");
			if (!$Open){
			die ("Koneksi ke Engine MySQL Gagal !<br>");
			}
		$Koneksi = mysqli_select_db($Open, "u272182955_admin");
			if (!$Koneksi){
			die ("Koneksi ke Database Gagal !");
			}
		$Cari="SELECT * FROM userinfotable ORDER BY id";
		$Tampil = mysqli_query($Open, $Cari);

		$nomer=0;
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
	    		$id = $hasil['id'];
				$id_member = stripslashes ($hasil['id']);
				$username = stripslashes ($hasil['username']);
				$fullname = stripslashes ($hasil['fullname']);
				$gender = stripslashes ($hasil['gender']);
				$password = stripslashes ($hasil['password']);
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
			<td><?=$id_member?><div align="center"></div></td>
			<td><?=$username?><div align="center"></div></td>
			<td><?=$fullname?><div align="center"></div></td>
			<td><?=$gender?><div align="center"></div></td>
			<td><?=$password?><div align="center"></div></td>
			<td width="71"><div align="center"><a href="registrasi_member.php?act=del&id=<?php echo "$id"; ?>">Delete</div></td>
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
