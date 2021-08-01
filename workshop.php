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

  <title>SRiSHTi 2K21 - WORKSHOPS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/workshop.css" rel="stylesheet">
  <link href="assets/css/cards.css" rel="stylesheet">
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
          wsname = "KAUN BANEGA CODEPATHI";
          registerEvent(wsname);
      });
      $("#btn_2").click(function(){
          wsname = "1337CTF";
          registerEvent(wsname);
      });
      $("#btn_3").click(function(){
          wsname = "CODEFEAST";
          registerEvent(wsname);
      });
      $("#btn_4").click(function(){
          wsname = "TECHVISTARA";
          registerEvent(wsname);
      });
      $("#btn_5").click(function(){
          wsname = "SPACE SNAP";
          registerEvent(wsname);
      });
      
    });
    
    
    function register_alert(wsname){
      alert(`You have Registered for ${wsname}`);
  }

  function registerEvent(wsname)
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
        <li><a href="FAQ" class="nav-link scrollto"><i class="fas fa-question"></i> <span>FAQ</span></a></li>
        <li><a href="CONTACT" class="nav-link scrollto"><i class="fas fa-paper-plane"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header>

  <?php require_once 'header.php';?>

  <div  id="header2" class="d-flex align-items-center header2 ">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>WORKSHOPS</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
  </div>

  


<div class="container-fluid carousal">
<div id="cards" class="carousel-wrapper col-lg-12 col-sm-12">
  <div class="carousel" data-flickity>
    <div class="carousel-cell" id="div-11">
      <div class="card card1">
        <h3>Workshop 1</h3>
        <p class="small">What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it?.</p>
        <div class="go-corner">
            <img class="event-logo" src="assets/img/events/18.png" alt="">
        </div>
      </div>
      
      <div class="line"></div>
      <div class="time-and-btn">
        <div class="dates">Day 1</div>
        <div class="times">10:00 AM</div>
        <button class="viewbtn" id="div-1">View More</button>
      </div>
    </div>
    <div class="carousel-cell" id="div-12">
        <div class="card card1">
            <h3>Workshop 2</h3>
            <p class="small">What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it?.</p>
            <div class="go-corner">
                <img class="event-logo" src="assets/img/events/18.png" alt="">
            </div>
          </div>
          
          <div class="line"></div>
          <div class="time-and-btn">
            <div class="dates">Day 1</div>
            <div class="times">2:00 PM</div>
            <button class="viewbtn" id="div-2">View More</button>
          </div>
    </div>
    <div class="carousel-cell" id="div-13">
        <div class="card card1">
            <h3>Workshop 3</h3>
            <p class="small">What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it?.</p>
            <div class="go-corner">
                <img class="event-logo" src="assets/img/events/18.png" alt="">
            </div>
          </div>
          
          <div class="line"></div>
          <div class="time-and-btn">
            <div class="dates">Day 1</div>
            <div class="times">4:00 PM</div>
            <button class="viewbtn" id="div-3">View More</button>
          </div>
    </div>
    <div class="carousel-cell" id="div-14">
        <div class="card card1">
            <h3>Workshop 4</h3>
            <p class="small">What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it?.</p>
            <div class="go-corner">
                <img class="event-logo" src="assets/img/events/18.png" alt="">
            </div>
          </div>
          
          <div class="line"></div>
          <div class="time-and-btn">
            <div class="dates">Day 2</div>
            <div class="times">10:00 AM</div>
            <button class="viewbtn" id="div-4">View More</button>
          </div>
    </div>
    <div class="carousel-cell" id="div-15">
        <div class="card card1">
            <h3>Workshop 5</h3>
            <p class="small">What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it?.</p>
            <div class="go-corner">
                <img class="event-logo" src="assets/img/events/18.png" alt="">
            </div>
          </div>
          
          <div class="line"></div>
          <div class="time-and-btn">
            <div class="dates">Day 2</div>
            <div class="times">12:00 AM</div>
            <button class="viewbtn" id="div-5">View More</button>
          </div>
    </div>
  </div>
</div>
</div> 

<?php require_once 'footer.php';?>


<div id="id-modal-1" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_1">&times;</span>
            <h4>SPACE SNAP</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it? Feel it? Seeing is not believing... Do you believe? We all time travel by travelling backwards. You wonder how? Through photos, we are able to see
                                our past life by travelling backwards in time. Light plays the important role here. It is the mystery which made Einstein to think crazy that bring back the relativity again. Do you want to time travel? Let us travel in time around
                                the space. A wonderful opportunity for photography lovers! Come unravel your skills!! Don’t miss it.
                                <br><br>
                                <h5>Round 1 :</h5>MOBILE PHOTOGRAPHY : This category is for the contestants using their mobile phones to photograph the objects of the night sky. The pictures taken must be clear, distinct and free of all editing effects like filters.<br><br>
                                <h5>Round 2 :</h5>DSLR PHOTOGRAPHY : This category is for the contestants who possess a DSLR camera. The objects clicked on the camera must be clear, and free of any photoshop editing. The entries must be submitted by mentioning the object
                                that is been pictured, model number of the DSLR camera and the basic settings used (aperture, shutter speed, ISO, etc.).<br><br>
                                <h5>Round 3 :</h5>ASTRO VIDEOGRAPHY : This category will require a video, capturing the time lapse of the movement of the stars or celestial bodies using any recording device.<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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
                                <ul>
                                    <li> Plagiarism is strictly prohibited, if involved, the entries of the contestants will be disqualified!
                                    </li>
                                    <li>The participants must submit their photos through the Google forms only through Email ID used to register for Kriya’21. (Photos will be Accepted only till the 1st Day of Kriya’21.)
                                    </li>
                                    <li> Participants must upload their College ID card Photo in G-forms.</li>
                                    <li> A Maximum of 1 photo/video under each category can be submitted. (1 Mobile photography + 1 DSLR photography + 1 Video). </li>
                                    <li> Instruments such as Telescopes should not be used.</li>
                                    <li> The Participants may be asked to Join G-Meet for a small Assessment Round on the day of Kriya.
                                    </li>
                                    <li>The decision of the Judges will be the Final.</li>
                                </ul></div>
                                <h5>PLATFORM USED</h5>
                                G - meet, google form,Instagram
                                <br><br>
                                <h5>DURATION</h5>
                                3 hours<br><br>
                                <h5>INDIVIDUAL /GROUP</h5>
                                INDIVIDUAL<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>11 April 2021</div><br>
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
                                    <li><a  style="color: white;" href=" tel:+916381815967">6381815967 - SHERINE MARTINA EDWARD </a></li>
                                    <li><a  style="color: white;" href=" tel:+919600423005">9600423005 - SURIYA SANKAMESWARAN S</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+916369961797">6369961797 - NESHMITHA N </a></li>
                                    <li><a  style="color:white;" href=" tel:+917339604503">7339604503 - UDHAYAKUMARAN </a></li>
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
            <h4>Event 2</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it? Feel it? Seeing is not believing... Do you believe? We all time travel by travelling backwards. You wonder how? Through photos, we are able to see
                                our past life by travelling backwards in time. Light plays the important role here. It is the mystery which made Einstein to think crazy that bring back the relativity again. Do you want to time travel? Let us travel in time around
                                the space. A wonderful opportunity for photography lovers! Come unravel your skills!! Don’t miss it.
                                <br><br>
                                <h5>Round 1 :</h5>MOBILE PHOTOGRAPHY : This category is for the contestants using their mobile phones to photograph the objects of the night sky. The pictures taken must be clear, distinct and free of all editing effects like filters.<br><br>
                                <h5>Round 2 :</h5>DSLR PHOTOGRAPHY : This category is for the contestants who possess a DSLR camera. The objects clicked on the camera must be clear, and free of any photoshop editing. The entries must be submitted by mentioning the object
                                that is been pictured, model number of the DSLR camera and the basic settings used (aperture, shutter speed, ISO, etc.).<br><br>
                                <h5>Round 3 :</h5>ASTRO VIDEOGRAPHY : This category will require a video, capturing the time lapse of the movement of the stars or celestial bodies using any recording device.<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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
                                <ul>
                                    <li> Plagiarism is strictly prohibited, if involved, the entries of the contestants will be disqualified!
                                    </li>
                                    <li>The participants must submit their photos through the Google forms only through Email ID used to register for Kriya’21. (Photos will be Accepted only till the 1st Day of Kriya’21.)
                                    </li>
                                    <li> Participants must upload their College ID card Photo in G-forms.</li>
                                    <li> A Maximum of 1 photo/video under each category can be submitted. (1 Mobile photography + 1 DSLR photography + 1 Video). </li>
                                    <li> Instruments such as Telescopes should not be used.</li>
                                    <li> The Participants may be asked to Join G-Meet for a small Assessment Round on the day of Kriya.
                                    </li>
                                    <li>The decision of the Judges will be the Final.</li>
                                </ul></div>
                                <h5>PLATFORM USED</h5>
                                G - meet, google form,Instagram
                                <br><br>
                                <h5>DURATION</h5>
                                3 hours<br><br>
                                <h5>INDIVIDUAL /GROUP</h5>
                                INDIVIDUAL<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>11 April 2021</div><br>
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
                                    <li><a  style="color: white;" href=" tel:+916381815967">6381815967 - SHERINE MARTINA EDWARD </a></li>
                                    <li><a  style="color: white;" href=" tel:+919600423005">9600423005 - SURIYA SANKAMESWARAN S</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+916369961797">6369961797 - NESHMITHA N </a></li>
                                    <li><a  style="color:white;" href=" tel:+917339604503">7339604503 - UDHAYAKUMARAN </a></li>
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
<div id="id-modal-3" class="modal">
    <div class="modal-content">
        <span class="modal_close modal_close_3">&times;</span>
            <h4>SPACE SNAP</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it? Feel it? Seeing is not believing... Do you believe? We all time travel by travelling backwards. You wonder how? Through photos, we are able to see
                                our past life by travelling backwards in time. Light plays the important role here. It is the mystery which made Einstein to think crazy that bring back the relativity again. Do you want to time travel? Let us travel in time around
                                the space. A wonderful opportunity for photography lovers! Come unravel your skills!! Don’t miss it.
                                <br><br>
                                <h5>Round 1 :</h5>MOBILE PHOTOGRAPHY : This category is for the contestants using their mobile phones to photograph the objects of the night sky. The pictures taken must be clear, distinct and free of all editing effects like filters.<br><br>
                                <h5>Round 2 :</h5>DSLR PHOTOGRAPHY : This category is for the contestants who possess a DSLR camera. The objects clicked on the camera must be clear, and free of any photoshop editing. The entries must be submitted by mentioning the object
                                that is been pictured, model number of the DSLR camera and the basic settings used (aperture, shutter speed, ISO, etc.).<br><br>
                                <h5>Round 3 :</h5>ASTRO VIDEOGRAPHY : This category will require a video, capturing the time lapse of the movement of the stars or celestial bodies using any recording device.<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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
                                <ul>
                                    <li> Plagiarism is strictly prohibited, if involved, the entries of the contestants will be disqualified!
                                    </li>
                                    <li>The participants must submit their photos through the Google forms only through Email ID used to register for Kriya’21. (Photos will be Accepted only till the 1st Day of Kriya’21.)
                                    </li>
                                    <li> Participants must upload their College ID card Photo in G-forms.</li>
                                    <li> A Maximum of 1 photo/video under each category can be submitted. (1 Mobile photography + 1 DSLR photography + 1 Video). </li>
                                    <li> Instruments such as Telescopes should not be used.</li>
                                    <li> The Participants may be asked to Join G-Meet for a small Assessment Round on the day of Kriya.
                                    </li>
                                    <li>The decision of the Judges will be the Final.</li>
                                </ul></div>
                                <h5>PLATFORM USED</h5>
                                G - meet, google form,Instagram
                                <br><br>
                                <h5>DURATION</h5>
                                3 hours<br><br>
                                <h5>INDIVIDUAL /GROUP</h5>
                                INDIVIDUAL<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>11 April 2021</div><br>
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
                                    <li><a  style="color: white;" href=" tel:+916381815967">6381815967 - SHERINE MARTINA EDWARD </a></li>
                                    <li><a  style="color: white;" href=" tel:+919600423005">9600423005 - SURIYA SANKAMESWARAN S</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+916369961797">6369961797 - NESHMITHA N </a></li>
                                    <li><a  style="color:white;" href=" tel:+917339604503">7339604503 - UDHAYAKUMARAN </a></li>
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
            <h4>SPACE SNAP</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it? Feel it? Seeing is not believing... Do you believe? We all time travel by travelling backwards. You wonder how? Through photos, we are able to see
                                our past life by travelling backwards in time. Light plays the important role here. It is the mystery which made Einstein to think crazy that bring back the relativity again. Do you want to time travel? Let us travel in time around
                                the space. A wonderful opportunity for photography lovers! Come unravel your skills!! Don’t miss it.
                                <br><br>
                                <h5>Round 1 :</h5>MOBILE PHOTOGRAPHY : This category is for the contestants using their mobile phones to photograph the objects of the night sky. The pictures taken must be clear, distinct and free of all editing effects like filters.<br><br>
                                <h5>Round 2 :</h5>DSLR PHOTOGRAPHY : This category is for the contestants who possess a DSLR camera. The objects clicked on the camera must be clear, and free of any photoshop editing. The entries must be submitted by mentioning the object
                                that is been pictured, model number of the DSLR camera and the basic settings used (aperture, shutter speed, ISO, etc.).<br><br>
                                <h5>Round 3 :</h5>ASTRO VIDEOGRAPHY : This category will require a video, capturing the time lapse of the movement of the stars or celestial bodies using any recording device.<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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
                                <ul>
                                    <li> Plagiarism is strictly prohibited, if involved, the entries of the contestants will be disqualified!
                                    </li>
                                    <li>The participants must submit their photos through the Google forms only through Email ID used to register for Kriya’21. (Photos will be Accepted only till the 1st Day of Kriya’21.)
                                    </li>
                                    <li> Participants must upload their College ID card Photo in G-forms.</li>
                                    <li> A Maximum of 1 photo/video under each category can be submitted. (1 Mobile photography + 1 DSLR photography + 1 Video). </li>
                                    <li> Instruments such as Telescopes should not be used.</li>
                                    <li> The Participants may be asked to Join G-Meet for a small Assessment Round on the day of Kriya.
                                    </li>
                                    <li>The decision of the Judges will be the Final.</li>
                                </ul></div>
                                <h5>PLATFORM USED</h5>
                                G - meet, google form,Instagram
                                <br><br>
                                <h5>DURATION</h5>
                                3 hours<br><br>
                                <h5>INDIVIDUAL /GROUP</h5>
                                INDIVIDUAL<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>11 April 2021</div><br>
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
                                    <li><a  style="color: white;" href=" tel:+916381815967">6381815967 - SHERINE MARTINA EDWARD </a></li>
                                    <li><a  style="color: white;" href=" tel:+919600423005">9600423005 - SURIYA SANKAMESWARAN S</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+916369961797">6369961797 - NESHMITHA N </a></li>
                                    <li><a  style="color:white;" href=" tel:+917339604503">7339604503 - UDHAYAKUMARAN </a></li>
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
            <h4>SPACE SNAP</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it? Feel it? Seeing is not believing... Do you believe? We all time travel by travelling backwards. You wonder how? Through photos, we are able to see
                                our past life by travelling backwards in time. Light plays the important role here. It is the mystery which made Einstein to think crazy that bring back the relativity again. Do you want to time travel? Let us travel in time around
                                the space. A wonderful opportunity for photography lovers! Come unravel your skills!! Don’t miss it.
                                <br><br>
                                <h5>Round 1 :</h5>MOBILE PHOTOGRAPHY : This category is for the contestants using their mobile phones to photograph the objects of the night sky. The pictures taken must be clear, distinct and free of all editing effects like filters.<br><br>
                                <h5>Round 2 :</h5>DSLR PHOTOGRAPHY : This category is for the contestants who possess a DSLR camera. The objects clicked on the camera must be clear, and free of any photoshop editing. The entries must be submitted by mentioning the object
                                that is been pictured, model number of the DSLR camera and the basic settings used (aperture, shutter speed, ISO, etc.).<br><br>
                                <h5>Round 3 :</h5>ASTRO VIDEOGRAPHY : This category will require a video, capturing the time lapse of the movement of the stars or celestial bodies using any recording device.<br><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
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
                                <ul>
                                    <li> Plagiarism is strictly prohibited, if involved, the entries of the contestants will be disqualified!
                                    </li>
                                    <li>The participants must submit their photos through the Google forms only through Email ID used to register for Kriya’21. (Photos will be Accepted only till the 1st Day of Kriya’21.)
                                    </li>
                                    <li> Participants must upload their College ID card Photo in G-forms.</li>
                                    <li> A Maximum of 1 photo/video under each category can be submitted. (1 Mobile photography + 1 DSLR photography + 1 Video). </li>
                                    <li> Instruments such as Telescopes should not be used.</li>
                                    <li> The Participants may be asked to Join G-Meet for a small Assessment Round on the day of Kriya.
                                    </li>
                                    <li>The decision of the Judges will be the Final.</li>
                                </ul></div>
                                <h5>PLATFORM USED</h5>
                                G - meet, google form,Instagram
                                <br><br>
                                <h5>DURATION</h5>
                                3 hours<br><br>
                                <h5>INDIVIDUAL /GROUP</h5>
                                INDIVIDUAL<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p><h5>DATE</h5>
                                <div>11 April 2021</div><br>
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
                                    <li><a  style="color: white;" href=" tel:+916381815967">6381815967 - SHERINE MARTINA EDWARD </a></li>
                                    <li><a  style="color: white;" href=" tel:+919600423005">9600423005 - SURIYA SANKAMESWARAN S</a></li>
                                </ul><br>
                                <h5>VOLUNTEER NAME</h5>
                                <ul>
                                    <li><a  style="color:white;" href=" tel:+916369961797">6369961797 - NESHMITHA N </a></li>
                                    <li><a  style="color:white;" href=" tel:+917339604503">7339604503 - UDHAYAKUMARAN </a></li>
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


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/workshops.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>