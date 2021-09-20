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

  <title>SRiSHTi 2K21 - EVENTS</title>
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
  <link href="assets/css/style3.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript" >

  $(document).ready(function () {
      $("#btn_1").click(function(){
          evname = "ELECTROENDOWCY";
          registerEvent(evname);
      });
      $("#btn_2").click(function(){
          evname = "CODERS CRUSADE";
          registerEvent(evname);
      });
      $("#btn_3").click(function(){
          evname = "CLASH OF TWINS";
          registerEvent(evname);
      });
      $("#btn_4").click(function(){
          evname = "INFINIWIZ";
          registerEvent(evname);
      });
      $("#btn_5").click(function(){
          evname = "TECHNOPHILIA";
          registerEvent(evname);
      });
      $("#btn_6").click(function(){
          evname = "THE BRAINIACS";
          registerEvent(evname);
      });
      $("#btn_7").click(function(){
          evname = "BRAUN OVER BRAIN";
          registerEvent(evname);
      });
      $("#btn_8").click(function(){
          evname = "PUZZLE HUNTERS";
          registerEvent(evname);
      });
      $("#btn_9").click(function(){
          evname = "QUESTURE";
          registerEvent(evname);
      });
      $("#btn_10").click(function(){
          evname = "QUIZARD";
          registerEvent(evname);
      });
      $("#btn_11").click(function(){
          fsname = "PROJECT EXPO";
          registerFlagEvent(fsname);
      });
      $("#btn_12").click(function(){
          fsname = "EXPLORINO";
          registerFlagEvent(fsname);
      });
      
    });
    
    
    function register_alert(evname){
      alert(`You have Registered for ${evname}`);
  }

  function registerEvent(evname)
    {
      $.ajax({
                    type: "POST",
                    url: "eregistered.php",
                    data: "evname=" + evname ,
                    success: function (html) {
                        if (html == 'true') {

                        register_alert(evname);
                        
                        }  else if (html == 'rem') {
                           
                        alert("Already Registered");

                        } else {
                            
                            alert("Login before registering to a Event")
                            window.location.href = "login.php";
                            
                        }
  }

  });
  }
  function registerFlagEvent(fsname)
    {
      $.ajax({
                    type: "POST",
                    url: "flagregister.php",
                    data: "fsname=" + fsname ,
                    success: function (html) {
                        if (html == 'true') {

                        register_alert(fsname);
                        
                        }  else if (html == 'rem') {
                           
                        alert("Already Registered");

                        } else {
                            
                            alert("Login before registering to a Event")
                            window.location.href = "login.php";
                            
                        }
  }

  });
  }
  
  </script>
  
</head>

<body>
  
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none" style="color: #66fcf1"></i>

  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>

      <?php require_once 'user.php'; ?>
        
        <li><a href="HOME" class="nav-link scrollto"><i class="fas fa-home"></i> <span>Home</span></a></li>
        <li><a href="#" class="nav-link scrollto active"><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
        <li><a href="WORKSHOPS" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>Workshop</span></a></li>
        <li><a href="ABOUT" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
        <li><a href="TEAM" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
        <li><a href="SCHEDULE" class="nav-link scrollto"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
      <li><a href="FAQ-CONTACT" class="nav-link scrollto"><i class="fas fa-question"></i> <span>FAQ / Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header>

  <?php require_once 'header.php';?>

  <div  id="header2" class="d-flex align-items-center header2 ">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>EVENTS</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
  </div>

<div class="container-fluid">
    <div class="category-bar" style="top: 55px !important">
            <nav>
                <div id="sliding-bar"></div>
                <a href="#Tech">TECHNICAL</a>
                <a href="#Flag">FLAGSHIP</a>
                <a href="#NonTech">NON-TECHNICAL</a>
            </nav>
        </div>

    <div class="card-area container">
        <!-- <div class="container"> -->
        <div class="row">
            <!-- Technical -->
            <div class="col-lg-12" id="Tech" style="padding-bottom: 100px;"><br></div>
            <div class="col-lg-12"><h3 style="height: 70px;color: #66fcf1;text-align: center;font-weight: 500; font-size: 30px; margin-bottom:20px;">Technical Events</h3></div>
            <div class="col-lg-4  col-md-6 col-sm-12">
            <div class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front card-front-1">
                                <div class="card-front__tp card-front__tp-1">
                                    <img src="assets/img/icons/TECH/electro-endowcy-c.png" style="height: 60px; width: 60px;">
                                    <h2 class="card-front__heading">
                                        <br>
                                        ELECTROENDOWCY
                                    </h2>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view-1">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back card-back-1">
                                <div class="video__container-1">
                                    <img src="assets/img/icons/TECH/electro-endowcy-c.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                    <h3 style="font-size:15px;">ELECTROENDOWCY</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page-1">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading-1">
                                <!-- For urban lovers -->
                            </h3>
                            <p class="inside-page__text-1">
                               Life is a puzzle. Tired of finding logic & solving puzzle in people's words ! Let's come together & technically workout our minds in solving these puzzles.
                            </p>
                            <a id="div-1" class="inside-page__btn inside-page__btn-1">View details</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="hide"><br><br></div>
            
            <div class="col-lg-4  col-md-6 col-sm-12">
                
                <section class="card-section">
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card__container">
                                <div class="card-front card-front-2">
                                    <div class="card-front__tp card-front__tp-2">
                                        <img src="assets/img/icons/TECH/coders-crusade-b.png" style="height: 60px; width: 60px;">
                                                   <h2 class="card-front__heading"><br>
                                                       CODER'S CRUSADE
                                                   </h2>
                                    </div>
    
                                    <div class="card-front__bt">
                                        <p class="card-front__text-view card-front__text-view-2">
                                            View me
                                        </p>
                                    </div>
                                </div>
    
                                <div class="card-back card-back-2">
                                    <div class="video__container-2">
                                        <img src="assets/img/icons/TECH/coders-crusade-b.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                        <h3>CODER'S CRUSADE</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="inside-page-2">
                            <div class="inside-page__container">
                                <h3 class="inside-page__heading inside-page__heading-2">
                                    <!-- For snow lovers -->
                                </h3>
                                <p class="inside-page__text-2">
                                   Hey Coders !<br>Start sharpening your fingertips so as to lead campaign by  providing a fix to a buggy solution !

                                </p>
                                <a id="div-6" class="inside-page__btn inside-page__btn-2">View details</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="hide-1"><br><br></div>

            <div class="col-lg-4  col-md-6 col-sm-12">
            <div class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front card-front-1">
                                <div class="card-front__tp card-front__tp-1">
                                    <img src="assets/img/icons/TECH/clash-of-twins-c.png" style="height: 60px; width: 60px;">
                                    <h2 class="card-front__heading"><br>
                                        CLASH OF TWINS
                                    </h2>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view-1">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back card-back-1">
                                <div class="video__container-1">
                                    <img src="assets/img/icons/TECH/clash-of-twins-c.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                    <h3>CLASH OF TWINS</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page-1">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading-1">
                                <!-- For urban lovers -->
                            </h3>
                            <p class="inside-page__text-1">
                               Is a tantalizing mix of knowledge and application of spontaneous skills.
                               Is it only technical content??

                            </p>
                            <a id="div-3" class="inside-page__btn inside-page__btn-1">View details</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-lg-12 hide-2"><br><br></div>
            <div class="col-lg-2 col-md-6 col-sm-12 hide-2"></div>

            <div class="col-lg-4  col-md-6 col-sm-12">
                
                <section class="card-section">
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card__container">
                                <div class="card-front card-front-2">
                                    <div class="card-front__tp card-front__tp-2">
                                        <img src="assets/img/icons/TECH/infiniwiz-b.png" style="height: 60px; width: 60px;">
                                                   <h2 class="card-front__heading"><br>
                                                       INFINIWIZ
                                                   </h2>
                                    </div>
    
                                    <div class="card-front__bt">
                                        <p class="card-front__text-view card-front__text-view-2">
                                            View me
                                        </p>
                                    </div>
                                </div>
    
                                <div class="card-back card-back-2">
                                    <div class="video__container-2">
                                        <img src="assets/img/icons/TECH/infiniwiz-b.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                        <h3>INFINIWIZ</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="inside-page-2">
                            <div class="inside-page__container">
                                <h3 class="inside-page__heading inside-page__heading-2">
                                </h3>
                                <p class="inside-page__text-2">
                                   Disappointed that the avengers can’t gather anymore? What if you can summon them in this virtual prison break?<!-- But wait......make sure to fine tune your brain because it's technical event after all. -->

                                </p>
                                <a id="div-4" class="inside-page__btn inside-page__btn-2" style="color: #66fcf1;">View details</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="hide-1"><br><br></div>
            <div class="col-lg-2 col-md-3 col-sm-3 hide-1"></div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <section class="card-section">
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card__container">
                                <div class="card-front card-front-1">
                                    <div class="card-front__tp card-front__tp-1">
                                        <img src="assets/img/icons/TECH/technophilia-c.png" style="height: 60px; width: 60px;">
                                        <h2 class="card-front__heading"><br>
                                             TECHNOPHILIA
                                        </h2>
                                    </div>
    
                                    <div class="card-front__bt">
                                        <p class="card-front__text-view card-front__text-view-1">
                                            View me
                                        </p>
                                    </div>
                                </div>
                                <div class="card-back card-back-1">
                                    <div class="video__container-1">
                                        <img src="assets/img/icons/TECH/technophilia-c.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                        <h3 style="font-size:20px;">TECHNOPHILIA</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="inside-page-1">
                            <div class="inside-page__container">
                                <h3 class="inside-page__heading inside-page__heading-1">
                                    <!-- For urban lovers -->
                                </h3>
                                <p class="inside-page__text-1">
                                  Engage your mind in enriching innovative activities by putting your brains into real time issues of electrical and electronics. Get ready with your thinking caps!
                                </p>
                                <a id="div-5" class="inside-page__btn inside-page__btn-1">View details</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="hide"><br><br></div>
            <div class="col-lg-2 col-md-6 col-sm-12"></div>

            <!-- Flagship -->
            <div class="col-lg-12" id="Flag" style="padding-bottom: 100px;"><br></div>
            <div class="col-lg-12"><h3 style="height: 70px;color: #66fcf1;text-align: center;font-weight: 500; font-size: 30px; margin-bottom:20px;">Flagship Events</h3></div>
            <div class="col-lg-2 col-md-6 col-sm-12 hide-2"></div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front card-front-1">
                                <div class="card-front__tp card-front__tp-1">
                                    <img src="assets/logo/technical.png" style="height: 60px; width: 60px;">
                                    <h2 class="card-front__heading">
                                        City break
                                    </h2>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view-1">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back card-back-1">
                                <div class="video__container-1">
                                    <img src="assets/logo/technical-b.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                    <h3>Technical Event</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page-1">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading-1">
                                For urban lovers
                            </h3>
                            <p class="inside-page__text-1">
                               As cities never sleep, there are always something going on, no matter what time!
                            </p>
                            <a id="div-7" class="inside-page__btn inside-page__btn-1">View details</a>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <div class="hide"><br><br></div>

            <div class="col-lg-4  col-md-6 col-sm-12">
            
                <div class="card-section">
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card__container">
                                <div class="card-front card-front-2">
                                    <div class="card-front__tp card-front__tp-2">
                                        <img src="assets/img/icons/FLAG/explorino-b.png" style="height: 60px; width: 60px;">
                                                   <h2 class="card-front__heading"><br>
                                                       EXPLORINO 
                                                   </h2>
                                    </div>
    
                                    <div class="card-front__bt">
                                        <p class="card-front__text-view card-front__text-view-2">
                                            View me
                                        </p>
                                    </div>
                                </div>
    
                                <div class="card-back card-back-2">
                                    <div class="video__container-2">
                                        <img src="assets/img/icons/FLAG/explorino-b.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                        <h3>EXPLORINO</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="inside-page-2">
                            <div class="inside-page__container">
                                <h3 class="inside-page__heading inside-page__heading-2">
                                    <!-- For snow lovers -->
                                </h3>
                                <p class="inside-page__text-2">
                                   A blend of electrical and electronic circuit questions which will quench the thirst of all enthusiasts. <!-- Go ahead and amuse yourself. <br> -->Crank up the power and join the Robolution!
 
                                </p>
                                <a id="div-2" class="inside-page__btn inside-page__btn-2" style="color: #66fcf1;">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hide-1"><br><br></div>

            <div class="col-lg-2 col-md-6 col-sm-12"></div>

            <!-- Non Technical -->
            <div class="col-lg-12" id="NonTech" style="padding-bottom: 100px;"><br></div>
            <div class="col-lg-12"><h3 style="height: 70px;color: #66fcf1;text-align: center;font-weight: 500; font-size: 30px; margin-bottom:20px;">Non - Technical Events</h3></div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front card-front-1">
                                <div class="card-front__tp card-front__tp-1">
                                    <img src="assets\img\icons\NON TECH\brainiac-c.png" style="height: 60px; width: 60px;"><br>
                                    <h2 class="card-front__heading">
                                        THE BRAINIACS
                                    </h2>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view-1">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back card-back-1">
                                <div class="video__container-1">
                                    <img src="assets\img\icons\NON TECH\brainiac-c.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                    <h3>THE BRAINIACS</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page-1">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading-1">
                               <!--  For urban lovers -->
                            </h3>
                            <p class="inside-page__text-1">
                               Sprinting the time with the co-participants, the famous personalities, products should be identified spicing up with decoding the encoded message.
                            </p>
                            <a id="div-8" class="inside-page__btn inside-page__btn-1">View details</a>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <div class="hide"><br><br></div>

            <div class="col-lg-4 col-md-6 col-sm-12">
            
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front card-front-2">
                                <div class="card-front__tp card-front__tp-2">
                                    <img src="assets/img/icons/NON TECH/braun over brain-b.png" style="height: 60px; width: 60px;"><br>
                                               <h2 class="card-front__heading">
                                                   BRAUN OVER BRAIN
                                               </h2>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view-2">
                                        View me
                                    </p>
                                </div>
                            </div>

                            <div class="card-back card-back-2">
                                <div class="video__container-2">
                                    <img src="assets/img/icons/NON TECH/braun over brain-b.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                    <h3>BRAUN OVER BRAIN</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page-2">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading-2">
                                <!-- For snow lovers -->
                            </h3>
                            <p class="inside-page__text-2">
                               A brain challenger is an event which will be enthusiasting  the participants brain and to check their aptitude strength and communication skills.
                            </p>
                            <a id="div-9" class="inside-page__btn inside-page__btn-2">View details</a>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            <div class="hide-1"><br><br></div>

            <div class="col-lg-4 col-md-6 col-sm-12">
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front card-front-1">
                                <div class="card-front__tp card-front__tp-1">
                                    <img src="assets\img\icons\NON TECH\puzzle-hunter-c.png" style="height: 60px; width: 60px;"><br>
                                    <h2 class="card-front__heading">
                                        PUZZLE HUNTERS
                                    </h2>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view-1">
                                        View me
                                    </p>
                                </div>
                            </div>
                            <div class="card-back card-back-1">
                                <div class="video__container-1">
                                    <img src="assets\img\icons\NON TECH\puzzle-hunter-c.png" style="height: 60px; width: 60px;margin-top: 2.5rem;"><br>
                                    <h3>PUZZLE HUNTERS</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page-1">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading-1">
                               <!--  For urban lovers -->
                            </h3>
                            <p class="inside-page__text-1">
                               Rush of time whirling the imagination to connect the puzzles to get the passcode for 8 consecutives, and finally the fast hunter is awarded.
                            </p>
                            <a id="div-10" class="inside-page__btn inside-page__btn-1">View details</a>
                        </div>
                    </div>
                </div>
            </section>
            </div>

            <div class="col-lg-12 hide-2"><br><br></div>
            <div class="col-lg-2 col-md-6 col-sm-12 hide-2"></div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                
                <section class="card-section">
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card__container">
                                <div class="card-front card-front-2">
                                    <div class="card-front__tp card-front__tp-2">
                                        <img src="assets\img\icons\NON TECH\questure-b.png" style="height: 60px; width: 60px;"><br>
                                                   <h2 class="card-front__heading">
                                                       QUEST'URE
                                                   </h2>
                                    </div>
    
                                    <div class="card-front__bt">
                                        <p class="card-front__text-view card-front__text-view-2">
                                            View me
                                        </p>
                                    </div>
                                </div>
    
                                <div class="card-back card-back-2">
                                    <div class="video__container-2">
                                        <img src="assets\img\icons\NON TECH\questure-b.png" style="height: 60px; width: 60px;margin-top: 2.5rem;"><br>
                                        <h3>QUEST'URE</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="inside-page-2">
                            <div class="inside-page__container">
                                <h3 class="inside-page__heading inside-page__heading-2">
                                  <!--   For snow lovers -->
                                </h3>
                                <p class="inside-page__text-2">
                                    A Virtual Hunt, leading to Treasure of the Game and a Tug of War speaking about the personalities displayed.
                                </p>
                                <a id="div-11" class="inside-page__btn inside-page__btn-2">View details</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="hide-1"><br><br></div>
            <div class="col-lg-2 col-md-3 col-sm-3 hide-1"></div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <section class="card-section">
                    <div class="card">
                        <div class="flip-card">
                            <div class="flip-card__container">
                                <div class="card-front card-front-1">
                                    <div class="card-front__tp card-front__tp-1">
                                        <img src="assets\img\icons\NON TECH\quizard-c.png" style="height: 60px; width: 60px;"><br>
                                        <h2 class="card-front__heading">
                                            QUIZARD
                                        </h2>
                                    </div>
    
                                    <div class="card-front__bt">
                                        <p class="card-front__text-view card-front__text-view-1">
                                            View me
                                        </p>
                                    </div>
                                </div>
                                <div class="card-back card-back-1">
                                    <div class="video__container-1">
                                        <img src="assets\img\icons\NON TECH\quizard-c.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                        <h3>QUIZARD</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="inside-page-1">
                            <div class="inside-page__container">
                                <h3 class="inside-page__heading inside-page__heading-1">
                                    <!-- For urban lovers -->
                                </h3>
                                <p class="inside-page__text-1">
                                 A purely time based event which tests the active participation and fast thinking ability among the competitors.
                                </p>
                                <a id="div-12" class="inside-page__btn inside-page__btn-1">View details</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="hide"><br><br></div>
            <div class="col-lg-2 col-md-6 col-sm-12"></div>

        </div>
    </div>
</div>

        
        
        
    <?php require_once 'footer.php';?>


    <div id="id-modal-1" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_1">&times;</span>
            <h4>ELECTROENDOWCY</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingten">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p><h5>Level 1: GRID TRICKS</h5>
<i class="fa fa-circle" style="font-size:10px"></i> Participants are asked to be in Google meet for attendance.<br>
<i class="fa fa-circle" style="font-size:10px"></i> 
In this round we will give you a word search puzzle.<br>
<i class="fa fa-circle" style="font-size:10px"></i>
Participants have to read the question and find out the correct word in the word search puzzle.<br>
<i class="fa fa-circle" style="font-size:10px"></i>
The participants are requested to answer it within the allotted time of 25 mins.<br>
<i class="fa fa-circle" style="font-size:10px"></i>
Based on the timing and number of correct answers, points will be awarded.<br>
<i class="fa fa-circle" style="font-size:10px"></i>
The credits earned in the 1st round will be taken for selection for the round 2.<br>

                                <br><br>
                               <h5>Level 2: TECHNO CONSILIO</h5>
Top 10 from level 1 will be selected for second level.<br><br>
 <h5>ROUND 1:</h5> 
<i class="fa fa-circle" style="font-size:10px"></i> There is a great logic behind each  circuit. So find and choose wisely .<br><i class="fa fa-circle" style="font-size:10px"></i> The questions  is all about logic gates and finding correct logic for the circuit or finding odd logic circuit.<br>
<i class="fa fa-circle" style="font-size:10px"></i> 
The credits earned in this round will be counted for selecting the winner.<br>
<i class="fa fa-circle" style="font-size:10px"></i>
This round consists of 10 questions .<br>
<i class="fa fa-circle" style="font-size:10px"></i>
Look out for bonus question
<br><br>
<h5>ROUND 2:</h5> 
<i class="fa fa-circle" style="font-size:10px"></i>
 This round is based on finding out interesting solutions for a given circuit.<br>
 <i class="fa fa-circle" style="font-size:10px"></i> We will give you an output to choose the correct circuit.<br>
 <i class="fa fa-circle" style="font-size:10px"></i> 
The one with correct answers or fascinating approach to the question will be given with points.<br>
<i class="fa fa-circle" style="font-size:10px"></i> 
Participant with highest points in both round 1 and round 2 will be the winner.<br><br>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                                    <h5>LEVEL ONE: </h5>

<i class="fa fa-circle" style="font-size:10px"></i> Participants Will Be Asked To Be In Meeting.<br>
 <i class="fa fa-circle" style="font-size:10px"></i> Throughout The Level One.<br>
<i class="fa fa-circle" style="font-size:10px"></i> We Will Initimate The Start Time And End Time Of Round 1 In Meet Only.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Participants Are Asked To Stick To The Time Limit.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Participants Must Mute Themselves And Must Unmute Only If They Have Any Queries Otherwise Use Chat Box.<br>
<br><br>
<h5>LEVEL TWO: </h5> 
<i class="fa fa-circle" style="font-size:10px"></i> PARTICIPANTS WILL BE ASKED TO BE IN MEETING .<br>
<i class="fa fa-circle" style="font-size:10px"></i> THIS ROUND WILL BE CONDUCTED THROUGH  CANVAS INSTRUCTURE.<br>
<i class="fa fa-circle" style="font-size:10px"></i> TAB SWITCH IS NOT ENTERTAINED.<br>
<i class="fa fa-circle" style="font-size:10px"></i> PARTICIPANTS ARE ASKED TO STICK TO THE TIME LIMIT. NO EXTRA TIME WILL BE GIVEN.<br><br>

                                
                        </div>
                            <h5>ROUND ONE:  </h5>                                        
NUMBER OF QUESTIONS: 10<br>
 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform:  Google Meet<br>
Platform For Conducting Events: Canvas Instructure<br>

<h3 style="color: #66fcf1">DURATION</h3>
15 Minutes<br><br>
<h5>ROUND TWO:</h5>                                          <!-- TIME:  15 MINUTES-->
NUMBER OF QUESTIONS: 10<br>
<h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Kahoot /Class Maker<br>

<h3 style="color: #66fcf1">DURATION</h3>
15 Minutes<br><br>
 <h5>INDIVIDUAL /TEAM</h5>
                                INDIVIDUAL<br>

</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 september 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9194999 60424">ARUL VIRUMBI K - 94999 60424</a></li>
                                    <li><a  style="color: white;" href=" tel:+9184313 48261">BARANI KERTHI S - 84313 48261</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+9173975 27523">GIRISHWAR G - 73975 27523</a></li>
                                    <li><a  style="color:white;" href=" tel:+9163792 85556">VINETH  K S - 63792 85556</a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_1"><b>Register</b></button></center>
    </div>
</div>
<div id="id-modal-2" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_2">&times;</span>
            <h4>EXPLORINO</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>Our event is specifically designed for minds interested in Electrical and Electronic circuitry. We are very sure of the fact that the event will quench the thirst of all enthusiasts. Go ahead and amuse yourself. 
                                    <h5>ROUND 1:</h5> 
<i class="fa fa-circle" style="font-size:10px"></i> This quiz deals with MCQs which is based on basic Electrical, Electronics and Arduino knowledge.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> This round will involve 30 questions (basic to tricky) which would test the participant’s knowledge.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Some questions will be easily answerable and few questions require logical and technical thinking.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> We will give 30 seconds to 1 minute to answer each question based on difficulty level.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Points will be allotted based on the accuracy and speed of answering. The link will be accessible only within the allotted time. <br><br>
<h5>ROUND 2:</h5> 
<h3 style="color: #66fcf1">PART A:</h3> 
Participants will be given a crossword puzzle related to circuits and they are  expected to find the answers for that within speculated time  
In the answers there will be a certain letter (like 1st letter in the answer for the 1st question) which should be noted by the participants and at the end of this round  participants will be asked to combine all these letters and form a code(password) and send it to the convenors.<br><br>


<h3 style="color: #66fcf1">PART B:</h3> 
Participants will be asked to create a bot and run a program in a virtual  environment 
The participants will be shortlisted based on the efficiency of the  program and time taken to complete the task <br><br>
<h5>ROUND 3:</h5> 
Participants will be asked to develop a bot in a virtual space and program it for the given situation
The Winner will be chosen based on the effectiveness and their speed in finding the solution 
</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                                <h5>Round-1:</h5>  
<i class="fa fa-circle" style="font-size:10px"></i> Participants can use pen and paper if required.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Adhere to time limit and avoid malpractice.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Participants should make sure that they have stable network connection.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Please be present 10 minutes prior to the event commencement.<br> <br> 
<h5>Round-2</h5> 
<i class="fa fa-circle" style="font-size:10px"></i> Participants are allowed to use pen and paper.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> The code should be constructed by the constraints which will be provided by the  convenors.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Participants are expected to have a stable network connection.<br>  
<i class="fa fa-circle" style="font-size:10px"></i> Participants will be selected on the basis of the time of submission and  correctness of the code(password).<br>  
<i class="fa fa-circle" style="font-size:10px"></i> Participants will be monitored continuously during the event, Laptop is preferred.<br> <br>
<h5>Round –3</h5> 
<i class="fa fa-circle" style="font-size:10px"></i> Participants can use pen and paper if required.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Adhere to time limit and avoid malpractice.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Participants should make sure that they have a stable network connection.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Please be present 10 minutes prior to the event commencement.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Participants will be monitored continuously during the event, Laptop is preferred.<br><br>


                                </div>
                                <h5>ROUND ONE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform:  Zoom<br>
Platform For Conducting Events: Canvas<br>

<h3 style="color: #66fcf1">DURATION</h3>
1 hour<br><br>
<h5>ROUND TWO:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform:  Google Meet<br>
Platform For Conducting Events: Crossword Puzzle<br>

<h3 style="color: #66fcf1">DURATION</h3>
1.5 hours<br><br>

<h5>ROUND THREE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform:  Google Meet<br>
Platform For Conducting Events: Gearbot<br>

<h3 style="color: #66fcf1">DURATION</h3>
45 Minutes<br><br>
<h5>INDIVIDUAL /TEAM</h5>
TEAM<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 september 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapseten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9199432 01635">Haris raja V - 99432 01635 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9175988 83011">Anjana V R - 75988 83011 </a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+91 88832 38059">Arul Karthi K P - 88832 38059 </a></li>
                                    <li><a  style="color:white;" href=" tel:+9190034 24451">KARTHIK M Y - 90034 24451 </a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_12"><b>Register</b></button></center>
    </div>
</div>
<div id="id-modal-3" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_3">&times;</span>
            <h4>CLASH OF TWINS</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseeleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                     Twin clash is a fun-filled online technical event that brings out your technical skills. Is it only technical content?? Nah! It also would be a great time to try out your luck. There are three rounds and all of them are designed to make learning more fun and interesting. This event is a tantalizing mix of knowledge and application of spontaneous skills as well. The objective of the event is to encourage students to explore their analog and digital electronics knowledge in a fun manner. So save the date and get ready to sweep off the stage and bag your prizes!<br><br>
<h5>ROUND 1: SOLO-BESTOWER</h5>
<i class="fa fa-circle" style="font-size:10px"></i> Contribution and diversity of the team members ascertain a powerful team.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> The twins should attend the round individually. <br>
<i class="fa fa-circle" style="font-size:10px"></i> One twin must choose analog domain and the other, digital.<br>  
<i class="fa fa-circle" style="font-size:10px"></i> They have to attend a quiz based on the domain that they have opted for.<br>  
<i class="fa fa-circle" style="font-size:10px"></i> The quiz consists of 2 sections, with each section containing 15 questions. <br>
<i class="fa fa-circle" style="font-size:10px"></i> Depending on their performance, the consolidated score of both the participants will be analysed to shortlist them to the next round.  <br>
<i class="fa fa-circle" style="font-size:10px"></i> The top 7 twins will be entering the next round. <br><br>
<h5>ROUND 2: LUCKY TACKLE</h5>
<i class="fa fa-circle" style="font-size:10px"></i> Luck happens when opportunity meets preparation.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> This round consists of two phases - Advantage phase and Main phase.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> In the Advantage phase, each team will receive an offer to test their luck, and upon winning they’ll receive the perks accordingly. <br>
<i class="fa fa-circle" style="font-size:10px"></i> In the main phase, the twins have to select a box numbered from 1 to  30. Each number corresponds to a question and the  weightage/points of the questions varies from one another.  <br>
<i class="fa fa-circle" style="font-size:10px"></i> Based on the number selected, the twins have to provide their answer and for every right answer the points associated with the question will be awarded. <br>
<i class="fa fa-circle" style="font-size:10px"></i> Top 4 twins will be shortlisted for the final round.<br><br>
<h5>ROUND 3: MEME TEMPORE</h5>
<i class="fa fa-circle" style="font-size:10px"></i> Initially this round consists of a meme-buzzer session which helps the team get an immune power. <br>
<i class="fa fa-circle" style="font-size:10px"></i> Next is an extempore round where one twin from each team will be competing.  <br>
<i class="fa fa-circle" style="font-size:10px"></i> The selected speaker has to choose a box and explain the component displayed inside it for a duration of 2 mins (after 1 minute of preparation).<br>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                                <i class="fa fa-circle" style="font-size:10px"></i> The participants should not leave the G - meet till the end of the event.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> Good internet connectivity should be ensured. Network issues on any recurring basis will not be encouraged. <br>

<i class="fa fa-circle" style="font-size:10px"></i> Camera and mic should be switched on whenever they are asked to do so.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> Participants if indulging in any sort of malpractice will be disqualified.<br><br> 
<h5>ROUND ONE:</h5> 
 <i class="fa fa-circle" style="font-size:10px"></i> One of the twin must be present per domain (i.e., one for Analog and one for Digital). <br>
 <i class="fa fa-circle" style="font-size:10px"></i> The quiz will be auto-submitted after the scheduled time.<br><br>
<h5>ROUND TWO:</h5> 
<i class="fa fa-circle" style="font-size:10px"></i> Both the twins must be present.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> They must answer only when their turn arrives.<br><br> 
<h5>ROUND THREE:</h5> 
<i class="fa fa-circle" style="font-size:10px"></i> The speech should not exceed 2 minutes. <br>
<i class="fa fa-circle" style="font-size:10px"></i> Judges’ decision will be final and may not be subjected to any further discussions.<br><br>

                                </div>

                                <h5>ROUND ONE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Kahoot<br>

<h3 style="color: #66fcf1">DURATION</h3>
1 hour<br><br>
<h5>ROUND TWO:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>

<h3 style="color: #66fcf1">DURATION</h3>
45 Minutes<br><br>

<h5>ROUND THREE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform:  Google Meet<br>

<h3 style="color: #66fcf1">DURATION</h3>
30 Minutes<br><br>
<h5>INDIVIDUAL /TEAM</h5>
TEAM<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefourteen" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 september 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefifteen" aria-expanded="false" aria-controls="collapsefive">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapsefifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193610 81817">DINESHKANNA BR - 93610 81817 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9196775 98095">DEEPIKA P - 96775 98095</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+9188704 08104">NANDISH CHANRASEKAR - 88704 08104</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">DHIVASHINI A - 73492 94656</a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_3"><b>Register</b></button></center>
    </div>
</div>
<div id="id-modal-4" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_4">&times;</span>
            <h4>INFINIWIZ</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesixteen" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsesixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                    Disappointed that the avengers can’t gather anymore? What if you can summon them in this virtualprison break?
We are expecting individual participants who will be subjected to fun technical games. Oh, you wonder how you can do this? We got you. For every round you win you free your favourite superheroes imprisoned by Thanos to help you with your quest. Terms and conditions apply.
While this event is engineered to be fun, this event will purely test your critical thinking skills basedon science, technology, engineering and mathematics. Get your brains fired up, it’s going to be one hell of a ride.<br><br>
<h5>ROUND 1: Prison Break</h5> Drop your socks and grab your crocs
The event begins with the participants solving a set of 20 questions (MCQs, connections, crosswords etc.) pertaining to the concepts of electronics, a bit of engineering physics, control systems, and applications of engineering in healthcare and IT. Participants who ace this will pass onto the next round. You get to free two of the avengers and get your hands on two infinity stones for every round you get through.
<br><br>
<h5>ROUND 2: Noobmaster</h5>
Fancy a good old scavenger hunt? Well, technically this is a new virtual one. A primary clue will be given to each participant leading them to another clue across the web (for which links will be provided) and another until they find the ultimate answer. This round is based on the technological aspects of electricity, especially the design and application of circuitry and electronic equipment. The top eight participants cracking the hunt will get a free pass to the Finale.<br><br>
<h5>ROUND THREE: Flame on</h5>
Know or Go: The finale is a reverse jeopardy where the final eight participants compete. There will be a display of topics (scientific and mathematical) from where they will be asked a series of rapid- fire questions. A simple test of intelligence and quickness, of which four of them with the highest score continue.
Endgame: The rest will compete in a hot-headed round of JAM (Just A Minute) where you have to talk about given electrical/engineering phenomenon in under one minute, to determine the winner.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseventeen" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseseventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeighteen" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseeighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                               <i class="fa fa-circle" style="font-size:10px"></i> Every event is timed and participants must adhere to said time.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Each question in round 1&2 will carry one mark each and the decisions in round 3 will be carried out by the conveners and volunteers.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Make sure your internet connection is stable at all times.<br> 
<i class="fa fa-circle" style="font-size:10px"></i>Participants are required to switch on their cameras when asked.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Any acts of malpractice during the competition are strictly prohibited.<br>

                                </div>
                                <h5>ROUND ONE:  </h5>                                        
NUMBER OF QUESTIONS: 20<br>
 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Zoom<br>
Platform For Conducting Events: Quizizz<br>

<h3 style="color: #66fcf1">DURATION</h3>
30 Minutes<br><br>
<h5>ROUND TWO:  </h5>                                        
NUMBER OF QUESTIONS: 15<br>
 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Zoom<br>
Platform For Conducting Events: Play Scavenger Hunt<br>

<h3 style="color: #66fcf1">DURATION</h3>
30 Minutes<br><br>

<h5>ROUND THREE:  </h5>                                        
NUMBER OF QUESTIONS: 7<br>
 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform:  Zoom<br>

<h3 style="color: #66fcf1">DURATION</h3>
45 Minutes<br><br>
<h5>INDIVIDUAL /TEAM</h5>
INDIVIDUAL<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenineteen" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsenineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 September 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwenty" aria-expanded="false" aria-controls="collapsefive">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapsetwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193612 42014">R Toshini - 93612 42014</a></li>
                                    <li><a  style="color: white;" href=" tel:+9178680 73456">Sushanthika G - 78680 73456</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+918098655666">Shruthi N - 93612 42014</a></li>
                                    <li><a  style="color:white;" href=" tel:+918754429240">Janani G - 87544 29240 </a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_4"><b>Register</b></button></center>
    </div>
</div>
<div id="id-modal-5" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_5">&times;</span>
            <h4> TECHNOPHILIA</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                    Technophilia is the event to engage oneself in mind-enriching innovative activities. This event is purely based on electrical circuits and concepts in electronics implying the engineering knowledge with bits of finding the solutions for real-time issues. It will be useful to showcase your individuality by examining your technical thinking. Do participate and excite your creative neurons.<br><br>
<h5>ROUND ONE:Mindfizz</h5>
“Knowledge is of no value unless you put it into practice” <br>
This round is to test participant’s basic technical knowledge. The participants have to answer 20 MCQ questions that cover the basics of Transducer engineering. For each question, they have to answer within the time limit. All participants will be asked to join in ‘Kahoot’- an online game-based learning platform for which they will be given Kahoot game pins. Once all the participants are joined the round will get started. For example, if the total participants are 50, the top 10 participants based on their scores will be selected for the second round.<br><br>

<h5>ROUND TWO:TechOwar</h5>
" Creativity involves breaking out of established patterns in order to look at things in a different way."<br>
This round tests participant’s critical thinking and analyzing abilities. The shortlisted participants are asked to join the online platform - ‘G-Meet’. Participants will be given certain real-life problems. Two minutes will be given for their preparation. Analyzing that scenario, they are expected to give an apt solution. Winners will be selected by the judge (faculty) based on their problem-solving skills.




                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                                <i class="fa fa-circle" style="font-size:10px"></i> Referring answers in any other device during the time of the event are strictly prohibited.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Only individual participants will be allowed.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Decisions taken by the event conveners will be final.<br> <br>

<h5>ROUND ONE:</h5>
<i class="fa fa-circle" style="font-size:10px"></i> It is a timed event (20 minutes).<br>
<i class="fa fa-circle" style="font-size:10px"></i> Each question carries one mark.<br> <br>

<h5>ROUND TWO:</h5>
<i class="fa fa-circle" style="font-size:10px"></i> It is a timed event.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Avoid microphone issues while presenting your solution.<br><br>


                                </div>
                                <h5>ROUND ONE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Kahoot<br>

<h3 style="color: #66fcf1">DURATION</h3>
30 Minutes<br><br>
<h5>ROUND TWO:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>

<h3 style="color: #66fcf1">DURATION</h3>
1 Hour<br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>25 September 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9170102 52221">P Abishek - 70102 52221 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9193601 86511">K Supretha - 93601 86511</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+9193446 41868">M Priyanka - 93446 41868 </a></li>
                                    <li><a  style="color:white;" href=" tel:+9194868 44486">T Rubikaa - 94868 44486 </a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_5"><b>Register</b></button></center>
    </div>
</div>


<div id="id-modal-6" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_6">&times;</span>
            <h4> CODER'S CRUSADE</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse26" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse26" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                    "Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are, by definition, not
smart enough to debug it."<br>

Are you enamoured with your programming skills? Come show off your fanaticism
and prove your enthusiasm for programming at Srishti Coder's Crusade, the
greatest and most anticipated event.<br>




                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse27" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse27" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse28" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse28" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                               <h5> Round one: ZIPPED BUGS</h5>
Initially, a GitHub link containing encrypted nested zip files and a form link
will be shared. After the detailed instructions in the MS Teams meeting, the
secret word for the first zip file will be revealed.<br><br>

Each zip file consists of<br>
<i class="fa fa-circle" style="font-size:10px"></i> Code with an error,<br>
<i class="fa fa-circle" style="font-size:10px"></i> The next zip file,<br>
<i class="fa fa-circle" style="font-size:10px"></i> The hint text report about the password of the next zip file.<br><br>

On rectifying the errors in the code, participants will see the yield of the
code will be the secret key for the next zip file and so on. The output of
each code should be filled in the form and Top 6 members will be
shortlisted and considered for the second round.<br><br>

<h5>Round Two: RANK-YOUR-CODE</h5>
The shortlisted participants of round one are supposed to create an account
in Hacker Rank and a contest will be created and shared. The challenge comprises
5 inquiries of various trouble levels and the participants are divided into two
groups and monitored separately. Based on the leaderboard score, winners will be
declared.<br><br>


                                </div>
                                <h5>ROUND ONE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Microsoft Teams<br>
Platform For Conducting Events: Local system or computer & Jot-form/G-form <br>

<h3 style="color: #66fcf1">DURATION</h3>
1 Hour<br><br>
<h5>ROUND TWO:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Microsoft Teams / Google Meet<br>
Platform For Conducting Events: Hacker Rank<br>
<h3 style="color: #66fcf1">DURATION</h3>
1 Hour<br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse29" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse29" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>25 September 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapse30" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9199408 59635">Tharun G - 99408 59635 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9186755 77199">Dinesh B - 86755 77199</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+916383438324">Chandran V V - 63834 38324 </a></li>
                                    <li><a  style="color:white;" href=" tel:+918220036212">Roshith Babu - 82200 36212 </a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_2"><b>Register</b></button></center>
    </div>
</div>

<div id="id-modal-7" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_7">&times;</span>
            <h4>GAME OF TWINS</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse31" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                     Twin clash is a fun-filled online technical event that brings out your technical skills. Is it only technical content?? Nah! It also would be a great time to try out your luck. There are three rounds and all of them are designed to make learning more fun and interesting. This event is a tantalizing mix of knowledge and application of spontaneous skills as well. The objective of the event is to encourage students to explore their analog and digital electronics knowledge in a fun manner. So save the date and get ready to sweep off the stage and bag your prizes!<br><br>
<h5>ROUND 1: SOLO-BESTOWER</h5>
<i class="fa fa-circle" style="font-size:10px"></i> Contribution and diversity of the team members ascertain a powerful team.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> The twins should attend the round individually. <br>
<i class="fa fa-circle" style="font-size:10px"></i> One twin must choose analog domain and the other, digital.<br>  
<i class="fa fa-circle" style="font-size:10px"></i> They have to attend a quiz based on the domain that they have opted for.<br>  
<i class="fa fa-circle" style="font-size:10px"></i> The quiz consists of 2 sections, with each section containing 15 questions. <br>
<i class="fa fa-circle" style="font-size:10px"></i> Depending on their performance, the consolidated score of both the participants will be analysed to shortlist them to the next round.  <br>
<i class="fa fa-circle" style="font-size:10px"></i> The top 7 twins will be entering the next round. <br><br>
<h5>ROUND 2: LUCKY TACKLE</h5>
<i class="fa fa-circle" style="font-size:10px"></i> Luck happens when opportunity meets preparation.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> This round consists of two phases - Advantage phase and Main phase.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> In the Advantage phase, each team will receive an offer to test their luck, and upon winning they’ll receive the perks accordingly. <br>
<i class="fa fa-circle" style="font-size:10px"></i> In the main phase, the twins have to select a box numbered from 1 to  30. Each number corresponds to a question and the  weightage/points of the questions varies from one another.  <br>
<i class="fa fa-circle" style="font-size:10px"></i> Based on the number selected, the twins have to provide their answer and for every right answer the points associated with the question will be awarded. <br>
<i class="fa fa-circle" style="font-size:10px"></i> Top 4 twins will be shortlisted for the final round.<br><br>
<h5>ROUND 3: MEME TEMPORE</h5>
<i class="fa fa-circle" style="font-size:10px"></i> Initially this round consists of a meme-buzzer session which helps the team get an immune power. <br>
<i class="fa fa-circle" style="font-size:10px"></i> Next is an extempore round where one twin from each team will be competing.  <br>
<i class="fa fa-circle" style="font-size:10px"></i> The selected speaker has to choose a box and explain the component displayed inside it for a duration of 2 mins (after 1 minute of preparation).<br>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse32" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse32" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse33" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                                <i class="fa fa-circle" style="font-size:10px"></i> The participants should not leave the G - meet till the end of the event.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> Good internet connectivity should be ensured. Network issues on any recurring basis will not be encouraged. <br>

<i class="fa fa-circle" style="font-size:10px"></i> Camera and mic should be switched on whenever they are asked to do so.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> Participants if indulging in any sort of malpractice will be disqualified.<br><br> 
<h5>ROUND ONE:</h5> 
 <i class="fa fa-circle" style="font-size:10px"></i> One of the twin must be present per domain (i.e., one for Analog and one for Digital). <br>
 <i class="fa fa-circle" style="font-size:10px"></i> The quiz will be auto-submitted after the scheduled time.<br><br>
<h5>ROUND TWO:</h5> 
<i class="fa fa-circle" style="font-size:10px"></i> Both the twins must be present.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> They must answer only when their turn arrives.<br><br> 
<h5>ROUND THREE:</h5> 
<i class="fa fa-circle" style="font-size:10px"></i> The speech should not exceed 2 minutes. <br>
<i class="fa fa-circle" style="font-size:10px"></i> Judges’ decision will be final and may not be subjected to any further discussions.<br><br>

                                </div>

                                <h5>ROUND ONE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Kahoot<br>

<h3 style="color: #66fcf1">DURATION</h3>
1 hour<br><br>
<h5>ROUND TWO:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>

<h3 style="color: #66fcf1">DURATION</h3>
45 Minutes<br><br>

<h5>ROUND THREE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform:  Google Meet<br>

<h3 style="color: #66fcf1">DURATION</h3>
30 Minutes<br><br>
<h5>INDIVIDUAL /TEAM</h5>
TEAM<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse34" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse34" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 september 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse35" aria-expanded="false" aria-controls="collapsefive">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapse35" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193610 81817">DINESHKANNA BR - 93610 81817 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9196775 98095">DEEPIKA P - 96775 98095</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+9188704 08104">NANDISH CHANRASEKAR - 88704 08104</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">DHIVASHINI A - 73492 94656</a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_11"><b>Register</b></button></center>
    </div>
</div>

<div id="id-modal-8" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_8">&times;</span>
            <h4>THE BRAINIACS</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse36" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse36" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                     Bored locked up at home? Want to put your IQ to a great use? You can do just that in our non-technical event TheBrainiacs! But beware, there is competition. You compete against other players to solve clues, break cipher codes and much more. Have some fun at the same time learn & discover your hidden potential, right from home!<br><br>
<h5>ROUND ONE</h5>
<i class="fa fa-circle" style="font-size:10px"></i> For Round 1, a set of pictures will be given and the participants will have to
identify the product/technology/brand making use of the pictures by connecting
it as clues.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> There will be a set of 20 questions. <br>
<i class="fa fa-circle" style="font-size:10px"></i> Each Question will be displayed for 45 seconds.<br>  
<i class="fa fa-circle" style="font-size:10px"></i> All the Teams will be given a chance to answer.<br>  
<i class="fa fa-circle" style="font-size:10px"></i> This round will be a qualifier round and only the teams which qualify will move on to round 2.<br><br>
<h5>ROUND TWO</h5>
<i class="fa fa-circle" style="font-size:10px"></i> Contestants will have to identify famous personalities, companies, products or technologies based on the 3 clues that will be displayed on-screen.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> There will be a set of 20 questions.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Among these questions, we will also be including a few encoded message, decoding tasks to spice up this round even more.<br>
<i class="fa fa-circle" style="font-size:10px"></i> This will be a buzzer type round using the hand raise option on Google Meet.  <br>
<i class="fa fa-circle" style="font-size:10px"></i> Only the first correct answer will be awarded points. <br>
<i class="fa fa-circle" style="font-size:10px"></i> We will display the answer for the respective question after each set of 3 clues or when a participant gives the correct answer (whichever is earlier) so that this round will be more informative and thought provoking.<br><br>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse37" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse37" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse38" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse38" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                                <i class="fa fa-circle" style="font-size:10px"></i> Participants must submit their responses within the stipulated time period.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> Participant can unmute and ask if they have any doubts/queries. <br>

<i class="fa fa-circle" style="font-size:10px"></i> It is suggested that participants sit in a quiet place with appropriate lighting and with minimal disturbances.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> It is suggested that you make suitable arrangements for optimal internet
connectivity.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Be alert and ready for each question.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> The Judge’s decision is final.<br> 
<br><br> 
                                </div>

                                <h5>ROUND ONE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Quizziz<br><br>

<h3 style="color: #66fcf1">DURATION</h3>
30 Mins hour<br><br>
<h5>ROUND TWO:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br><br>

<h3 style="color: #66fcf1">DURATION</h3>
30 Minutes<br><br>
<h5>INDIVIDUAL /TEAM</h5>
<h3>TEAM</h3><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse39" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse39" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 september 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse40" aria-expanded="false" aria-controls="collapsefive">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapse40" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193610 81817">Jai Krishna Chandar K - 88259 50439 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9196775 98095">Sidarth J S - 99655 12032</a></li>
                                </ul><br>
                                <h5>EVENT RESOURCE MANAGER</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+9188704 08104">Prema Sudha R - 91502 83368</a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_6"><b>Register</b></button></center>
    </div>
</div>

<div id="id-modal-9" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_9">&times;</span>
            <h4>BRAUN OVER BRAIN</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse41" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse41" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>A brain challenger is one which activates and stimulates the activity of brain.
The BRAUN OVER BRAIN is such a brain challenger which tests participants
intense knowledge, aptitude strength and communication skills. Participants will
be tested for the above mentioned skills in each and every round. This event will
also enhance the knowledge and skills of all participants with a reasonable
difficulty level.</p><br><br>
<h5>ROUND 1: QUIZZICALLY CHALLENGED</h5>
<p>This round consists of 5 questions in the following segments which include
who am I, logo identifications, and connections. Questions will be shared by
the host in the Google meet. Buzzer link will be posted in the chat-box and
they can enter the buzzer room using the room code which will be
announced during the event. Participants can click the buzzer if they know
the answer. Participants will be awarded +2 marks for correct answers and -
1 mark for wrong answers. If a participant gives a wrong answer, the chance
will be given to another participant who buzzes next. The participant who
answers second will be given +1 mark.</p><br><br>
<h5>ROUND 2: LUCKY TACKLE</h5>
<p>This round consists of 5 questions in the following segments which include
picture comprehension, read and answer, solve the puzzle. Questions will
be shared by the host in the Google meet. Buzzer link will be posted in
the chat-box and they can enter the buzzer room using the room code
which will be announced during the event. Participants can click the buzzer
if they know the answer. Participants will be awarded +2 marks for correct
answers and -1 mark for wrong answers. If a participant gives a wrong
answer, the chance will be given to another participant who buzzes next.
The participant who answers second will be given +1 mark.</p><br>
<i class="fa fa-circle" style="font-size:10px"></i> BONUS: Participants must solve the given puzzle and send (upload in
Google form provided) the picture of each puzzle within 15 minutes.<br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse42" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse42" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse43" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse43" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
<h5>ROUND ONE:</h5> 
 <i class="fa fa-circle" style="font-size:10px"></i> The meeting will be hosted in Google meet for attendance.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> The
Canvas Instructure invitation will be sent to the participants via registered mail id. <br>
<i class="fa fa-circle" style="font-size:10px"></i> This round consists of
different types of questions which include Rebus puzzles, jumbled words, odd one
out and aptitude questions.<br>  
<i class="fa fa-circle" style="font-size:10px"></i> This round has 40 questions with a time limit of 30
minutes. <br><br>
<h5>ROUND TWO:</h5> 
<i class="fa fa-circle" style="font-size:10px"></i>Participants are asked to be in G-meet throughout the level.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> Participants must mute themselves and must unmute only if they have any
queries otherwise use chat box.<br>
<i class="fa fa-circle" style="font-size:10px"></i>Participants have to upload their pictures within the time limit for the
bonus segment.<br> 
                                </div>

                                <h5>ROUND ONE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Google Meet<br><br>

<h3 style="color: #66fcf1">DURATION</h3>
1 Hour<br><br>
<h5>ROUND TWO</h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br><br>
30 Minutes<br><br>


<h5>INDIVIDUAL /TEAM</h5>
TEAM<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse44" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse44" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 september 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse45" aria-expanded="false" aria-controls="collapsefive">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapse45" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193610 81817">SAVEETHA.S - 70109 28803 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9196775 98095">SIVASUBRAMANIYAN.R - 73055 74348</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+9188704 08104">CORSINI JOVITA.K - 7708889934</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">PRASHITHA.R - 8667565609</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">SUDARSHAN.S - 8903291669</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">SHIVANI.R - 7448428989</a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_7"><b>Register</b></button></center>
    </div>
</div>

<div id="id-modal-10" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_10">&times;</span>
            <h4>PUZZLE HUNTERS</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse46" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse46" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
Let’s jump into our IMAGINATION, the spark that ignites the Fire of FUN. Puzzle
hunters is a fun filled non-technical event with puzzles. There are two exciting
rounds in this event in which you want to solve the puzzles. The main intension of
this event is to make students more confident and to encourage you all with a fun
puzzle. It's the right chance to show your own individuality... Cheer up guys...Do
participate...
<h5>ROUND 1: CONNEXTA</h5>
<i class="fa fa-circle" style="font-size:10px"></i> A Quizziz platform link will be given to all the participants through Google
meet.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> In the question, a sequence of picture will be given, the participants are
required to connect those pictures in order to find the correct answer.<br>
<i class="fa fa-circle" style="font-size:10px"></i>Maximum 15 questions will be provided to all the participants<br>
<i class="fa fa-circle" style="font-size:10px"></i>Each question has a time limit, so the participants need to find the answer
within the time limit.<br>
<i class="fa fa-circle" style="font-size:10px"></i>The participants are required to find the WORD related to the given images. <br><br>
<h5>ROUND 2: HORCRUX</h5>
<p>The theme of the event is based on the harry potter story. In that story harry
destroyed the 7 horcruxes one by one to kill the villain Voldemort. Likewise in this
game we will provide a set of PDFs (as a one link) to the participants. There will be
8 PDF, participants have to solve the puzzles in the PDF in order to get the password
of the next consecutive PDF. In this manner participants have to complete the 7
puzzle PDFs. The final (8th) PDF contains only a google form link, in that form
participants have to fill their details. According to the time of G-form response the
winners will be selected.so Let’s destroy the horcruxes one by one without using
any magic but by means of our sagacity.</p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse47" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse47" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse48" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse48" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                                <h5>ROUND 1: RULES</h5>
                                <i class="fa fa-circle" style="font-size:10px"></i>A quizziz platform link will be given to all participants.<br>
                                <i class="fa fa-circle" style="font-size:10px"></i>Each question has a time limit.<br>
                                <i class="fa fa-circle" style="font-size:10px"></i>Participants are required to find the correct answer within the
time limit.<br>
                                <i class="fa fa-circle" style="font-size:10px"></i>Participants can stay in google meet and ask their doubts.<br>
                                <i class="fa fa-circle" style="font-size:10px"></i>Based on the score, the participants will be selected to the next
round.<br><br>

<h5>ROUND 2: RULES</h5>


<i class="fa fa-circle" style="font-size:10px"></i> There will be 8 pdfs. In each pdf, it can have different kind of
puzzles/general questions. <br>

<i class="fa fa-circle" style="font-size:10px"></i> For 1st pdf you will have to identify the correct answer(password). That
password may be a word related to the harry potter story.<br> 

<i class="fa fa-circle" style="font-size:10px"></i> The correct answer will be the key for 2nd pdf to open.<br>
<i class="fa fa-circle" style="font-size:10px"></i> Likewise, you have to identify correct answer and unlock the consecutive
pdfs.<br>
<i class="fa fa-circle" style="font-size:10px"></i> The final PDF contain one G-Form link, you have to fill the form and submit
it as soon as possible.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Only Based on the G-Form response time, the winners will be selected.<br> 
                                </div>

                                <h5>ROUND ONE: </h5>                                        
 <h3 style="color: #66fcf1;">PLATFORM USED:</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Quizziz<br><br>

<h3 style="color: #66fcf1">DURATION</h3>
1 Hour<br><br>
<h5>ROUND TWO:  </h5>                                        
 <h3 style="color: #66fcf1;">PLATFORM USED: </h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Quizziz<br><br>

<h3 style="color: #66fcf1">DURATION</h3>
1 Hour<br><br>
<h5>INDIVIDUAL /TEAM</h5>
TEAM<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse49" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse49" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 september 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse50" aria-expanded="false" aria-controls="collapsefive">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapse50" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193610 81817">S. JEEVIKA SRI - 95977 63989 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9196775 98095">K.M. SUBASHINI - 83004 06268</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+9188704 08104">RUBASRI - 86106 60170</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">SANDHIYA.K - 63855 69896</a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_8"><b>Register</b></button></center>
    </div>
</div>

<div id="id-modal-11" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_11">&times;</span>
            <h4>QUEST'URE</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse51" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse51" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
Travel enthusiasts, pack your bags to unveil the treasure by exploring different
continents and finding a series of clues in Round 1. Upon discovering the treasure,
Round 2 tests your soft skill with a fascinating set of rules.</p><br>
<h5>ROUND 1: TREASURE HUNT</h5>
<p>
This is a virtual treasure hunt where each team has to search for the hidden clue in
different platforms and to travel from one platform to another by solving a puzzle
in each platform. In the end, all the hidden clues found from each platform will
direct to the treasure of the game. The first 10 teams who reach the treasure will
move on to the second round.</p><br><br>

<h5>ROUND 2: TUG OF WAR </h5>
<p>
This round tests the participant’s soft skills. Here, the different types of questions
(connexions, find the personality) will be displayed to the teams that will give the
topic for the round when cracked. The teams will speak in the order in which they
buzz. The team which presses the buzzer first will be allowed to speak first for
about 45 seconds and based on the order of the buzzer, the next team which
pressed the buzzer will continue from where the first team stopped. This continues
further till the last team speaks up. Participants will be awarded marks based on
their fluency, delivery of speech and content. Winners will be chosen from the
cumulative score of questions (connexions, find the personality) and speech.<br><br>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse52" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse52" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse48" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse48" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                                <h5>ROUND 1: RULES</h5>
                                <i class="fa fa-circle" style="font-size:10px"></i>Team capacity must not exceed 2.<br>
                                <i class="fa fa-circle" style="font-size:10px"></i>The decision of the selection panel is the final.<br><br>

<h5>ROUND 2: RULES</h5>


<i class="fa fa-circle" style="font-size:10px"></i> Team capacity must not exceed 2. <br>

<i class="fa fa-circle" style="font-size:10px"></i> The camera must be kept on throughout the event.<br> 
                                </div>
                                <h5>ROUND ONE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Gmail,
Google drive, Google forms, Socrative student<br><br>

<h3 style="color: #66fcf1">DURATION</h3>
1 Hour<br><br>
<h5>ROUND TWO:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED: </h3>
Meeting Platform: Google Meet<br>
Platform for Conducting Events: Google meet<br><br>

<h3 style="color: #66fcf1">DURATION:</h3>
1 Hour<br><br>

<h5>INDIVIDUAL /TEAM</h5>
TEAM<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse54" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse54" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 september 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse55" aria-expanded="false" aria-controls="collapsefive">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapse55" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193610 81817">UMDA.M - 94886 19786 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9196775 98095">SANJITH.S - 98433 18010</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+9188704 08104">AKAASH.K.L - 96292 67854</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">PAVITHRA.M - 93604 31799</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">J.SAJITHA - 93605 85347</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">VIDHYA.V - 88258 90912</a></li>

                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_9"><b>Register</b></button></center>
    </div>
</div>

<div id="id-modal-12" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_12">&times;</span>
            <h4>QUIZARD</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse56" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse56" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
We know Time and Tide wait for none!
Here, the timer does not wait for our brain masters. The clock is ticking, so hasten up yourself to face this quizard.
We, the department of BME are here with a dual mania where time and luck challenge you! All you have to do is answer the questions. Sounds simple, but we do have our checkmate here, and you know who!
So Quizards, where are you at? Get enthralled in our fun-filled challenging events and cherish your memories.
Enroll yourself and be sharp-witted to win the mind grill!</p>
<h5>ROUND 1: QUICKER SQUASH</h5><br>
<p> Round 1 is a timer-based play. So, be quick to top the rank. In this round, participants will be asked to answer a set of 20-25 questions within 30 minutes. Participants for the last round will be selected based on accuracy and elapsed time.</p>

<h5>ROUND 2: BET THE POT</h5>
<p> On your mark, Get, Set, Go! The finale is all about speed and time. A set of 10-12 topics are chosen (based upon the participant count) from which the finalists are given a chance to choose a topic from the list by answering just one question. (This round utilizes the “Raise hand” feature present in the meet, crucial for fair judgment) The game spices up now. Before beginning the round, the participants are given 1000(varies based on the participant count) points or what we call, a stake. Before getting ready to answer the question, the participant is supposed to bet for a certain amount of points. If he gets the question right within the stipulated time, the stake is retained, but if he fails to answer the question, the stake points are reduced. At the end of the game, bonus questions can be asked based upon the scoreboard and final decision. </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse57" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse57" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
                a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
                of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
                all the events and may not be subject to any discussions.
                <br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse48" aria-expanded="false" aria-controls="collapseThree">
                                EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse48" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p><div class="bullet">
                                <h5>ROUND 1: RULES</h5>
                                <i class="fa fa-circle" style="font-size:10px"></i>Participants must enroll individually.<br>
                                <i class="fa fa-circle" style="font-size:10px"></i>Participants must stay in the meet throughout the event.<br>
                           <i class="fa fa-circle" style="font-size:10px"></i>Based on the time and accuracy, participants are shortlisted for the finale.
<br><br>

<h5>ROUND 2: RULES</h5>


<i class="fa fa-circle" style="font-size:10px"></i> The participants of the final round are requested to use the latest version of Google Meet for better experience. <br>

<i class="fa fa-circle" style="font-size:10px"></i> Participants must switch on their video when asked.<br> 
<i class="fa fa-circle" style="font-size:10px"></i> Winners are announced based upon the scores and time taken by the participants.<br><br>

                                </div>

                                <h5>ROUND ONE:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED:</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Quizziz<br><br>

<h3 style="color: #66fcf1">DURATION</h3>
30 Minutes<br><br>
<h5>ROUND TWO:  </h5>                                        

 <h3 style="color: #66fcf1;">PLATFORM USED</h3>
Meeting Platform: Google Meet<br>
Platform For Conducting Events: Google Meet, Power-Point-Presentation<br><br>

<h3 style="color: #66fcf1">DURATION</h3>
45 Minutes<br><br>
<h5>INDIVIDUAL /TEAM</h5>
TEAM<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse59" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse59" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>26 september 2021</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 1.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse60" aria-expanded="false" aria-controls="collapsefive">
                                CONVENER AND VOLUNTEER NAMES
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapse60" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENER NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193610 81817">SWARUPAA VG - 93603 64964 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9196775 98095">VASUNTHRA V - 80562 66223</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+9188704 08104">Dhanya Sri R - 8610175599</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">Mrithika M - 93613 90023</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">Sneha D - 75581 87509</a></li>
                                    <li><a  style="color:white;" href=" tel:+9173492 94656">Sushmitha M - 93609 68773</a></li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_10"><b>Register</b></button></center>
    </div>
</div>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- jQuery 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->

<script type = "text/javascript">
        var marker = document.querySelector('#sliding-bar');
        var item = document.querySelectorAll('nav a');

        function indicator(e){
            marker.style.left = e.offsetLeft+"px";
            marker.style.width = e.offsetWidth+"px";
        }

        item.forEach(link => {
            link.addEventListener('click', (e)=>{
                indicator(e.target);
            })
        })
    </script>
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