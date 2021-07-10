<?php
@ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shristi 2k21 - ABOUT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link rel = "icon" href = "assets/img/logo.png" type = "image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/about.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <!--link href="assets/css/common-styles.css" rel="stylesheet"-->
  
  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 


  
  
</head>

<body>

   <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
   <!--i class="bi bi-list mobile-nav-toggle d-xl-none" style="background: -webkit-linear-gradient(#5afacb, #f64655);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;"></i-->
  <i class="bi bi-list mobile-nav-toggle d-xl-none" style="color: #d8a31c"></i>

  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
      <?php require_once 'user.php'; ?>
        <li><a href="index.php" class="nav-link scrollto"><i class="fas fa-home"></i> <span>Home</span></a></li>
        <li><a href="events.php" class="nav-link scrollto"><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
        <li><a href="workshop.php" class="nav-link scrollto "><i class="fas fa-chalkboard-teacher"></i> <span>Workshop</span></a></li>
        <li><a href="#" class="nav-link scrollto active"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
        <li><a href="team.php" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
        <li><a href="contact.php" class="nav-link scrollto"><i class="fas fa-paper-plane"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header>

  <div  id="header2" class="d-flex align-items-center header2 fixed-top">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>ABOUT</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
  </div>

  <div class= "container-fluid">
  <div class="about-main">
    <h1>Srishti 2k21<br>IEEE STUDENTS CHAPTER 12836<br><br><span></span></h1>
    <div class="backShapes">
      <span><i class="plus"> </i></span>
      <span><i class="circ"> </i></span>
      <span><i class="plus"> </i></span>
      <span><i class="circ"> </i></span>
        <span><i class="plus"> </i></span>
     
  
    </div>

    <div class="bottomPart animateIn">
      <div class="floatingText animateIn" >
        <h2>Be Creative and<br>Always have fun!</h2>
      <p>Join us in our make the world a little more colourful and a little less dull. We work hard to bring creative work and imaginative pojects into this world. Parturient felis consequat id wisi, posuere id suscipit sed elit, nunc tellus, ut ut et quis. Dictum amet ultrices dictum sed libero ipsum, lobortis ut vitae dolor in donec. Pellentesque turpis vel tempor. Eu est mattis praesentium perspiciatis quis natoque, mauris rhoncus. </p>
        <a class="buttonLink">More Info</a>
      </div>
      <img src="assets/img/psg.jpg" >
      <span class="gradLine animateIn"></span>
    </div>
  
  <div class="bottomPart reverse animateIn">
      <div class="floatingText animateIn" >
        <h2>When in doubt<br>just smile away.</h2>
      <p>It's a proven fact that smiling makes you smile. Posuere id suscipit sed elit, nunc tellus, ut ut et quis. Dictum amet ultrices dictum sed libero ipsum, lobortis ut vitae dolor in donec. Pellentesque turpis vel tempor. Eu est mattis praesentium perspiciatis quis natoque, mauris rhoncus.</p>
        <a class="buttonLink">More Info</a>
      </div>
      <img src="assets/img/ieee.jpg">
    <span class="gradLine animateIn"></span>
    </div>


    
      <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h3>Technical events</h3>
                    <span class="counter-value">25</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter orange">
                    <div class="counter-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <h3>Non-technical events</h3>
                    <span class="counter-value">25</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter green">
                    <div class="counter-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <h3>workshop</h3>
                    <span class="counter-value">6</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter blue">
                    <div class="counter-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <h3>paper presentation</h3>
                    <span class="counter-value">4</span>
                </div>
            </div>
        </div>
    </div>

      <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h1><u>OUR WORKS </u></h1>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
              <div class="title"><a href="events.html">events</a></div>
              <p class="description">look into our wide range of technical and non technical events</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-bounding-box"></i></div>
              <div class="title"><a href="index.html">workshop</a></div>
              <p class="description">Bored at home , come and discover yourself</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-globe"></i></div>
              <div class="title"><a href="index.html">paper presentation</a></div>
              <p class="description">present and prove yourself worthy</p>
            </div>
            
        
          </div>
  
        </div>
      </section><!-- End Services Section -->
    
  </div>
</div>

    
   

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php require_once 'footer.php';?>
  <!-- Vendor JS Files 
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>-->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    var lastScrollTop = 0;
 var lineheight = 50;
 $(window).scroll(function(event){
    var st = $(this).scrollTop();
   
     var lineTop = $('h1 span').scrollTop();
   
    if (st > lastScrollTop){
        // downscroll code
      $('.backShapes span i').css({transform: "rotate(" + st/5 + "deg)" });
      
      if (st > lineTop && lineheight< 550){
       lineheight = lineheight + 10;
       $('h1 span').css('height',lineheight+'px');
      }
          
    } else {
       // upscroll code
      $('.backShapes span i').css({transform: "rotate(" + st/5 + "deg)" });
 
      if (st > lineTop && lineheight>50){
        lineheight = lineheight - 10;
       $('h1 span').css('height',lineheight+'px');
      }
    }
    lastScrollTop = st;
   
   checkAnimateIn(st);
 });
 
 function checkAnimateIn(st){
   var pageHeight = $(window).height();
   var triggerPoint = pageHeight/2 + st;
   $('.animateIn').each(function(){
     var aniTop = $(this).offset().top;
     console.log(aniTop, triggerPoint);
     if(aniTop < triggerPoint){
       $(this).addClass('open');
     }else{
       $(this).removeClass('open');
     }
   });
 }
 
 
  </script>
  <script>
      $(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
  </script>

 
   

</body>

</html>