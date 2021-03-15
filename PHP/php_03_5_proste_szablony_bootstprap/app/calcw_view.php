<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	<meta name="description" content="<?php out($page_description); if (!isset($page_description)) {  ?> Opis domyślny ... <?php } ?>">
	<title><?php out($page_title); if (empty($page_title)) {  ?> Tytuł domyślny ... <?php } ?></title>
	
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/style.css">

  <!-- Vendor CSS Files -->
  <link href="<?php print(_APP_URL); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php print(_APP_URL); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php print(_APP_URL); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php print(_APP_URL); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php print(_APP_URL); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php print(_APP_URL); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php print(_APP_URL); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php print(_APP_URL); ?>/assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Kalkulator</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?php print(_APP_URL); ?>/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="">Licz</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero No Slider Section ======= -->
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h2>Witam w kalkulatorze oprocentowania</h2>
          <p>Dzięki temu kalkulatorowi możesz obliczyć jakie będą twoje miesięczne raty. Podaj kwotę, oprocentowanie i czas na jakich chcesz pożyczyć a kalkulator automatycznie obliczy wysokość spłaty. </p>
          <a onclick="location.href='#oblicz';" class="btn-get-started ">Oblicz !</a>
		  
        </div>
      </div>
    </div>
  </section><!-- End Hero No Slider Sectio -->
   <a id="oblicz"></a>
  <main id="main">


    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
		
        <div class="section-title">
          <h2>Kalkulator</h2>
        
        </div>

        <div class="row" data-aos="fade-up">

			<form action="<?php print(_APP_ROOT); ?>/app/calcw.php" method="post">
				<table>
				<tr>
				<td><label for="id_x">Kwota: </label></td>
				<td><input id="id_x" type="text" name="kwota" value="<?php out($form['kwota']); ?>" /></td>
				</tr><tr>
				<td><label for="id_y">Na ile lat: </label></td>
				<td><input id="id_y" type="text" name="czas" value="<?php out($form['czas']); ?>" /></td>
				</tr><tr>	
				<td><label for="id_op">Oprocentowanie: </label></td>
				<td><input id="id_op" type="text" name="oprocentowanie" value="<?php out($form['oprocentowanie']); ?>" /></td>
				</tr>
				<td><input type="submit" value="Oblicz" /></td>
				</table>
			</form>

						<div class="messages">

						<?php
						//wyświeltenie listy błędów, jeśli istnieją
						if (isset($messages)) {
							if (count ( $messages ) > 0) {
							echo '<h4>Wystąpiły błędy: </h4>';
							echo '<ol class="err">';
								foreach ( $messages as $key => $msg ) {
									echo '<li>'.$msg.'</li>';
								}
								echo '</ol>';
							}
						}
						?>

						<?php
						//wyświeltenie listy informacji, jeśli istnieją
						if (isset($infos)) {
							if (count ( $infos ) > 0) {
							echo '<h4>Informacje: </h4>';
							echo '<ol class="inf">';
								foreach ( $infos as $key => $msg ) {
									echo '<li>'.$msg.'</li>';
								}
								echo '</ol>';
							}
						}
						?>

						<?php if (isset($result)){ ?>
							<h4>Wynik</h4>
							<p class="res">
						<?php print($result); ?>
							</p>
						<?php } ?>

						</div>

</div> <!--KONIEC KONTENTU-->
</div>
       
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">



    <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-xl-8 footer-info">
            <h3>Dziekujemy !</h3>
            <p>Wkrótce pojawi się wiecej funkcji.</p>
          
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php print(_APP_URL); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php print(_APP_URL); ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php print(_APP_URL); ?>/assets/js/main.js"></script>

</body>

</html>