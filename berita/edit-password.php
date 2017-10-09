<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lupa Password</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
	<script type="text/javascript">
	    function printValue(sliderID, textbox) {
	    var x = document.getElementById(textbox);
	    var y = document.getElementById(sliderID);
	    x.value = y.value;
	}
	</script>
<head>
<body>
	
	<h2>Edit Password</h2>
	
	<?php
	//mengatasi error notice dan warning
	//error ini biasa muncul jika dijalankan di localhost, jika online tidak ada masalah
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	
	//koneksi ke database
	include 'koneksi.php';
	
	//proses jika tombol rubah di klik
	if($_POST['submit']){
		//membuat variabel untuk menyimpan data inputan yang di isikan di form
		$password_lama			= $_POST['password_lama'];
		$password_baru			= $_POST['password_baru'];
		$konfirmasi_password	= $_POST['konfirmasi_password'];
		
		//cek dahulu ke database dengan query SELECT
		//kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
		//encrypt -> md5($password_lama)
		$password_lama	= $password_lama;
		$cek 			= mysqli_query($koneksi, "SELECT password FROM userinfotable WHERE password='$password_lama'");
		
		if($cek->num_rows){
			//kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
			//membuat kondisi minimal password adalah 5 karakter
			if(strlen($password_baru) <= 5){
				//jika password baru sudah 5 atau lebih, maka lanjut ke bawah
				//membuat kondisi jika password baru harus sama dengan konfirmasi password
				if($password_baru == $konfirmasi_password){
					//jika semua kondisi sudah benar, maka melakukan update kedatabase
					//query UPDATE SET password = encrypt md5 password_baru
					//kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
					$password_baru 	= $password_baru;
					$username 		= $_SESSION['username']; //ini dari session saat login
					
					$update 		= mysqli_query($koneksi, "UPDATE userinfotable SET password='$password_baru' WHERE username='$username'");
					if($update){
						//kondisi jika proses query UPDATE berhasil
						echo '<script language="javascript">alert("Password berhasil diubah"); document.location="homeuser.php?link=info-user.php";</script>';
					}else{
						//kondisi jika proses query gagal
						echo '<script language="javascript">alert("Password gagal diubah"); document.location="homeuser.php?link=edit-password.php";</script>';
					}					
				}else{
					//kondisi jika password baru beda dengan konfirmasi password
					echo '<script language="javascript">alert("Konfirmasi password tidak cocok"); document.location="homeuser.php?link=edit-password.php";</script>';
				}
			}else{
				//kondisi jika password baru yang dimasukkan kurang dari 5 karakter
				echo '<script language="javascript">alert("Minimal password baru adalah 5 karakter"); document.location="homeuser.php?link=edit-password.php";</script>';
			}
		}else{
			//kondisi jika password lama tidak cocok dengan data yang ada di database
			echo '<script language="javascript">alert("Password lama tidak cocok"); document.location="homeuser.php?link=edit-password.php";</script>';
		}
	}
	?>
	
	<!-- mulai form rubah password -->
	<form method="post" action="">
		<div class="form-horizontal">
			<table>
				<tr>
					<td>Password Lama</td>
					<td>:</td>
					<td><input type="password" name="password_lama" required></td>
				<tr>
				<tr>
					<td>Password Baru</td>
					<td>:</td>
					<td><input type="password" name="password_baru" required></td>
				<tr>
				<tr>
					<td>Konfirmasi Password</td>
					<td>:</td>
					<td><input type="password" name="konfirmasi_password" required></td>
				<tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
					<td>
					<br>
						<button class="btn btn-success" type="submit" name="submit" value="Rubah">Ubah Password</button>
					</td>
				<tr>
			</table>
		</div>
	</form>
	<!-- selesai form rubah password -->

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="../assets/js/pagescroll.js"></script>
	<script src="../assets/js/jquery.stellar.js"></script>
	<script src="../assets/js/scrip.js"></script>
	<script src="../assets/js/jquery.nicescroll.js"></script>
</body>
</html>