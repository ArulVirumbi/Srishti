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

  <link href="assets/css/contact.css" rel="stylesheet">
  <link href="assets/css/faq.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	
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

                            $("#add_err7").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'fname_short') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'email_long') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'email_short') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'eformat') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');
												 
						} else if (html == 'message_long') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
                                                 </div>');


                        } else {
                           /* $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');*/
                              $("#add_err7").html(html);
                        }
                    },
                    beforeSend: function () {
                        $("#add_err7").html("loading...");
                    }
                });
                return false;
            });
        });
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
      <li><a href="WORKSHOPS" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>Workshop</span></a></li>
      <li><a href="ABOUT" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
      <li><a href="TEAM" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
        <li><a href="SCHEDULE" class="nav-link scrollto"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
      <li><a href="#" class="nav-link scrollto active"><i class="fas fa-question"></i> <span>FAQ / Contact</span></a></li>
    </ul>
  </nav><!-- .nav-menu -->

</header>
<?php require_once 'header.php';?>

  <div  id="header2" class="d-flex align-items-center header2 ">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>FAQ</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
  </div>
  <div class="container-fluid main-content">
  <div class="row padrl">
    
      <div class="col-lg-4 fav_list">
          <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
              <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                  <i class="fa fa-question-circle"></i>&emsp;Login
              </a>
              <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
                  <i class="fa fa-question-circle"></i>&emsp;Profile
              </a>
              <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
                  <i class="fa fa-question-circle"></i>&emsp;Account
              </a>
              <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
                  <i class="fa fa-question-circle"></i>&emsp;Favorites
              </a>
              <a href="#tab5" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab5" aria-selected="false">
                  <i class="fa fa-question-circle"></i>&emsp;Transactions
              </a>
              <a href="#tab6" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab6" aria-selected="false">
                  <i class="fa fa-question-circle"></i>&emsp;General help
              </a>
              <a href="" class="nav-link" data-toggle="pill" role="tab">
                <i class="fas fa-paper-plane"></i>&emsp;contact
            </a>
          </div>
      </div>
      
      <div class="col-lg-8 padleft">
          <div class="tab-content" id="faq-tab-content">
              <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
               
                  <h2 class=" text-white">Login</h2>
                   <span class="loader pull-right"><span class="loader-inner"></span></span>
                  <hr></br>
                  <h1><a ></a></h1>
                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                       
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="first collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Lorem Ipsum?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                      It has survived not only five centuries, but also the leap into electronic typesetting, 
                                      remaining essentially unchanged. It was popularised in the 1960s with the release of 
                                      Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                      software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Why do we use it?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>It is a long established fact that a reader will be distracted by the readable content
                                     of a page when looking at its layout. The point of using Lorem
                                      Ipsum is that it has a more-or-less normal distribution of letters,
                                       as opposed to using 'Content here, content here', making it look like readable English.
                                       </p>
                                
                            </div>
                        </div>
                    </div>
    
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Where does it come from?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                                     It has roots in a piece of classical Latin literature from 45 BC, 
                                     making it over 2000 years old. Richard McClintock, a Latin professor 
                                     at Hampden-Sydney College in Virginia, looked up one of the more obscure 
                                     Latin words, consectetur, from a Lorem Ipsum passage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                    Where can I get some?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>There are many variations of passages of Lorem Ipsum available, 
                                    but the majority have suffered alteration in some form, by injected humour, 
                                    or randomised words which don't look even slightly believable. 
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't 
                                    anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>
                    </div>
                </div>
                     
                      
                  
             </div>
              <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                <h2 class=" text-white">Profile</h2>
                   <span class="loader pull-right"><span class="loader-inner"></span></span>
                  <hr></br>
                  <h1><a ></a></h1>
                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                       
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="first" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Lorem Ipsum?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                      It has survived not only five centuries, but also the leap into electronic typesetting, 
                                      remaining essentially unchanged. It was popularised in the 1960s with the release of 
                                      Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                      software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Why do we use it?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>It is a long established fact that a reader will be distracted by the readable content
                                     of a page when looking at its layout. The point of using Lorem
                                      Ipsum is that it has a more-or-less normal distribution of letters,
                                       as opposed to using 'Content here, content here', making it look like readable English.
                                       </p>
                                
                            </div>
                        </div>
                    </div>
    
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Where does it come from?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                                     It has roots in a piece of classical Latin literature from 45 BC, 
                                     making it over 2000 years old. Richard McClintock, a Latin professor 
                                     at Hampden-Sydney College in Virginia, looked up one of the more obscure 
                                     Latin words, consectetur, from a Lorem Ipsum passage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                    Where can I get some?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>There are many variations of passages of Lorem Ipsum available, 
                                    but the majority have suffered alteration in some form, by injected humour, 
                                    or randomised words which don't look even slightly believable. 
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't 
                                    anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>
                    </div>
                </div> 
              </div>
              <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                <h2 class=" text-white">Account</h2>
                <span class="loader pull-right"><span class="loader-inner"></span></span>
               <hr></br>
               <h1><a ></a></h1>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                 <div class="panel panel-default">
                    
                     <div class="panel-heading" role="tab" id="headingOne">
                         <h4 class="panel-title">
                             <a class="first" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 What is Lorem Ipsum?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                         <div class="panel-body">
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                   It has survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. It was popularised in the 1960s with the release of 
                                   Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                   software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                         <h4 class="panel-title">
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Why do we use it?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                         <div class="panel-body">
                             <p>It is a long established fact that a reader will be distracted by the readable content
                                  of a page when looking at its layout. The point of using Lorem
                                   Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable English.
                                    </p>
                             
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                             <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Where does it come from?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                         <div class="panel-body">
                             <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                                  It has roots in a piece of classical Latin literature from 45 BC, 
                                  making it over 2000 years old. Richard McClintock, a Latin professor 
                                  at Hampden-Sydney College in Virginia, looked up one of the more obscure 
                                  Latin words, consectetur, from a Lorem Ipsum passage.</p>
                         </div>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                             <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                 Where can I get some?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                         <div class="panel-body">
                             <p>There are many variations of passages of Lorem Ipsum available, 
                                 but the majority have suffered alteration in some form, by injected humour, 
                                 or randomised words which don't look even slightly believable. 
                                 If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't 
                                 anything embarrassing hidden in the middle of text.</p>
                         </div>
                     </div>
                 </div>
             </div>
              </div>
              <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                <h2 class=" text-white">Favorites</h2>
                <span class="loader pull-right"><span class="loader-inner"></span></span>
               <hr></br>
               <h1><a ></a></h1>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                 <div class="panel panel-default">
                    
                     <div class="panel-heading" role="tab" id="headingOne">
                         <h4 class="panel-title">
                             <a class="first" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 What is Lorem Ipsum?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                         <div class="panel-body">
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                   It has survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. It was popularised in the 1960s with the release of 
                                   Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                   software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                         <h4 class="panel-title">
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Why do we use it?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                         <div class="panel-body">
                             <p>It is a long established fact that a reader will be distracted by the readable content
                                  of a page when looking at its layout. The point of using Lorem
                                   Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable English.
                                    </p>
                             
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                             <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Where does it come from?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                         <div class="panel-body">
                             <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                                  It has roots in a piece of classical Latin literature from 45 BC, 
                                  making it over 2000 years old. Richard McClintock, a Latin professor 
                                  at Hampden-Sydney College in Virginia, looked up one of the more obscure 
                                  Latin words, consectetur, from a Lorem Ipsum passage.</p>
                         </div>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                             <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                 Where can I get some?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                         <div class="panel-body">
                             <p>There are many variations of passages of Lorem Ipsum available, 
                                 but the majority have suffered alteration in some form, by injected humour, 
                                 or randomised words which don't look even slightly believable. 
                                 If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't 
                                 anything embarrassing hidden in the middle of text.</p>
                         </div>
                     </div>
                 </div>
             </div>
              </div>
              <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">
                <h2 class=" text-white">Transactions</h2>
                <span class="loader pull-right"><span class="loader-inner"></span></span>
               <hr></br>
               <h1><a ></a></h1>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                 <div class="panel panel-default">
                    
                     <div class="panel-heading" role="tab" id="headingOne">
                         <h4 class="panel-title">
                             <a class="first" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 What is Lorem Ipsum?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                         <div class="panel-body">
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                   It has survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. It was popularised in the 1960s with the release of 
                                   Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                   software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                         <h4 class="panel-title">
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Why do we use it?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                         <div class="panel-body">
                             <p>It is a long established fact that a reader will be distracted by the readable content
                                  of a page when looking at its layout. The point of using Lorem
                                   Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable English.
                                    </p>
                             
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                             <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Where does it come from?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                         <div class="panel-body">
                             <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                                  It has roots in a piece of classical Latin literature from 45 BC, 
                                  making it over 2000 years old. Richard McClintock, a Latin professor 
                                  at Hampden-Sydney College in Virginia, looked up one of the more obscure 
                                  Latin words, consectetur, from a Lorem Ipsum passage.</p>
                         </div>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                             <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                 Where can I get some?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                         <div class="panel-body">
                             <p>There are many variations of passages of Lorem Ipsum available, 
                                 but the majority have suffered alteration in some form, by injected humour, 
                                 or randomised words which don't look even slightly believable. 
                                 If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't 
                                 anything embarrassing hidden in the middle of text.</p>
                         </div>
                     </div>
                 </div>
             </div>
                  
              </div>
              <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
                <h2 class=" text-white">General help</h2>
                <span class="loader pull-right"><span class="loader-inner"></span></span>
               <hr></br>
               <h1><a ></a></h1>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                 <div class="panel panel-default">
                    
                     <div class="panel-heading" role="tab" id="headingOne">
                         <h4 class="panel-title">
                             <a class="first" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 What is Lorem Ipsum?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                         <div class="panel-body">
                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                   It has survived not only five centuries, but also the leap into electronic typesetting, 
                                   remaining essentially unchanged. It was popularised in the 1960s with the release of 
                                   Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                                   software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                         <h4 class="panel-title">
                             <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Why do we use it?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                         <div class="panel-body">
                             <p>It is a long established fact that a reader will be distracted by the readable content
                                  of a page when looking at its layout. The point of using Lorem
                                   Ipsum is that it has a more-or-less normal distribution of letters,
                                    as opposed to using 'Content here, content here', making it look like readable English.
                                    </p>
                             
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                             <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Where does it come from?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                         <div class="panel-body">
                             <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                                  It has roots in a piece of classical Latin literature from 45 BC, 
                                  making it over 2000 years old. Richard McClintock, a Latin professor 
                                  at Hampden-Sydney College in Virginia, looked up one of the more obscure 
                                  Latin words, consectetur, from a Lorem Ipsum passage.</p>
                         </div>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                             <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                 Where can I get some?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                     <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                         <div class="panel-body">
                             <p>There are many variations of passages of Lorem Ipsum available, 
                                 but the majority have suffered alteration in some form, by injected humour, 
                                 or randomised words which don't look even slightly believable. 
                                 If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't 
                                 anything embarrassing hidden in the middle of text.</p>
                         </div>
                     </div>
                 </div>
             </div>
              </div>
          </div>
      </div>
  </div>
</div>

  <div class="container-fluid">
  <section id="contact" class="contact section-bg">
    <div class="contact-title">Contact Us</div>
      <div class="container" data-aos="fade-up">

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
              <a href= "mailto:teamsrishti2k21@gmail.com" target="_blank"><p>teamsrishti2k21@gmail.com<br></p></a>
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
          <div id="add_err7"></div>
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
