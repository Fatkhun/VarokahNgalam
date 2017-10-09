<?php
$koneksi = mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($koneksi,'adminlogin');
if(! $koneksi ) {
die('Could not connect: ' . mysql_error());
}

?>