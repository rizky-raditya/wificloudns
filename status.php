<?php

    $mac=$_POST['mac'];

    $ip=$_POST['ip'];

    $username=$_POST['username'];

    $linklogin=$_POST['link-login'];

    $linkorig=$_POST['link-orig'];

    $error=$_POST['error'];

    $trial=$_POST['trial'];

    $loginby=$_POST['login-by'];

    $chapid=$_POST['chap-id'];

    $chapchallenge=$_POST['chap-challenge'];

    $linkloginonly=$_POST['link-login-only'];

    $linkorigesc=$_POST['link-orig-esc'];

    $macesc=$_POST['mac-esc'];

    $identity=$_POST['identity'];

    $bytesinnice=$_POST['bytes-in-nice'];

    $bytesoutnice=$_POST['bytes-out-nice'];

    $sessiontimeleft=$_POST['session-time-left'];

    $uptime=$_POST['uptime'];

    $refreshtimeout=$_POST['refresh-timeout'];

    $refreshtimeoutsec=$_POST['refresh-timeout-sec'];   

    $linkstatus=$_POST['link-status'];

    $remainbytesout=$_POST['remain-bytes-out'];

    $remainbytestotalnice=$_POST['remain-bytes-total-nice'];  

?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>Wire Guest Corner</title>

  <meta content="" name="description">

  <meta content="" name="keywords">



  <!-- Favicons -->

  <link href="assets/img/favicon.ico" rel="icon">



  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">



  <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">



</head>



<body>



  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top ">

    <div class="container d-flex align-items-center">



      <h1 class="logo mr-auto"><a href="index.html">Wire Guest</a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->

      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->



      <nav class="nav-menu d-none d-lg-block">

        <ul>

          <li class="active"><a href="#services">Status</a></li>

          <li><a href="#">Keluar</a></li>



        </ul>

      </nav><!-- .nav-menu -->



    </div>

  </header><!-- End Header -->



  <main id="main">

  

      <!-- ======= Services Section ======= -->

    <section id="services" class="services">

      <div class="container">



        <div class="section-title">

          <h2>Status</h2>

          <h3>Status <span>Wire Guest</span></h3>

        </div>



        <div class="row">

		          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="icon-box">

              <div class="icon"><i class="ri-price-tag-2-line"></i></div>

              <h4 class="title"><a href="#">Voucher</a></h4>
  		  <p class="description"><?php echo $username; ?></p>

            </div>

          </div>

		

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="icon-box">

              <div class="icon"><i class="bx bx-file"></i></div>

              <h4 class="title"><a href="#">Alamat IP</a></h4>

              <p class="description"><?php echo $ip; ?></p>

            </div>

          </div>



          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="icon-box">

              <div class="icon"><i class="ri-gradienter-line"></i></div>

              <h4 class="title"><a href="#">Sisa Waktu</a></h4>

              <p class="description"><?php echo $sessiontimeleft; ?></p>

            </div>

          </div>

		  

		  <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="icon-box">

              <div class="icon"><i class="ri-disc-line"></i></div>

              <h4 class="title"><a href="#">Waktu Aktif</a></h4>

              <p class="description"><?php echo $uptime; ?></p>

            </div>

          </div>

		  

            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="icon-box">

              <div class="icon"><i class="ri-base-station-line"></i></div>

              <h4 class="title"><a href="#">Ssid</a></h4>

              <p class="description"><?php echo $identity; ?></p>

            </div>

          </div>


          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="icon-box">

              <div class="icon"><i class="ri-bar-chart-box-line"></i></div>

              <h4 class="title"><a href="#">Pemakaian</a></h4>

              <p class="description">Upload :<?php echo $bytesinnice;?><br>Download :<?php echo $bytesoutnice; ?></p>

            </div>

          </div>


          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">

            <div class="icon-box">

              <div class="icon"><i class="bx bx-tachometer"></i></div>

              <h4 class="title"><a href="#">Sisa Kouta</a></h4>

              <p class="description"><?php echo $remainbytesout; ?><br><?php echo $remainbytestotalnice; ?></p>


            </div>

          </div>





        </div>



      </div>

    </section><!-- End Services Section -->



  </main><!-- End #main -->



  <!-- ======= Footer ======= -->

  <footer id="footer">



    <div class="footer-top">

      <div class="container">

        <div class="row">





        </div>

      </div>

    </div>



    <div class="container d-md-flex py-4">



      <div class="mr-md-auto text-center text-md-left">

        <div class="copyright">

          &copy; Copyright <strong><span>Wire Guest</span></strong>. All Rights Reserved

        </div>

      </div>

      <div class="social-links text-center text-md-right pt-3 pt-md-0">

        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>

        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>

        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>

        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>

      </div>

    </div>

  </footer><!-- End Footer -->



  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>



  <!-- Vendor JS Files -->

  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>



  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>



</body>



</html>