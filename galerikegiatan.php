<!DOCTYPE html>
<html lang="en">

<head>
  <title>BLUD PUSKESMAS BANJAR 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styles.css">
<style>
  body {
  font-family: "Times New Roman", serif;
  line-height: 1.25;
  padding: 40px 20px;
}
.header{
  text-align: center;
  border-bottom: 1px solid #ddd;
}
table {
  border: 1px solid green;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
}
table caption {
  font-size: 1.5em;
  margin: .25em 0 .75em;
}
table tr {
  background: #FFEBCD;
  border: 1px solid green;
  padding: .35em;
}
table th,
table td {
  padding: .625em;
  text-align: center;
}
table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
  background: #483D8B;
  color: white;
}
table td img {
  text-align: center;
}
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
  table caption {
    font-size: 1.3em;
  }
  table thead {
    display: none;
  }
  table tr {
    border-bottom: 3px solid green;
    display: block;
    margin-bottom: .725em;
  }
  table td {
    border-bottom: 1px solid green;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  table td:last-child {
    border-bottom: 0;
  }
}
</style>



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 d-flex">
          <div class="logo">
        <a href="index.html"><img src="images/blud.png" alt="" class="animated bounceInDown" height="100" width="600"/></a> 
      </div>

            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

          </div>
          <div class="col-12 col-lg-6 ml-auto d-flex">
            <div class="ml-md-auto top-social d-none d-lg-inline-block">
              <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com/puskesmasbanjar1/" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
            </div>
            <form action="#" class="search-form d-inline-block">

              <div class="d-flex">
                <input type="email" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-secondary" ><span class="icon-search"></span></button>
              </div>
            </form>

            
          </div>
          <div class="col-6 d-block d-lg-none text-right">
            
          </div>
        </div>
      </div>
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center bg-success">
          
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                 <li class="active">
                  <a href="index.html" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="info.html" class="nav-link text-left">INFO TERKINI</a>
                </li>
                <li>
                  <a href="tentangkami.php" class="nav-link text-left">TENTANG KAMI</a>
                </li>
                <li>
                     <a href="galerikegiatan.php" class="nav-link text-left">GALERI KEGIATAN</a>
                </li>
                <li><a href="hubungi.html" class="nav-link text-left">HUBUNGI KAMI</a></li>
               <li><a href="admin/login.php" class="nav-link text-left">ADMIN</a></li>
            
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    <div class="site-section py-1">
      
     
     <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><BR><BR>GALERI KEGIATAN</h2>
                    <h3 class="section-subheading text-muted">PUSKESMAS BANJAR 1</h3>
                <div class="row">
                    
                               <table border=0>
                      <tr>
                          <?php    
                  include "konek.php";
                  $kolom = 4;
                          $i = 0;
              $query = mysqli_query($konek, "SELECT*FROM galeri");
                            
                            while($row = mysqli_fetch_array($query))
              {
                 if ($i >= $kolom) {
                 echo "<tr></tr>";
                $i = 0;
             }
                $i++;
                ?>
                 
                    <td><center><img width="300" src="admin/files/<?php echo $row['gambar']; ?>"/></center><br><br>
                         <?php } ?>
                     </td></tr></table>
                        </div>
           </a></div></div></div>
           
                   
        </section>  <center>  <a class="d-block"><a href="hubungi.html">NEXT</a> </center>

    
    <div class="footer">
      <div class="container">
        

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                  <script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script>
</head>

<style>
    #jam-digital{overflow:hidden; width:350px}
    #hours{float:left; width:100px; height:50px; background-color:#6B9AB8; margin-right:25px}
    #minute{float:left; width:100px; height:50px; background-color:#A5B1CB}
    #second{float:right; width:100px; height:50px; background-color:#FF618A; margin-left:25px}
    #jam-digital p{color:#000; font-size:36px; text-align:center; margin-top:4px}
</style>

<body onLoad="waktu()"><center>
    <div id="jam-digital">
        <div id="hours"><p id="jam"></p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="second"><p id="detik"></p></div>
    </div></center>
</table>
</body>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     Copyright &copy;<script>document.write(new Date().getFullYear());</script> PUSKESMAS BANJAR 1 <i class="icon-heart text-danger" aria-hidden="true"></i>JAWA BARAT  

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                   
                 
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
 
       
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>