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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src = "assets/js/login.js"></script>
  
  <link href="assets/css/create-new-password.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">

  <script type="text/javascript">
        	$(document).ready(function(){
			
			   $("#change").click(function(){
				
          selector= $("#selector").val();
          validator=$("#validator").val();
					password=$("#password").val();
          rpassword=$("#rpassword").val();
					
					 $.ajax({
						type: "POST",
						url: "includes/reset-password.inc.php",
						data: "selector=" + selector + "&validator=" + validator + "&password=" + password + "&rpassword=" + rpassword,
						success: function(html){
						  if(html=='true')
						  {
							  
							  $("#add_err5").html('<div class="alert alert-success"> \
													<strong>Password Reset.</strong> \ \
												</div>');

							window.location.href = "login.php?newpwd=passwordupdated";
						  
						  } else if (html=='pass') {
                $("#add_err5").html('<div class="alert alert-danger"> \
                                        <strong>Password</strong> must be at least 4 characters . \ \
                                          </div>');
								
						  
						  } else if (html == 'false') {
                $("#add_err5").html('<div class="alert alert-danger"> \
                                      <strong>Password did not match!</strong> \ \
                                        </div>');                    

              } else if (html == 'resubmit') {
                $("#add_err5").html('<div class="alert alert-danger"> \
                                      <strong>Please resubmit your request.</strong> \ \
                                        </div>');                    

              } else if (html == 'link') {
                $("#add_err5").html('<div class="alert alert-danger"> \
                                      <strong>Link Invalid.</strong> Please try again. \ \
                                        </div>');   
                                        window.location.href = "../login.php";                 

              } else {
								  $("#add_err5").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
                        
						  }
						},
						beforeSend:function()
						{
                            $("#add_err5").html("loading...");
						}
					});
					 return false;
				});
            });
  </script>

  </head>

<body>
<header>
<a href="index.php"><button  class="closebtn" title="Home" style="width:auto;"><i class="fas fa-times"></i></button></a>
<div  id="header2" class="d-flex align-items-center header2 ">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>SRiSHTi 2k21</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
    
</div>

</header>

    <div class="cotainer-fluid" >

    
    <div class="mainDiv">
    <div class="cardStyle">
        <section class="section-default" >
          <div id="add_err5"></div> 

           <?php  
          $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if(empty($selector) || empty($validator)) {
              echo "Could not validate your request!";
            } else {
            if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
              ?>  
                <h2 class="formTitle">Change Password</h2>
      
                <form>
                  <input id="selector" type="hidden" value="<?php echo $selector ?>">
                  <input id="validator" type="hidden" value="<?php echo $validator ?>">
                  <div class="input-group password">
                    <input id="password" type="password" placeholder="Enter a New Password">
                  </div>
                  <div class="input-group password">
                    <input id="rpassword" type="password" placeholder="Confirm Password">
                  </div>
                  <div class="buttonWrapper">
                    <button type="submit" id="change" class="submitButton pure-button pure-button-primary">Submit</button>
                  </div>

                </form>
<?php
              } else {
                echo "Could not validate your request!";
              }
            }
            ?>
                

        </section> 
        </div>
      </div> 
      <div id="particles-js"></div>
    </div>
    
</body>

</html>
