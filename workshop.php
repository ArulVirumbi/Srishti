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

  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
  
</head>

<body>
  
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none" style="color: #d8a31c"></i>

  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="index.html" class="nav-link scrollto"><i class="fas fa-home"></i> <span>Home</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
        <li><a href="#" class="nav-link scrollto active"><i class="fas fa-chalkboard-teacher"></i> <span>Workshop</span></a></li>
        <li><a href="about.html" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
        <li><a href="team.html" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
        <li><a href="contact.php" class="nav-link scrollto"><i class="fas fa-paper-plane"></i> <span>Contact</span></a></li>
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
        <h1>WORKSHOPS</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    <?php

    session_start();
    if (isset($_SESSION['login'])) {

        $fname = $_SESSION['fname'];

    ?>

        <div class="loggedin" > <?php echo $fname; ?> </div>


    <?php 
}
else{ ?>

        <div class="loggedout" >Not logged</div>   
    
<?php } ?>

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


<div class="footer-dark">
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-md-3 item colu1">
                  <h3><a href="#">Home</a></h3>
                  <h3><a href="#">Events</a></h3>
                  <h3><a href="#">Workshops</a></h3>
              </div>
              <div class="col-sm-6 col-md-3 item colu2">
                  <h3><a href="#">About</a></h3>
                  <h3><a href="#">Team</a></h3>
                  <h3><a href="#">Schedule</a></h3>
              </div>
              <div class="col-md-6 item text">
                  <img class="psg" src="assets/img/psg logo.png" alt="">
                  <p>
                      IEEE STUDENTS CHAPTER 12951
                      <BR><b>PSG COLLEGE OF TECHNOLOGY</b><br>
                  </p>
              </div>
              <div class="col item social">
                  <a href="#" target="_blank" style="background-color: #1877f2;"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" target="_blank" style="background-color: #25d366;"><i class="fab fa-whatsapp"></i></a>
                  <a href="#" target="_blank" style="background-color: #ff006a;"><i class="fab fa-instagram"></i></a>
                  <a href="#" target="_blank" style="background-color: #ff0000;"><i class="fab fa-youtube"></i></a>
                  <a href="#" target="_blank" style="background-color: #009c9c;"><i class="far fa-envelope"></i></a>
              </div>
          </div>
          <p class="copyright">Copyrights © 2022 - All Rights Reserved</p>
      </div>
  </footer>
</div>


<div id="id-modal-1" class="modal">
  <div class="modal-content">
      <span class="modal_close modal_close_1">&times;</span>
      <h4>KAUN BANEGA CODEPATHI</h4>
      <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
          <h5>Description</h5>
          Kaun Banega Codepathi is a quiz-based game show where the contestants are asked multiple choice questions and must select the correct answer from four possible choices, and are provided with lifelines that may be used if they are uncertain. Contestants
          are provided with the chance to answer a series of questions more related to computer science stream in order to win a cash prize.<br><br>
          <h5>Round 1 : (FASTEST FINGER FIRST)</h5>In this round, the contestants will be asked to answer four questions with the given time period. (Time:5min)<br><br>
          <h5>Round 2 : (HOT SEAT ROUND)</h5>After determining the winner of Fastest Fingers First, they would join the host in the ""Hot Seat"" to start answering a series of multiple-choice questions on their way to win the top cash prize . Along
          the way, the contestant is free to walk away from the game with their winnings but if they get a question wrong, they would walk away with nothing unless they correctly answered a milestone question that would guarantee some winnings.
          To help them along the way, much like its counterparts, the contestants have a set of lifelines available for them to use.
          <br> • Audience Poll (Ask the Audience): The remaining contestants who didn’t gain the opportunity of a hot seat during the first time are considered to be the audience here. They can vote for a specific option which they feel the
          most appropriate and the results of the poll are shown to the hot seat contestant.<br> • 50:50: Two wrong answers from the game would be removed leaving the player one right and one wrong answer.
          <br> • Phone-A-Friend: The contestant could call a pre-selected friend or family member of their choosing (the participants would be requested in prior to give the contact details of the pre-selected friends or family members during
          registration) to aid them in answering the question. Once connected, the aiding party and the contestant have 30 seconds to talk it out among themselves."
          <br><br>
          <h5>GENERAL RULES</h5>
          1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
          available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
          a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
          start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
          <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
          of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
          all the events and may not be subject to any discussions.
          <br><br>
          <h5>EVENT RULES</h5>
          <div class="bullet">
              <ul>
                  <li>
                      The participant should have a stable internet connection throughout the event.
                  </li>
                  <li>
                      In case of any issues the judge's decision will be considered final.
                  </li>
              </ul>
          </div>
          <h5>PLATFORM USED</h5>
          Google meet , Kahoot , Slido
          <br><br>
          <h5>DURATION</h5>
          1 hr 30 minutes<br><br>
          <h5>INDIVIDUAL /GROUP</h5>
          GROUP<br><br>
          <h5>NUMBER OF MEMBERS IN EACH TEAM</h5>
          Maximum : 2 players per team Minimum : 1 <br>
          <div class="time grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Time</h5>
              </span>
              <div>1.30 PM - 3.30 PM</div>
          </div>
          <div class="date grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Date</h5>
              </span>
              <div>10 April 2021</div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>CONVENER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+919626544000">9626544000 - Aishvarya G</a></li>
                      <li><a href=" tel:+916385728481">6385728481 - Janarthanan K</a></li>
                  </ul>
              </div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>VOLUNTEER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+916379144977">6379144977 - Narmatha R</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
      <!--<button class="coming_soon">Coming soon</button>-->
      <button disbaled onclick="register(1)" id="btn_1"> Register </button>
  </div>
</div>
<div id="id-modal-2" class="modal">
  <div class="modal-content">
      <span class="modal_close modal_close_2">&times;</span>
      <h4>1337CTF</h4>
      <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
          <h5>Description</h5>
          1337 CTF, a Jeopardy-style Capture The Flag Event, presents competitors with a set of questions that reveal clues that will guide them in solving complex tasks in a specific order. By revealing clues, contestants learn the right direction regarding techniques
          and methodologies that are needed going forward.
          <br><br>
          <h5>Round 1: Web</h5>Web - This challenge focuses on finding and exploiting the basic vulnerabilities in web application.
          <br><br>
          <h5>Round 2 : Forensics</h5>Forensics - In this challenge, the participants need to investigate some data, like analysing an image file and extracting information.
          <br><br>
          <h5>Round 3 : OSINT</h5> OSINT - It involves understanding the underlying hints hidden in the challenges itself, with the help of Google and a bit of problem-solving skill.
          <br><br>
          <h5>GENERAL RULES</h5>
          1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
          available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
          a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
          start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
          <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
          of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
          all the events and may not be subject to any discussions.
          <br><br>
          <h5>EVENT RULES</h5>
          <div class="bullet">
              <ul>
                  <li>
                      The participant should have a stable internet connection throughout the event.</li>
                  <li> In case of any issues the judge's decision will be considered final.</li>
              </ul>
          </div>
          <h5>PLATFORM USED</h5>
          Google meet ,Google Cloud Platform ,Heroku
          <br><br>
          <h5>DURATION</h5>
          1 hr 30 minutes<br><br>
          <h5>INDIVIDUAL /GROUP</h5>
          GROUP<br><br>
          <h5>NUMBER OF MEMBERS IN EACH TEAM</h5>
          Maximum : 3 players per team Minimum : 2 players per team<br>
          <div class="time grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Time</h5>
              </span>
              <div>10.00AM - 12.00 PM</div>
          </div>
          <div class="date grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Date</h5>
              </span>
              <div>11 April 2021</div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>CONVENER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+918220954727">8220954727 - Dhilip Sanjay S</a></li>
                      <li><a href=" tel:+919952405461">9952405461 - Shivani B</a></li>
                  </ul>
              </div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>VOLUNTEER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+919943176896">9943176896 - Swetha M</a></li>
                      <li><a href=" tel:+918668189160">8668189160 - Indrajit Vijayakumar</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
      <!--<button class="coming_soon">Coming soon</button>-->
      <button onclick="register(2)" id="btn_2"> Register </button>
  </div>
</div>
<div id="id-modal-3" class="modal">
  <div class="modal-content">
      <span class="modal_close modal_close_3">&times;</span>
      <h4>CODEFEAST</h4>
      <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
          <h5>Description</h5>
          CODEFEAST - is an online coding event. It is to encourage the students to test their coding skills. The event is divided into two rounds conducted through an online platform. The first round will be an MCQ round and the second round will be a coding round.<br>
          <h5>Round 1: </h5> Conducted in canvas platform as quiz with 25 questions based on basics of programming, syntax,error dedection and snippet corrections with a time duration of 30 minutes for the whole quiz. Based on the results the participants
          will be appearing to the second round. "

          <br><br>
          <h5>Round 2 : </h5> Round 2:The participants will be given 3 coding questions from a vast range of topics and the duration will be for 1-hrs. This event will be conducted on HackerRank. Based on this, the winner will be decided.

          <br><br>
          <h5>GENERAL RULES</h5>
          1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
          available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
          a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
          start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
          <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
          of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
          all the events and may not be subject to any discussions.
          <br><br>
          <h5>EVENT RULES</h5>
          <div class="bullet">
              Total number of questions — 3<br> Duration — 60 mins<br>
              <ul>
                  <li>
                      Each Question has 4 or 5 test cases and the participant should try to satisfy all of them.
                  </li>
                  <li> Only the responses from official email id will be accepted.</li>
                  <li> Tab Switching will be monitored and the maximum permitted switches is 3.</li>
                  <li> Exceeding this number will lead to disqualification.</li>
                  <li> Participants indulging in any sort of malpractice will be disqualified.</li>
                  <li> Calculators should not be used.</li>

              </ul>
          </div>
          <h5>PLATFORM USED</h5>
          Canvas, Hackerrank
          <br><br>
          <h5>DURATION</h5>
          3 Hours<br><br>
          <h5>INDIVIDUAL /GROUP</h5>
          INDIVIDUAL<br>
          <div class="time grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Time</h5>
              </span>
              <div>9.30AM - 1.00PM</div>
          </div>
          <div class="date grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Date</h5>
              </span>
              <div>10 April 2021</div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>CONVENER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+919486095796">9486095796 - NIKHIL SHANMUGAM A</a></li>
                      <li><a href=" tel:+919385372870">9385372870 - M RAJ KISHORE</a></li>
                  </ul>
              </div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>VOLUNTEER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+917010394752">7010394752 - SANJANA S</a></li>
                      <li><a href=" tel:+918903873013">8903873013 - ARIES R</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
      <!--<button class="coming_soon">Coming soon</button>-->
      <button onclick="register(17)" id="btn_17"> Register </button>
  </div>
</div>
<div id="id-modal-4" class="modal">
  <div class="modal-content">
      <span class="modal_close modal_close_4">&times;</span>
      <h4>TECHVISTARA</h4>

      <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
          <h5>Description</h5>
          Measurement systems are relevant to virtually all aspects of life including safety, security and monitoring. The field of measurement systems has been enriched by the invention of sensors, transducers and digital electronics. If sensors, transducers and
          digital electronics make you to approach the measurement systems in different manner, then this event would help you to bring out the knowledge within you and it will be useful to showcase your individuality by examining the logical
          thinking of the participant with respect to digital electronics and the participant’s capability of debugging the given circuits. Make the opportunity to enhance your knowledge or learn something new.
          <br><br>
          <h5>Round 1</h5> This round will test the knowledge of the participants in the field of sensors and digital electronics in terms of multiple-choice questions. A series of image will be given about sensors and electronic components as clue
          and the task is to find its name. KAHOOT app is used as an online platform with a time limit of 30 seconds for each question. Top 10 participants will be shortlisted for second round.<br><br>
          <h5>Round 2 :</h5>The shortlisted participants have to join the GMEET. The numbers from 1 to 50 will be displayed on the screen. The participants have to choose any five set of numbers among them. Each participant has to answer five questions.
          Time limit of each question is 60 seconds. The top 5 participants who score the highest marks within the allotted time will be shortlisted for the next round.
          <br><br>
          <h5>Round 3 :</h5>The selected participants will be provided with three Pdfs. Each Pdf will have one problem. The participant who completes the first Pdf problem will have the access to open the second Pdf and so on. The one who completes
          first within the allotted time of 30 minutes will be rewarded.
          <br><br>
          <h5>GENERAL RULES</h5>
          1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
          available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
          a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
          start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
          <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
          of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
          all the events and may not be subject to any discussions.
          <br><br>
          <h5>EVENT RULES</h5>
          <div class="bullet">
              <ul>
                  <li>Referring answers in any other device during the time of the event are strictly prohibited.
                  </li>
                  <li>Single participant will be able to attend this event.</li>
                  <li>Decision taken by the event conveners will be final.</li>
                  <li>Time limit will be strictly adhered to.</li>
                  <li>Proper Internet connection is required.</li>
                  <li> Usage of Laptop is preferred over mobile phones.</li>
                  <li>In case of tie, additional questions will be given to shortlisted participants.</li>
              </ul>
          </div>
          <h5>PLATFORM USED</h5>
          G - meet,Kahoot,any PDF viewer
          <br><br>
          <h5>DURATION</h5>
          2 hour 15 minutes<br><br>
          <h5>INDIVIDUAL /GROUP</h5>
          INDIVIDUAL<br>
          <div class="time grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Time</h5>
              </span>
              <div>9.30AM - 4.30PM</div>
          </div>
          <div class="date grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Date</h5>
              </span>
              <div>10 April 2021</div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>CONVENER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+917598763677">7598763677 - ANITHA ARUL SEELI I. </a></li>
                      <li><a href=" tel:+918270294459">8270294459 - KIRUBASREE B.</a></li>
                  </ul>
              </div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>VOLUNTEER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+918610660170 ">8610660170 - RUBASRI R </a></li>
                      <li><a href=" tel:+916385569896">6385569896 - SANDHIYA K</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
      <!--<button class="coming_soon">Coming soon</button>-->
      <button onclick="register(29)" id="btn_29"> Register </button>
  </div>
</div>
<div id="id-modal-5" class="modal">
  <div class="modal-content">
      <span class="modal_close modal_close_5">&times;</span>
      <h4>SPACE SNAP</h4>

      <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
          <h5>Description</h5>
          What you see there? There... Behind you, Right, Left and Infront of you. What do you see? Do you get it? Feel it? Seeing is not believing... Do you believe? We all time travel by travelling backwards. You wonder how? Through photos, we are able to see
          our past life by travelling backwards in time. Light plays the important role here. It is the mystery which made Einstein to think crazy that bring back the relativity again. Do you want to time travel? Let us travel in time around
          the space. A wonderful opportunity for photography lovers! Come unravel your skills!! Don’t miss it.
          <br><br>
          <h5>Round 1 :</h5>MOBILE PHOTOGRAPHY : This category is for the contestants using their mobile phones to photograph the objects of the night sky. The pictures taken must be clear, distinct and free of all editing effects like filters.<br><br>
          <h5>Round 2 :</h5>DSLR PHOTOGRAPHY : This category is for the contestants who possess a DSLR camera. The objects clicked on the camera must be clear, and free of any photoshop editing. The entries must be submitted by mentioning the object
          that is been pictured, model number of the DSLR camera and the basic settings used (aperture, shutter speed, ISO, etc.).<br><br>
          <H5>Round 3 :</h5>ASTRO VIDEOGRAPHY : This category will require a video, capturing the time lapse of the movement of the stars or celestial bodies using any recording device.<br><br>
          <h5>GENERAL RULES</h5>
          1. Username should be a combination of last four digits of Kriya ID_participants name. Only the participants who follow this format will be allowed to enter into event. E.g: 0001_Abc<br> 2.The link for joining the event will be made
          available on dashboard of the kriya website. It will also be sent to the registered mail id. Follow the same link to enter into the event.<br> 3. Login should be done using the mail id given at the time of registration. Login using
          a different mail id will be rejected.<br> 4. Late entries for events, workshops and guest lectures will not be permitted. Make sure to adhere to the given timings.<br> 5. ID card verification will be carried out prior to the event
          start and the participant is required to wear their ID card throughout the event.<br> 6. Ensure good internet connectivity. Download speed should be 4 Mbps and upload speed should be 2 Mbps.
          <br> 7. Network issues on a recurring basis will not be accepted.<br> 8. Camera and mic should be kept on till the end of the event.<br> 9. Participant is required to sit in a well lit surrounding without any noise disturbances.<br>                    10. Participants using mobile phones should place the phone in a proper visible area.<br> 11. A maximum of three warnings will be given. In case of exceeding this will be considered as malpractice and results in the disqualification
          of the participant.<br> 12. Any discrepancy during the event should be immediately reported to the event convenor to take necessary actions. Any late response will not be taken into consideration.<br> 13.Judges decision is final for
          all the events and may not be subject to any discussions.
          <br><br>
          <h5>EVENT RULES</h5>
          <div class="bullet">
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
              </ul>
          </div>
          <h5>PLATFORM USED</h5>
          G - meet, google form,Instagram
          <br><br>
          <h5>DURATION</h5>
          3 hours<br><br>
          <h5>INDIVIDUAL /GROUP</h5>
          INDIVIDUAL<br>
          <div class="time grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Time</h5>
              </span>
              <div>10.00AM - 1.00PM</div>
          </div>
          <div class="date grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>Date</h5>
              </span>
              <div>11 April 2021</div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>CONVENER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+916381815967">6381815967 - SHERINE MARTINA EDWARD </a></li>
                      <li><a href=" tel:+919600423005">9600423005 - SURIYA SANKAMESWARAN S</a></li>
                  </ul>
              </div>
          </div>
          <div class="number grid-lg-6 grid-md-6 grid-sm-6 grid-xs-12"><span>
                  <h5>VOLUNTEER NAME </h5>
              </span>
              <div>
                  <ul>
                      <li><a href=" tel:+916369961797">6369961797 - NESHMITHA N </a></li>
                      <li><a href=" tel:+917339604503">7339604503 - UDHAYAKUMARAN </a></li>
                  </ul>
              </div>
          </div>
      </div>
      <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
      <!--<button class="coming_soon">Coming soon</button>-->
      <button onclick="register(18)" id="btn_18"> Register </button>
  </div>
</div>




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


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <!--<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>