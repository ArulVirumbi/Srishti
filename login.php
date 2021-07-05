<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>login page</title>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"   ></script>
     <script src = "assets/js/login.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

    <!-- login -->
    <script type="text/javascript">
        		$(document).ready(function(){
			
			   $("#login").click(function(){
				
					email=$("#email").val();
					password=$("#password").val();
					 $.ajax({
						type: "POST",
						url: "pcheck.php",
						data: "email=" + email + "&password=" + password,
						success: function(html){
						  if(html=='true')
						  {
							  
							  $("#add_err1").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

							window.location.href = "index.php";
						  
						  } else if (html=='false') {
								$("#add_err1").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');
								
						  
						  } else {
								$("#add_err1").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
                        
						  }
						},
						beforeSend:function()
						{
                            $("#add_err1").html("loading...");
						}
					});
					 return false;
				});
});
    </script>

    <!-- sign up -->
    <script type="text/javascript">
        $(document).ready(function () {

            $("#register").click(function () {

                fname = $("#fname").val();
                //lname = $("#lname").val();
                email = $("#uemail").val();
                mobile = $("#mobile").val().toString();
                password = $("#upassword").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&email=" + email + "&mobile=" + mobile + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                            window.location.href = "index.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');                    

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');
												 
						/*} else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');*/

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');
												 
						            } else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');

                        } else if (html == 'nshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Mobile Number</strong> not valid. \ \
                                                 </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                            
                            /*document.getElementById("add_err2").innerHTML = html;*/
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

  </head>



  <body>
    <a href="index.php" ><button  class="closebtn" style="width:auto;"><i class="fas fa-times"></i></button></a>
   
    <div class="form-collection">
        <div class="card elevation-3 limit-width log-in-card below turned">
          <div class="card-body">
           <p class="text-muted enterlogin" > Please enter your login and password!</p>
           <div id="add_err1"></div>
            <div class="input-group email">
              <input id="email" type="text" placeholder="Email"/>
            </div>
            <div class="input-group password">
              <input id="password" type="password" placeholder="Password"/>
            </div>
            <a href="#" class="box-btn" id="forgotpass" >Forgot Password?</a>
          </div>
          <div class="card-footer" >
          <center>  <button  type="submit" class="login-btn" id="login">Log in</button></center>
          </div>
        </div>
      

      
        <div class="card elevation-2 limit-width sign-up-card above">
          <div class="card-body">
           <p class="text-muted" > Please enter your credentials</p>
           <div id="add_err2"></div>
            <div class="input-group fullname">
              <input id="fname" type="text" placeholder="Full Name"/>
            </div>
            <div class="input-group email">
              <input id="uemail" type="email" placeholder="Email"/>
            </div>
            <div class="input-group fullname">
              <input id="mobile" type="text" placeholder="Mobile Number"/>
            </div>
            <div class="input-group password">
              <input id="upassword" type="password" placeholder="Password"/>
            </div>
          </div>
          <div class="card-footer">
          <center>  <button id="register" type="submit" class="signup-btn">Sign Up</button></center>
          </div>
        </div>
      </div>
      
<div id="particles-js"></div>


    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


  </body>
</html>
