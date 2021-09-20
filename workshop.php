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

  <title>WORKSHOPS / PAPER Presentation</title>
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

  
  <link href="assets/css/style3.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


  <script type="text/javascript" >

  $(document).ready(function () {
      $("#btn_1").click(function(){
          ppname = "SI-NNOVATION";
          registerPaperpres(ppname);
      });
      $("#btn_2").click(function(){
          ppname = "ROBO-TECHNOVATION";
          registerPaperpres(ppname);
      });
      $("#btn_3").click(function(){
          ppname = "MEDTECH";
          registerPaperpres(ppname);
      });
      $("#btn_4").click(function(){
          ppname = "ECO-LUOMUS";
          registerPaperpres(ppname);
      });
      $("#btn_5").click(function(){
          ppname = "X-PECTRUM";
          registerPaperpres(ppname);
      });
      $("#btn_6").click(function(){
        wsname = "DATA ANALYTICS";
        registerWorkshop(wsname);
      });
      $("#btn_7").click(function(){
        wsname = "VIRTUAL REALITY";
        registerWorkshop(wsname);
      });
      $("#btn_8").click(function(){
        wsname = "ROBOT OPERATING SYSTEM";
        registerWorkshop(wsname);
      });
      
    });
    
    
    function register_alert(ppname){
      alert(`You have Registered for ${ppname}`);
  }

  function registerPaperpres(ppname)
    {
      $.ajax({
                    type: "POST",
                    url: "ppregistered.php",
                    data: "ppname=" + ppname ,
                    success: function (html) {
                        if (html == 'true') {

                        register_alert(ppname);
                        
                        }  else if (html == 'rem') {
                           
                        alert("Already Registered");

                        } else {
                            
                            alert("Login before registering to a Event")
                            window.location.href = "login.php";
                            
                        }
  }

  });
  }

  function registerWorkshop(wsname)
  {
    $.ajax({
                  type: "POST",
                  url: "wregistered.php",
                  data: "wsname=" + wsname ,
                  success: function (html) {
                      if (html == 'true') {

                      register_alert(wsname);
                      
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

<!--script type="text/javascript" >

$(document).ready(function () {
    
    
  });
  
  
  function register_alert(wsname){
    alert(`You have Registered for ${wsname}`);
}



</script -->
  
</head>

<body>
  
  <i class="bi bi-list mobile-nav-toggle d-xl-none" style="color: #66fcf1"></i>

  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>

        <?php require_once 'user.php'; ?>
        
        <li><a href="HOME" class="nav-link scrollto"><i class="fas fa-home"></i> <span>Home</span></a></li>
        <li><a href="EVENTS" class="nav-link scrollto"><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
        <li><a href="#" class="nav-link scrollto active"><i class="fas fa-chalkboard-teacher"></i> <span>&nbsp &nbsp &nbsp Workshop /<br>Paper Presentation</span></a></li>
        <li><a href="ABOUT" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
        <li><a href="TEAM" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
        <li><a href="SCHEDULE" class="nav-link scrollto"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
        <li><a href="FAQ-CONTACT" class="nav-link scrollto"><i class="fas fa-question"></i> <span>FAQ / Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header>

  <?php require_once 'header.php';?>

  <div   class="d-flex align-items-center header2 " style="display: None !important;">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>WORKSHOPS</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
  </div>
  <div id="header2" class="category-bar">
    <nav>
        <div id="sliding-bar"></div>
        <a href="#paperpres" class="head-refn">PAPER PRESENTATION</a>
        <a href="#workshop" class="head-refn" style="margin-right: 100px">WORKSHOP</a>
    </nav>
  </div>

  

<div class="container-fluid">

  <div class="card-area container">
    
    <div class="row">
        <!-- Technical -->
        <div class="col-lg-12" id="paperpres" style="padding-bottom: 50px;"><br></div>
        <div class="col-lg-12"><h3 style="height: 70px;color: #66fcf1;text-align: center;font-weight: 500; font-size: 30px; margin-bottom:20px;">PAPER PRESENTATION</h3></div>
        <div class="col-lg-4  col-md-6 col-sm-12">
        <div class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front card-front-1">
                            <div class="card-front__tp card-front__tp-1">
                                <img src="assets/img/icons/PAPER/si-c.png" style="height: 60px; width: 60px;">
                                <h2 class="card-front__heading">
                                    <br>
                                    Si-nnovation
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
                                <img src="assets/img/icons/PAPER/si-c.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                <h3 style="font-size:15px;">Si-nnovation</h3>
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
                          SI-NNOVATION, specially for embedded engineers to squeeze out their ideas in the field of electronic chips and integration.
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
                                    <img src="assets/img/icons/PAPER/robo-b.png" style="height: 60px; width: 60px;">
                                               <h2 class="card-front__heading"><br>
                                                   Robo-Technovation
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
                                    <img src="assets/img/icons/PAPER/robo-b.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                    <h3>Robo-Technovation</h3>
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
                              ROBOT-TECHNOVATION, a robotics and automation based presentation where youngsters come up with Promethean proposals.

                            </p>
                            <a id="div-2" class="inside-page__btn inside-page__btn-2">View details</a>
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
                                <img src="assets/img/icons/PAPER/medtech-c.png" style="height: 60px; width: 60px;">
                                <h2 class="card-front__heading"><br>
                                    MEDTECH
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
                                <img src="assets/img/icons/PAPER/medtech-c.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                <h3>MEDTECH</h3>
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
                         MEDTECH makes the trailblazers to come up with ingenious solutions for currently existing healthcare problems.

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
                                    <img src="assets/img/icons/PAPER/eco-b.png" style="height: 60px; width: 60px;">
                                               <h2 class="card-front__heading"><br>
                                                  Eco- luomus
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
                                    <img src="assets/img/icons/PAPER/eco-b.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                    <h3>Eco- luomus</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page-2">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading-2">
                            </h3>
                            <p class="inside-page__text-2">
                               Disappointed that the avengers can’t gather anymore? What if you can summon them in this virtual prison break?


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
                                    <img src="assets/img/icons/PAPER/x-pectrum-c.png" style="height: 60px; width: 60px;">
                                    <h2 class="card-front__heading"><br>
                                    X-PECTRUM
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
                                    <img src="assets/img/icons/PAPER/x-pectrum-c.png" style="height: 60px; width: 60px;margin-top: 2.5rem;">
                                    <h3 style="font-size:20px;">X-PECTRUM</h3>
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
                                Invisible communication is termed X-PECTRUM which ignites the young minds to create a unique communication technology.
                            </p>
                            <a id="div-5" class="inside-page__btn inside-page__btn-1">View details</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="hide"><br><br></div>
        <div class="col-lg-2 col-md-6 col-sm-12"></div>

        <!-- Non Technical -->
        <div class="col-lg-12" id="workshop" style="padding-bottom: 80px;"><br></div>
        <div class="col-lg-12"><h3 style="height: 70px;color: #66fcf1;text-align: center;font-weight: 500; font-size: 30px; margin-bottom:20px;">WORKSHOP</h3></div>
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
                        <a id="div-6" class="inside-page__btn inside-page__btn-1">View details</a>
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
                        <a id="div-7" class="inside-page__btn inside-page__btn-2">View details</a>
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
                        <a id="div-8" class="inside-page__btn inside-page__btn-1">View details</a>
                    </div>
                </div>
            </div>
        </section>
        </div>
        

    </div>
</div>
</div>

<?php require_once 'footer.php';?>


<!-- Modal windows -->
<div id="id-modal-1" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_1">&times;</span>
            <h4>Si-nnovation</h4>
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
                                <p><h5>Si-nnovation</h5>
<i class="fa fa" style="font-size:10px"></i>Si-nnovation is a Paper Presentation event which provides a platform for the
embedded engineers to present their ideas in the field of Future in Electronic
Chips and Integration. The topics may range from VLSI, 3D-Integrated Circuits,
Low-Power VLSI, Embedded Systems, Nano-Electronic Systems, Quantum
computing, and other similar topics in the domain. The topics need not be
pertained to the ones mentioned above.<br>


                                <br><br>
                               

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
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login only using the mail id given at the time of registration and use the same for responses during the event. Students of PSG are required to use their official mail IDs.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Camera and mic should be kept on at all times/ as per the requirements of the event. 
<br> 8. Participants are required to sit in a well lit surrounding without any noise disturbances and participants using mobile phones should place the phone in a proper visible area. Failing to do so will be considered malpractice and result in the disqualification of the participant. <br> 9.Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br>                 
   10. The judges’ decision is final for all the events and will not be subjected to further discussions. Indulging in any malpractices will lead to immediate disqualification.<br>
               
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
                                   1.Each team can have a maximum of three members<br>
                                 2.All the participants are supposed to participate with their Srishti ID. Spot
entries will not be allowed.<br>
                 3.  Participants are supposed to send their abstracts in pdf format on or
before *** to the mail id ***.<br>
                 4.The abstract should be in IEEE format and should not exceed a page.<br> 
                 5.The abstracts will be scrutinized and the selected teams will be informed
via mail.<br>
                 6. No abstracts sent after the deadline will be considered.
                <br> 
                7.The participants will be given 10 minutes for presenting their ideas in
Google Meet followed by 5 minutes of question-and-answer session.<br> 
                8. Internet resources are allowed. However, direct plagiarism of ideas is
strictly prohibited.<br>
                9. Submission of projects will be an added credit.<br>            
                        10. The judges’ decision is final and no correspondence will be entered into.<br>
                        
                <br><br>
</div>
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
                                CONVENER DETAILS
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENERS' NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9194999 60424">MEGALINGAM R - 94879 77443</a></li>
                                    <li><a  style="color: white;" href=" tel:+9184313 48261">ADHITHYA S - 95975 99290</a></li>
                                </ul><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_1"><b>Register</b></button></center>
    </div>
</div>

<div id="id-modal-2" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_2">&times;</span>
            <h4>Robo-Technovation</h4>
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
                                 <p><h5>Robo-Technovation</h5>
<i class="fa fa" style="font-size:10px"></i>Robo-Technovation is a Paper Presentation event which provides a platform
for Young minds to unleash the ideas in the field of Robotics and Automation.
Presentation can be done in any areas related to Robotics and automation.
The success of your presentation will be judged not only by knowledge you
send but what the listener receives.<br>


                                <br><br>
                               

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
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login only using the mail id given at the time of registration and use the same for responses during the event. Students of PSG are required to use their official mail IDs.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Camera and mic should be kept on at all times/ as per the requirements of the event. 
<br> 8. Participants are required to sit in a well lit surrounding without any noise disturbances and participants using mobile phones should place the phone in a proper visible area. Failing to do so will be considered malpractice and result in the disqualification of the participant. <br> 9.Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br>                 
   10. The judges’ decision is final for all the events and will not be subjected to further discussions. Indulging in any malpractices will lead to immediate disqualification.<br> 
               
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
                                   1.Each team can have a maximum of three members<br>
                                 2.All the participants are supposed to participate with their Srishti ID. Spot
entries will not be allowed.<br>
                 3.  Participants are supposed to send their abstracts in pdf format on or
before *** to the mail id ***.<br>
                 4.The abstract should be in IEEE format and should not exceed a page.<br> 
                 5.The abstracts will be scrutinized and the selected teams will be informed
via mail.<br>
                 6. No abstracts sent after the deadline will be considered.
                <br> 
                7.The participants will be given 10 minutes for presenting their ideas in
Google Meet followed by 5 minutes of question-and-answer session.<br> 
                8. Internet resources are allowed. However, direct plagiarism of ideas is
strictly prohibited.<br>
                9. Submission of projects will be an added credit.<br>            
                        10. The judges’ decision is final and no correspondence will be entered into.<br>
                        
                <br><br>
</div>
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
                                CONVENER DETAILS
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapseten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENERS' NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9199432 01635">ASWADH KHUMAR G S - 94871 55687</a></li>
                                    <li><a  style="color: white;" href=" tel:+9175988 83011">NARESH KUMAR K K R - 97514 51368 </a></li>
                                </ul><br>
                                
                               </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_2"><b>Register</b></button></center>
    </div>
</div>
<div id="id-modal-3" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_3">&times;</span>
            <h4>MEDTECH</h4>
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
                                <p><h5>MEDTECH</h5>
<i class="fa fa" style="font-size:10px"></i>MEDTECH -can be defined as the application of science and technology to develop solutions to
medical problems. The COVID-19 pandemic has amplified the need to accelerate healthcare
technology solutions. In this event, we ask you to present your ideas that provide a solution to the
existing problems. Here your options are endless! Be it AI in healthcare or a device that measures
various parameters.<br>


                                <br><br>
                               

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
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login only using the mail id given at the time of registration and use the same for responses during the event. Students of PSG are required to use their official mail IDs.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Camera and mic should be kept on at all times/ as per the requirements of the event. 
<br> 8. Participants are required to sit in a well lit surrounding without any noise disturbances and participants using mobile phones should place the phone in a proper visible area. Failing to do so will be considered malpractice and result in the disqualification of the participant. <br> 9.Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br>                 
   10. The judges’ decision is final for all the events and will not be subjected to further discussions. Indulging in any malpractices will lead to immediate disqualification.<br> 
               
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
                                   1.Each team can have a maximum of three members<br>
                                 2.All the participants are supposed to participate with their Srishti ID. Spot
entries will not be allowed.<br>
                 3.  Participants are supposed to send their abstracts in pdf format on or
before *** to the mail id ***.<br>
                 4.The abstract should be in IEEE format and should not exceed a page.<br> 
                 5.The abstracts will be scrutinized and the selected teams will be informed
via mail.<br>
                 6. No abstracts sent after the deadline will be considered.
                <br> 
                7.The participants will be given 10 minutes for presenting their ideas in
Google Meet followed by 5 minutes of question-and-answer session.<br> 
                8. Internet resources are allowed. However, direct plagiarism of ideas is
strictly prohibited.<br>
                9. Submission of projects will be an added credit.<br>            
                        10. The judges’ decision is final and no correspondence will be entered into.<br>
                        
                <br><br>
</div>
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
                                CONVENER DETAILS
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapsefifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5>CONVENERS' NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193610 81817">Annie Iniya J - 89037 72674 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9196775 98095">Celshiya Udaiyar - 73588 69299</a></li>
                                      <li><a  style="color: white;" href=" tel:+9196775 98095">Brindha. M -63792 60837</a></li>
                                </ul><br>
                               </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     <br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_3"><b>Register</b></button></center>
    </div>
</div>
<div id="id-modal-4" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_4">&times;</span>
            <h4>Eco-lumous</h4>
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
                               <p><h5>Eco-lumous</h5>
<i class="fa fa" style="font-size:10px"></i>Eco-luomus is a paper presentation event which bestows a platform for all
the trailblazers to pop up with fruitful ideas. Your innovative ideas will add yet
another block in contriving better environment. We need you to find a clever
solution for environmental problems around us such as pollution and their
effect on health, hydric stress and water scarcity, waste management,
climate change mitigation and adaptation and uncountable number of
things that pose a problem to our environment. Think out of the box, lay the
groundwork and shoot some insightful abstractions upon us!!!.<br>


                                <br><br>
                               

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
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login only using the mail id given at the time of registration and use the same for responses during the event. Students of PSG are required to use their official mail IDs.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Camera and mic should be kept on at all times/ as per the requirements of the event. 
<br> 8. Participants are required to sit in a well lit surrounding without any noise disturbances and participants using mobile phones should place the phone in a proper visible area. Failing to do so will be considered malpractice and result in the disqualification of the participant. <br> 9.Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br>                 
   10. The judges’ decision is final for all the events and will not be subjected to further discussions. Indulging in any malpractices will lead to immediate disqualification.<br> 
               
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
                                   1.Each team can have a maximum of three members<br>
                                 2.All the participants are supposed to participate with their Srishti ID. Spot
entries will not be allowed.<br>
                 3.  Participants are supposed to send their abstracts in pdf format on or
before *** to the mail id ***.<br>
                 4.The abstract should be in IEEE format and should not exceed a page.<br> 
                 5.The abstracts will be scrutinized and the selected teams will be informed
via mail.<br>
                 6. No abstracts sent after the deadline will be considered.
                <br> 
                7.The participants will be given 10 minutes for presenting their ideas in
Google Meet followed by 5 minutes of question-and-answer session.<br> 
                8. Internet resources are allowed. However, direct plagiarism of ideas is
strictly prohibited.<br>
                9. Submission of projects will be an added credit.<br>            
                        10. The judges’ decision is final and no correspondence will be entered into.<br>
                        
                <br><br>
</div>
</p>
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
                                CONVENER DETAILS
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapsetwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENERS' NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9193612 42014">PRIYADHARSHINI.V - 90801 89413</a></li>
                                    <li><a  style="color: white;" href=" tel:+9178680 73456">AJAY SHEKAR.D- 73587 33985</a></li>
                                </ul><br>
                               </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <br>
        <!--<button class="coming_soon">Coming soon</button>-->
        <center><button  type="button" class="submitBtn" id="btn_4"><b>Register</b></button></center>
    </div>
</div>
<div id="id-modal-5" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_5">&times;</span>
            <h4>X-PECTRUM</h4>
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
                              <p><h5>X-PECTRUM</h5>
<i class="fa fa" style="font-size:10px"></i>‘X-pectrum’ is a paper presentation event that provides you an opportunity to ignite the
curiosity of analyzing the evolution from letter to Twitter and squeezing the minds to
advance better. Ranging from mm to millions of miles, the communication takes place
that cannot be seen or heard, but occurs in a way we can innovate. Pour your thoughts
and together let's create a technology which gets better day by day.<br>


                                <br><br>
                               

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
                available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login only using the mail id given at the time of registration and use the same for responses during the event. Students of PSG are required to use their official mail IDs.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
                start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
                <br> 7. Camera and mic should be kept on at all times/ as per the requirements of the event. 
<br> 8. Participants are required to sit in a well lit surrounding without any noise disturbances and participants using mobile phones should place the phone in a proper visible area. Failing to do so will be considered malpractice and result in the disqualification of the participant. <br> 9.Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br>                 
   10. The judges’ decision is final for all the events and will not be subjected to further discussions. Indulging in any malpractices will lead to immediate disqualification.<br> 
               
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
                                   1.Each team can have a maximum of three members<br>
                                 2.All the participants are supposed to participate with their Srishti ID. Spot
entries will not be allowed.<br>
                 3.  Participants are supposed to send their abstracts in pdf format on or
before *** to the mail id ***.<br>
                 4.The abstract should be in IEEE format and should not exceed a page.<br> 
                 5.The abstracts will be scrutinized and the selected teams will be informed
via mail.<br>
                 6. No abstracts sent after the deadline will be considered.
                <br> 
                7.The participants will be given 10 minutes for presenting their ideas in
Google Meet followed by 5 minutes of question-and-answer session.<br> 
                8. Internet resources are allowed. However, direct plagiarism of ideas is
strictly prohibited.<br>
                9. Submission of projects will be an added credit.<br>            
                        10. The judges’ decision is final and no correspondence will be entered into.<br>
                        
                <br><br>
</div>
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
                                  CONVENER DETAILS
                                <span> </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <p><h5> CONVENERS' NAME</h5>
                                <ul>
                                    <li><a  style="color: white;" href=" tel:+9170102 52221">SANGAVI M - 96592 56689 </a></li>
                                    <li><a  style="color: white;" href=" tel:+9193601 86511">THEVIGA VARSINI K - 93853 19725</a></li>
                                </ul><br>
                              
                                </p>
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
        <center><button  type="button" class="submitBtn" id="btn_6"><b>Register</b></button></center>
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
        <center><button  type="button" class="submitBtn" id="btn_7"><b>Register</b></button></center>
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
        <center><button  type="button" class="submitBtn" id="btn_8"><b>Register</b></button></center>
    </div>
</div>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
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
  <script src="assets/js/workshop.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>