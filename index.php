<?php
@ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SRiSHTi 2K21</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">

  
  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none" style="color: #66fcf1"></i>

  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <?php require_once 'user.php'; ?>
        <li><a href="#" class="nav-link scrollto active"><i class="fas fa-home"></i> <span>Home</span></a></li>
        <li><a href="EVENTS" class="nav-link scrollto"><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
        <li><a href="WORKSHOPS" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>Workshop</span></a></li>
        <li><a href="ABOUT" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
        <li><a href="TEAM" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
      <li><a href="FAQ" class="nav-link scrollto"><i class="fas fa-question"></i> <span>FAQ</span></a></li>
        <li><a href="FAQ-CONTACT" class="nav-link scrollto"><i class="fas fa-paper-plane"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/events.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>