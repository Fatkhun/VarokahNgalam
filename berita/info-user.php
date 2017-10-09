<!DOCTYPE html>
<html>
<head>
	<title>Info User</title>
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
</head>
<body>

	<?php
	include 'koneksi.php';
	session_start();
	 
	if(!isset($_SESSION['username'])){
	 echo '<script language="javascript">alert("Anda harus Login!"); document.location="../LoginPage/index.php";</script>';
	}
	?>
	<?php
	//testing query
	 include 'koneksi.php';

	 $user = $_SESSION['username'];
	 $perintah = "SELECT * FROM userinfotable where username='$user'"; //pilih berdasarkan login username
	 $query = mysqli_query($koneksi, $perintah); //buat query
	while($data = mysqli_fetch_array($query)){
	?>

	<div class="container">
	  <h2>Informasi Member</h2>                                                                        
	  <div class="table-responsive">          
	  <table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>Username</th>
	        <th>Nama Lengkap</th>
	        <th>Gender</th>
	        <th>Status</th>
	        <th>Password</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td><?=$data['username'];?></td>
	        <td><?=$data['fullname'];?></td>
	        <td><?=$data['gender'];?></td>
	        <td><?=$data['qualification'];?></td>
	        <td><?=$data['password'];?></td>
	        <td><button class="btn btn-info" type="submit"><a href="homeuser.php?link=edit-password.php">Edit</a></button></td>
	      </tr>
	    </tbody>
	  </table>
	  </div>
	</div>
	<?php
	}
	?>	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="../assets/js/pagescroll.js"></script>
	<script src="../assets/js/jquery.stellar.js"></script>
	<script src="../assets/js/scrip.js"></script>
	<script src="../assets/js/jquery.nicescroll.js"></script>
</body>
</html>