<?php
session_start();
extract($_POST);
$con=mysqli_connect('localhost','root','','adminlogin');

if(isset($login)){
	if(mysqli_num_rows(mysqli_query($con,"select id from login where user='$user' and pass='$pass'")))
    {
        $tipe=mysqli_fetch_row(mysqli_query($con,"select id from login where user='$user' and pass='$pass'"));
		$_SESSION['kosong']=$tipe[0];
        header("location:../berita/panel.php");
	}
	else
        $ps="
            <div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
            <h4><i class='icon glyphicon glyphicon-remove'></i> Wrong !</h4> Wrong username or password :(
            </div>
        ";
		echo $ps;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome-animation.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="container-fluid" style="background: #34495e">
    <div class="col-xs-4 col-xs-offset-4" style="margin-top:15%;">
      <div class="col-xs-12">
          <b style="color: white;font-weight: bold;text-align: center;font-size: 20px;">Login Administrator</b>
        <form method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="user" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="pass" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-block btn-flat pull-right" value="Login" name="login"/>
            </div>
          </div>
        </form>
        </div>
    </div>

    <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
