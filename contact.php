<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" id="home">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
     <title>Contact</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script type="text/javascript">
            function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }
        </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">JOMBANG NGALAM</a>
            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">DESTINASI <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="berita/index1.php">WISATA ALAM</a></li>
                      </ul>
                    </li>
                    <li><a href="uploaddownload/download.php">DOWNLOAD FILE</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="LoginPage/index.php"><i class="fa fa-user" title="sign-in"></i></a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
  

    <!--CONTACT SECTION-->    
    <section style="margin-top: 10%;">
        <div class="container">
             
            <div class="row g-pad-bottom">
                <div class="col-md-6 ">
                    <h2>Lokasi</h2>
                 
                    <p>
                         <strong> Alamat: </strong> &nbsp;Jombang Mojoagung
                        <br />
                        Jombang ngalam merupakan website pariwisata khusus daerah jombang. Berbagai macam informasi mengenai wisata khas jombang akan dirangkum menjadi informasi yang mudah diakses oleh baik member maupun khalayak umum.              
                    </p>
                    <form>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                   <div class="peta-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15820.440769392444!2d112.33260477059547!3d-7.562963462732858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786c84f292ce65%3A0x1f31944091f61a45!2sMancilan%2C+Mojoagung%2C+Kabupaten+Jombang%2C+Jawa+Timur!5e0!3m2!1sid!2sid!4v1497367013177" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                   </div>

                </div>
            </div>
        </div>
    </section>
    <!--END CONTACT SECTION-->

    <!--FOOTER SECTION -->
    <hr>
    <div id="footer" class="col-xs-8 col-xs-offset-2">
        <div class="row text-left container">
          <div class="col-xs-4">
            <h3>Social Link</h3>
            <a href="" title="facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href="" title="twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
            <a href="" title="instagram"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="" title="google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
            </div>
        <div class="col-xs-4">
            <h3>Partner</h3>
            <p>Mas Fatkhun Blog</p>
            <p>W3school</p>
            <p>idHostinger</p>
        </div>
        <div class="col-xs-4">
            <h3>Layanan</h3>
            <p><i class="fa fa-envelope fa-2x"></i> jbgngalam@gmail.com</p>
            <p><i class="fa fa-phone fa-2x"></i> 085732326736</p>
            <p><i class="fa fa-home fa-2x"></i> Mojoagung Mancilan</p>
        </div>
      </div>
    
    </div>
    <div class="col-xs-12">
        <hr>
        <footer>
        <p>Jombang Ngalam (2017) &copy; Jombang Beriman</p>
        <div id="ikon1" class="col-xs-6 col-xs-6">
            <a href="#home" class="page-scroll"><img src="assets/Images/under.png" style="width: 50px;height: 50px;transform: rotate(270deg);border-radius: 50%;background: lightskyblue;margin-top: 4px;float: right;"></a>
        </div>
        </footer>
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="assets/plugins/jquery.prettyPhoto.js"></script>    
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/pagescroll.js"></script>
    <script src="assets/js/jquery.stellar.js"></script>
    <script src="assets/js/scrip.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>

</body>
</html>
