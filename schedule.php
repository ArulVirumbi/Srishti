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

  <title>SRiSHTi 2K21 - SCHEDULE</title>
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/common-styles.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <link href="assets/css/schedule.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  
  
</head>

<body>

  <i class="bi bi-list mobile-nav-toggle d-xl-none" style="color: #66fcf1"></i>

  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
      <?php require_once 'user.php'; ?>
       <li><a href="HOME" class="nav-link scrollto"><i class="fas fa-home"></i> <span>Home</span></a></li>
        <li><a href="EVENTS" class="nav-link scrollto "><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
        <li><a href="WORKSHOPS" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>Workshop</span></a></li>
        <li><a href="ABOUT" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
        <li><a href="TEAM" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
        <li><a href="#" class="nav-link scrollto active"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
        <li><a href="FAQ-CONTACT" class="nav-link scrollto"><i class="fas fa-paper-plane"></i> <span>FAQ / Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header>
    
  <?php require_once 'header.php';?>
    <div  id="header2" class="d-flex align-items-center header2">
        <div class="container d-flex align-items-center justify-content-center">
    
          <div class="logo">
            <h1>EVENTS</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
        </div>
      </div>
 
<div class="container-fluid">

  <div class="category-bar">
    <nav>
        <div id="sliding-bar"></div>
        <a href="#Day1">DAY - 1</a>
        <a href="#Day2">DAY - 2</a>
    </nav>
</div>

    <div class="experience" id="experience">
            <div id="Day1" div class="container">
                <header class="section-header text-center wow zoomIn" id="Day1" data-wow-delay="0.1s">
                    <h1>SRiSHTi- Day 1</h1><br><br>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="experience" id="experience">
            <div id="Day2" div class="container">
                <header class="section-header text-center wow zoomIn" id="Day2" data-wow-delay="0.1s">
                <div class="timeline-date">
                    <h1>SRiSHTi- Day 2</h1><br><br></div>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Brainiacs</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Questure</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/technical-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 12:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="" target="_blank">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

        <?php require_once 'footer.php';?>

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
  <script src="assets/js/main.js"></script>

</body>
</html>