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

  <title>SRiSHTi 2K21 - CONTACT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

  <link href="assets/css/contact.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">


  <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"   ></script>
	
	<script type="text/javascript">
        $(document).ready(function () {

            $("#contactbtn").click(function () {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'fname_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'email_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');
												 
						} else if (html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
                                                 </div>');


                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

  </head>

<body>

<i class="bi bi-list mobile-nav-toggle d-xl-none" style="color: #d8a31c"></i>

<header id="header" class="d-flex flex-column justify-content-center">

  <nav id="navbar" class="navbar nav-menu">
    <ul>

    <?php require_once 'user.php'; ?>
      
      <li><a href="index.php" class="nav-link scrollto"><i class="fas fa-home"></i> <span>Home</span></a></li>
      <li><a href="events.php" class="nav-link scrollto"><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
      <li><a href="workshop.php" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>Workshop</span></a></li>
      <li><a href="about.php" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
      <li><a href="team.php" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
      <li><a href="#" class="nav-link scrollto active"><i class="fas fa-paper-plane"></i> <span>Contact</span></a></li>
    </ul>
  </nav><!-- .nav-menu -->

</header>

<section id="hero" class="d-flex flex-column align-items-center justify-content-center">
    <h1>SRiSHTi  2k21</h1>
    <h2>IEEE STUDENTS CHAPTER 12951</h2>
    <a href="#header2" class="btn-get-started scrollto"><i class="bi bi-chevron-double-down"></i></a>
  </section>

  <div  id="header2" class="d-flex align-items-center header2 ">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>CONTACT US</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
  </div>

  <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4 effect7">
              <i class="fas fa-map-marker-alt"></i>
              <h3>Our Address</h3>
              <p>PSG College Of Technology,<br>Avinashi Rd, Peelamedu, Coimbatore, Tamil Nadu 641004.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4 effect7">
              <i class="fas fa-envelope"></i>
              <h3>Email Us</h3>
              <a href= "mailto:srishti2k21@gmail.com" target="_blank"><p>srishti2k21@gmail.com<br></p></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4 effect7">
              <i class="fab fa-instagram"></i>
              <h3>Instagram</h3>
              <a href="#" target="_blank"><p>srishti2k21<br></p></a>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.1857162154984!2d76.99993861407107!3d11.024688692153305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8582f1435fa59%3A0x137d95bfd8909293!2sPSG%20College%20Of%20Technology!5e0!3m2!1sen!2sin!4v1621768196145!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
          <div id="add_err2"></div>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form  effect7">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="fname" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" id="contactbtn">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

<?php require_once 'footer.php';?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 


  <script>
    window.onscroll = function() {myFunction()};
    
    var header2 = document.getElementById("header2");
    var sticky2 = header2.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset > sticky2) {
        header2.classList.add("fixed-top");
      } else {
        header2.classList.remove("fixed-top");
      }
    }
    </script>


 <!-- Vendor JS Files -->
 <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>
