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

  <title>SRiSHTi 2K21 - Team</title>
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

  <link href="assets/css/team.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">

  </head>

<body>

    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<header id="header" class="d-flex flex-column justify-content-center">

  <nav id="navbar" class="navbar nav-menu">
    <ul>

<?php require_once 'user.php'; ?>
  
  <li><a href="HOME" class="nav-link scrollto"><i class="fas fa-home"></i> <span>Home</span></a></li>
  <li><a href="EVENTS" class="nav-link scrollto"><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
  <li><a href="WORKSHOPS" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>Workshop</span></a></li>
  <li><a href="ABOUT" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
  <li><a href="#" class="nav-link scrollto active"><i class="fas fa-users"></i> <span>Team</span></a></li>
    <li><a href="SCHEDULE" class="nav-link scrollto"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
  <li><a href="FAQ-CONTACT" class="nav-link scrollto"><i class="fas fa-question"></i> <span>FAQ / Contact</span></a></li>
</ul>
  </nav><!-- .nav-menu -->

</header>

<?php require_once 'header.php';?>

  <div  id="header2" class="d-flex align-items-center header2 ">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>OUR TEAM</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
  </div>

  <div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Anushya-mam.jpg" width="163" class="rounded-circle"></div>
                    <h3 class="mt-2">Dr.Anusuya K V</h3> <span class="mt-1 clearfix">Faculty Advisor</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
<div class="social-buttons mt-5"> <!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--><button class="neo-button"><a href="mailto:kva.ece@psgtech.ac.in"><i class="fa fa-envelope"></i></a> </button> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Sanjay Kumar S.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Sanjay Kumar S</h3> <span class="mt-1 clearfix">Chairman</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5">  <button class="neo-button"><a href="https://www.linkedin.com/in/sanjaykumar03"<i class="fa fa-linkedin fa-1x"></i></button></a> <button class="neo-button"><a href="mailto:18e639@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"><div class="imgbo"> <img src="assets/img/team/Pranith Kumar P.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Pranith Kumar P</h3> <span class="mt-1 clearfix">Co - Chairman</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5">  <button class="neo-button"><a href="https://www.linkedin.com/in/pranith-kumar-p-a2a3781b3"<i class="fa fa-linkedin fa-1x"></i></a></button> <button class="neo-button"><a href="mailto:18l136@psgtech.ac.in"><i class="fa fa-envelope"></i> </button> </a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"><div class="imgbo"> <img src="assets/img/team/Vijaya Shangamesh M A.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Vijaya Shangamesh M A</h3> <span class="mt-1 clearfix">Secretary - Men</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--><button class="neo-button"><a href="mailto:18l160@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"><div class="imgbo"><img src="assets/img/team/Poorvika S.jpg" width="170" class="rounded-circle"></div> 
                    <h3 class="mt-2">Poorvika S</h3> <span class="mt-1 clearfix">Secretary - Women</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"> <!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18u239@psgtech.ac.in"><i class="fa fa-envelope"></i> </button> </a> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"><div class="imgbo"> <img src="assets/img/team/Dhivya Sree M.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Dhivya Sree M</h3> <span class="mt-1 clearfix">Treasurer</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18d215@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Nishanth A.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Nishanth A</h3> <span class="mt-1 clearfix">SPAC Chairman</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18l132@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Anitha Arul Seeli I.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Anitha Arul Seeli I</h3> <span class="mt-1 clearfix">SPAC Secretary</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18u205@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Diwaharan T.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Diwaharan T</h3> <span class="mt-1 clearfix">SPAVE Secretary - Men</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18d216@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Devi Priya A.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Devi Priya A</h3> <span class="mt-1 clearfix">SPAVE Secretary - Women</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18e611@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Abisaike S.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Abisaike S</h3> <span class="mt-1 clearfix">Joint Secretary</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18r202@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Nithya Sree C K.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Nithya Sree C K</h3> <span class="mt-1 clearfix">Joint Secretary</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18l133@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Nikhil Shanmugam A.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Nikhil Shanmugam A</h3> <span class="mt-1 clearfix">Sponsorship Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18l433@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Mirudula K.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Mirudula K</h3> <span class="mt-1 clearfix">Sponsorship Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18e626@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Priyadharshini G.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Priyadharshini G</h3> <span class="mt-1 clearfix">Design Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18e634@psgtech.ac.in"><i class="fa fa-envelope"></i> </button> </a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Vinula Parvathavarthini R.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Vinula Parvathavarthini R</h3> <span class="mt-1 clearfix">Design Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18r261@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Swetha K.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Swetha K</h3> <span class="mt-1 clearfix">Technology Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18d258@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Bhava Dharani S.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Bhava Dharani S</h3> <span class="mt-1 clearfix">Technology Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18l107@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Mahavidhya Y.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Mahavidhya Y</h3> <span class="mt-1 clearfix">Publicity Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18r227@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Mohana Veeralakshmi R.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Mohana Veeralakshmi R</h3> <span class="mt-1 clearfix">Publicity Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"> <!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18u234@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Aswin Kumar K.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Aswin Kumar K</h3> <span class="mt-1 clearfix">Logistics Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> --><button class="neo-button"><a href="mailto:19e902@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Habibullah Z.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Habibullah Z</h3> <span class="mt-1 clearfix">Logistics Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18l116@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Aryaa K K.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Aryaa K K</h3> <span class="mt-1 clearfix">Hospitality Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18u212@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Vishnula V.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Vishnula V</h3> <span class="mt-1 clearfix">Hospitality Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18e656@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Anto Madonna Shirani V.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Anto Madonna Shirani V</h3> <span class="mt-1 clearfix">Literary Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18d205@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Purvisha G.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Purvisha G</h3> <span class="mt-1 clearfix">Literary Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"> <!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18l140@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Reethineekaa R.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Reethineekaa R</h3> <span class="mt-1 clearfix">Membership Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"> <!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18d244@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Kirubasree B.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Kirubasree B</h3> <span class="mt-1 clearfix">Membership Team</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> --><button class="neo-button"><a href="mailto:18u229@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Arun D J.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Arun D J</h3> <span class="mt-1 clearfix">Student Coordinator Head - Men</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:19e901@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Sushmitha G.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Sushmitha G</h3> <span class="mt-1 clearfix">Student Coordinator Head - Women</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"> <!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--><button class="neo-button"><a href="mailto:18r252@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Krishna B.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Krishna B</h3> <span class="mt-1 clearfix">Student Coordinator</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18e620@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Ravivarma M.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Ravivarma M</h3> <span class="mt-1 clearfix">Student Coordinator</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18l141@psgtech.ac.in"><i class="fa fa-envelope"></i> </button> </a> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Beryl Jasper.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Beryl Jasper</h3> <span class="mt-1 clearfix">Student Coordinator</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"> <!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button> --><button class="neo-button"><a href="mailto:18d210@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Harish Mathura Vell B.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Harish Mathura Vell B</h3> <span class="mt-1 clearfix">Student Coordinator</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18u218@psgtech.ac.in"><i class="fa fa-envelope"></i> </button> </a> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Darshana B.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Darshana B</h3> <span class="mt-1 clearfix">Student Coordinator</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5">  <!--<button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18e608@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Muthu Vignesh.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Muthu Vignesh</h3> <span class="mt-1 clearfix">Student Coordinator</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18u235@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Vigasini R.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Vigasini R</h3> <span class="mt-1 clearfix">Student Coordinator</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"> <!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--><button class="neo-button"><a href="mailto:18e653@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Swetha C.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Swetha C</h3> <span class="mt-1 clearfix">Student Coordinator</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18r253@psgtech.ac.in"><i class="fa fa-envelope"></i> </button> </a> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Vijayalakshmi S.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Vijayalakshmi S</h3> <span class="mt-1 clearfix">Student Coordinator</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18e655@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Washifa S.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Washifa S</h3> <span class="mt-1 clearfix">Governing Council</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"> <!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:17e655@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Ronald S Ebenezer.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Ronald S Ebenezer</h3> <span class="mt-1 clearfix">Governing Council</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:18e910@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Abishek S S.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Abishek S S</h3> <span class="mt-1 clearfix">Governing Council</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!-- <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:17e602@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5 mb-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Arivumani M.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Arivumani M</h3> <span class="mt-1 clearfix">Governing Council</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:17e604@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Ashok Kumar N K K.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Ashok Kumar N K K</h3> <span class="mt-1 clearfix">Governing Council</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:17e605@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 py-4 mt-5">
                <div class="text-center"> <div class="imgbo"><img src="assets/img/team/Sneha M.jpg" width="170" class="rounded-circle"></div>
                    <h3 class="mt-2">Sneha M</h3> <span class="mt-1 clearfix">Governing Council</span> <small class="mt-4">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</small>
                    <div class="social-buttons mt-5"><!--  <button class="neo-button"><i class="fa fa-linkedin fa-1x"></i></button>--> <button class="neo-button"><a href="mailto:17e646@psgtech.ac.in"><i class="fa fa-envelope"></i> </button></a>  </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php require_once 'footer.php';?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



    <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>
