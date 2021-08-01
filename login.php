<?php
@ob_start();
session_start();

if(!isset($_SESSION['email'])){

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>login page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src = "assets/js/login.js"></script>
    <link rel="stylesheet" href="assets/css/login.css">
  <link href="assets/css/common-styles.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

    <!-- login -->
    <script type="text/javascript">
        		$(document).ready(function(){
			
			   $("#login").click(function(){
				
					email=$("#uemail").val();
					password=$("#upassword").val();
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
													<strong>Email not found!</strong> \ \
												</div>');
								
						  
						  } else if (html=='pass') {
								$("#add_err1").html('<div class="alert alert-danger"> \
													<strong>Wrong Password!</strong> \ \
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
 
    $(document).ready(function(e){

        $("#file").change(function() {
        var file = this.files[0];
        var fileType = file.type;
        var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
        if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
            alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
            $("#file").val('');
            return false;
        }
      });
      // Submit form data via Ajax
      $("#supForm").on('submit', function(e){
          e.preventDefault();
          $.ajax({
              type: 'POST',
              url: 'adduser.php',
              data: new FormData(this),
              dataType: 'json',
              contentType: false,
              cache: false,
              processData:false,
              beforeSend: function(){
                  $('.submitBtn').attr("disabled","disabled");
                  $('#add_err2').html('<p>Loading...</p>');
              },
              success: function(response){ //console.log(response);
                  $('.statusMsg').html('');
                  if(response.status == 1){
                      $('#supForm')[0].reset();
                      $('#add_err2').html('<p >'+response.message+'</p>');
                      window.location.href = "index.php";
                  }else{
                      $('#add_err2').html('<p>'+response.message+'</p>');
                  }
                  $('#supForm').css("opacity","");
                  $(".submitBtn").removeAttr("disabled");
              }
          });
        });
      });
    </script>

    
    <!-- reset password -->
    <script type="text/javascript">
        	$(document).ready(function(){
			
			   $("#request").click(function(){
				
					email=$("#remail").val();
					
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
    <button  class="closebtn" title="closebtn" style="width:auto;" onclick = "history.back()"><i class="fas fa-reply"></i></button>
   
    <div>
	<input type="checkbox" id="toggle"/>
	<label id="toglabel" for="toggle"></label>
</div>
    <div class="form-collection">
      
        <div class="card elevation-3 limit-width log-in-card above ">
          <div class="card-body">
          <form id="loginform">
           <p class="text-muted enterlogin" > Please enter your login and password!</p>
           <div id="add_err1"></div>
           <?php 

           if(isset($_GET["newpwd"])) {
             if($_GET["newpwd"] == "passwordupdated"){
               echo '<div class="rpwdsuccess" style="color: white">Your password has been reset!</div>';
             }
           }
           
           
           ?>
            <div class="input-group email">
              <input id="uemail" type="text" placeholder="Email"/>
            </div>
            <div class="input-group password">
              <input id="upassword" type="password" placeholder="Password"/>
            </div>
            <a class="box-btn" id="forgotpass" onclick="openForm()">Forgot Password?</a>
          
          <div class="card-footer" >
          <center>  <button class="login-btn submitBtn" id="login">Log in</button></center></div>
          </form>
          
      
        <div class="section-default" id="fgtpassform">
            <p class="text-muted enterlogin" >Please enter  Registered email ID to receive reset link.</p>

            <div id="add_err4"></div>

            <form>
            <div class="input-group email">
                <input id="remail" type="text" name="email" placeholder="Enter your email address..." />
          </div>
                <center><button id="request" class="btn submitBtn pad-ten" >Send Link</button></center>
                <!--center><button class="cancel submitBtn" onclick="closeForm()">Close</button></center-->
                <a class="btn box-btn" onclick="closeForm()">Close</a>
            </form>
          </div>
          </div>
      </div> 
      

      
      <div class="card elevation-2 limit-width sign-up-card below turned">
        <form id="supForm" enctype="multipart/form-data">
        <div class="card-body">
           <p class="text-muted" > Please enter your credentials</p>
           <div id="add_err2" ></div>
        <div class="scrollin">
          <div class="input-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"  />
          </div>

          <div class="input-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email"  />
          </div>
          
          <div class="input-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number"  />
          </div>
          <div class="input-group">
            <input type="text" class="form-control" id="department" name="department" placeholder="Department"  />
          </div>
          <div class="input-group">
            <input type="text" class="form-control" id="cgname" name="cgname" placeholder="College Name"  />
          </div>

          <div class="input-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password"  />
          </div>

          <div class="itext" >Upload your college id card</div> 
          <div class="button-wrap">
            <input type="file" class="form-control upload" id="file" name="file"  placeholder="college id card"/>
          </div>
          </div>
          <br>
          <center><input type="submit" name="submit" class="btn btn-success submitBtn" value="Sign Up"/></center>
        </form>

      </div>
      </div>
      </div>
      <div id="particles-js"></div>


    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
function openForm() {
  document.getElementById("fgtpassform").style.display = "block";
  document.getElementById("loginform").style.display = "none";
}

function closeForm() {
  document.getElementById("fgtpassform").style.display = "none";
  document.getElementById("loginform").style.display = "block";

}
</script>


  </body>
</html>

<?php 

} else{
  if (isset($_SESSION['email'])){
    header("location:profile.php ");
  }
}

?>