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
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"   ></script>

  <link href="assets/css/resetpass.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">


  <script type="text/javascript">
        	$(document).ready(function(){
			
			   $("#request").click(function(){
				
					email=$("#email").val();
					
					 $.ajax({
						type: "POST",
						url: "includes/reset-req.inc.php",
						data: "email=" + email,
						success: function(html){
						  if(html=='true')
						  {
							  
							  $("#add_err4").html('<div class="alert alert-success"> \
													<strong>Check your Email!</strong> \ \
												</div>');

							//window.location.href = "index.php";
						  
						  } else if (html=='false') {
								$("#add_err4").html('<div class="alert alert-danger"> \
													<strong>Email not found!</strong> \ \
												</div>');
								
						  
						  } else {
								$("#add_err4").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
                        
						  }
						},
						beforeSend:function()
						{
                            $("#add_err4").html("loading...");
						}
					});
					 return false;
				});
            });
  </script>

  </head>

<body>

    <div class="cotainer-fluid" >

    <a href="index.php"><button  class="closebtn" title="closebtn" style="width:auto;"><i class="fas fa-reply"></i></button></a>

        <section class="section-default" >
            <h1>Reset Your Password</h1>
            <p>An e-mail will be send to you with istructions on how to reset your password.</p>

            <div id="add_err4"></div>

            <form>
                <input id="email" type="text" name="email" placeholder="Enter your email address..." />
                <button id="request" type="submit" >Submit</button>
            </form>
            
            <!--?php
                if(isset($_GET["reset"])) {
                    if ($_GET["reset"] == "success") {
                        echo '<p class="fpsuccess">Check your Mail!</p>';
                    }
                }
            ?-->
        </section>  
    </div>

</body>

</html>