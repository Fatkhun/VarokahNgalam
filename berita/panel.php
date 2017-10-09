<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
  <link href="css/bootswatch.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
      <div class="container-fluid">
      <div class="col-xs-12">
        <div class="col-xs-3">
          <?php include("menuArtikel.php");?>
                </div><!--/span-->
      <div class="col-xs-9">
                  <!--letak konten-->
                    <?php
            if(empty($_GET['link']))
                        include "lihatArtikel.php";
            else
              include($_GET['link']);           
          ?>
        </div>
      </div>
      
      <footer>
      <p>Jombang Ngalam (2017) &copy; Admin Panel</p>
      </footer>
      </div>
</body>
</html>