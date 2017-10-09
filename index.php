<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <title>Jombang Ngalam</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-animation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
      <script type="text/javascript">
        function printValue(sliderID, textbox) {
            var x = document.getElementById(textbox);
            var y = document.getElementById(sliderID);
            x.value = y.value;
        }
      </script>
</head>
<body>
<header>
    <!-- NAV SECTION -->
        <div class="navbar navbar-inverse navbar-fixed-top">
      
       <div class="container">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand page-scroll" href="#home">JOMBANG NGALAM</a>
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

        <div id="wall1" class="image">
            <div class="skrip col-xs-8 col-xs-offset-2 text-center">
                <h1>Pariwisata Jombang</h1>
            </div>
            <div class="extratext col-xs-8 col-xs-offset-2 text-center">
                <p>Selamat datang di website pariwisata jombang</p>
            <div class="col-xs-12" style="margin-top: 20px;">
              <form class="form-search" name="form1" method="get" action="berita/search.php">
                  <input class="search" type="text" placeholder=" Cari..." required name="q" id="q" style="width: 400px;height: 40px;border-radius: 10%;">
                  <button class="btn btn-success" type="button" value="Search" style="width: 100px;max-height: 40px;">Search</button>   
              </form>
            </div>
                <div id="ikon">
                    <a href="#content_1" class="page-scroll"><img src="assets/Images/under.png"></a>
                </div>
            </div>
        </div>
</header>
<section>
    <article>
        <div class="clearfix">

            <div id="content_1" class="content">
            <div class="pendopo-ikon col-xs-6 col-xs-6">
                <img src="assets/Images/pendopo.jpg" width="450" height="450" class="img-responsive img-thumbnail" style="margin-bottom: 30px;float: right;">
            </div>
            <h1>Wisata Daerah</h1>
            <p>Kabupaten Jombang memiliki berbagai keindahan alam dan potensi pariwisata lain yang menarik. Sangat disayangkan, potensi tersebut pada umumnya belum digali, dan tidak memiliki pendukung sarana dan prasarana yang memadai untuk memajukan pariwisata di Kabupaten Jombang, sehingga menunggu adanya investasi untuk menggarapnya. Hal ini sangat penting dan menguntungkan, mengingat posisi Kabupaten Jombang yang bersebelahan dengan daerah tujuan wisata alam Malang di tenggara dan Pacet-Trawas-Tretes di timur; serta wisata historis (situs Majapahit) Trowulan. Di Jombang memiliki beberapa tempat pariwisata yang menarik, selain itu terdapat wisata buatan salah satunya yaitu Tirta Wisata yang terletak di wilayah Kecamatan Peterongan.</p>
            </div>
        </div>
        
        <div class="clearfix">
           <div id="wall2" class="image-content"></div>
        <div id="content_2" class="content" >
            <div class="wisata-ikon col-xs-6 col-xs-6">
                <img src="assets/Images/page.jpg" width="450" height="450" class="img-responsive img-thumbnail" style="margin-bottom: 30px;float: right;">
            </div>
            <h1>Berbagai Macam Wisata ?</h1>
            <p>Kabupaten Jombang memiliki berbagai keindahan alam dan potensi obyek wisata menarik. Secara umum Obyek wisata adalah suatu obyek yang menjadi tujuan kunjungan wisatawan karena mempunyai sumber daya tarik, baik alamiah, maupun buatan manusia, seperti keindahan alam/pegunungan, pantai, fauna, flora, kebun binatang, bangunan kuno bersejarah, monumen-monumen, dan candi-candi.</p>
            
        </div> 
        </div>
        <div id="wall3" class="image-content">
        </div>
        
    </article>
</section>
    <div class="footer">
    <div id="ikon1" class="col-xs-6 col-xs-6">
        <a href="#home" class="page-scroll"><img src="assets/Images/under.png" style="width: 50px;height: 50px;transform: rotate(270deg);border-radius: 50%;background: lightskyblue;margin-top: 4px"></a>
    </div>
        <footer>
            <p class="text-right" style="padding: 10px; font-size: 20px;font-weight: bold;margin-right: 10px;">
                Jombang Ngalam &copy 2017
            </p>
        </footer>
    </div>
    
    <!-- Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/pagescroll.js"></script>
    <script src="assets/js/jquery.stellar.js"></script>
    <script src="assets/js/scrip.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
</body>
</html>
