<?php
$con = mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,'adminlogin');
if(!$con) {
die('Could not connect: ' . mysql_error());
}
?>