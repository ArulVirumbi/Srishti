<?php
//Initialize Session
session_start();
$email = $_SESSION['email'];

if (isset($email)) {

include_once 'includes/dbh.inc.php'; 

$query = "SELECT * FROM members WHERE email = '$email'";
$result = mysqli_query($conn, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {

        $_SESSION['login'] = $row['id'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['department'] = $row['department'];
        $_SESSION['cgname'] = $row['cgname'];
        $_SESSION['events'] = $row['events'];
        $_SESSION['workshops'] = $row['workshops'];
        $_SESSION['paperpres'] = $row['paperpres'];
        $_SESSION['flagship'] = $row['flagship'];

} else {
    echo 'false';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SRiSHTi 2K21 - PROFILE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

   <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link href="assets/css/profile.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">


  </head>

<body>

<header>

    <div  id="header2" class="d-flex align-items-center header2 ">
        <div class="container d-flex align-items-center justify-content-center">

            <div class="logo">
            <h1>PROFILE</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
        </div>
        <button class="backbtn" title="backbtn" onclick="history.back()"><i class="fas fa-reply" aria-hidden="true"></i></button>
    </div>

</header>

<div class="container">
    <div class="main-body">
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card minheight">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://img.icons8.com/fluent/48/000000/gender-neutral-user.png" class="img-radius" alt="User-Profile-Image"> 
                    <div class="mt-3">
                      <h4><?php echo $_SESSION['fname']; ?></h4>
                     
                      <p class="text-muted font-size-sm"><?php echo $_SESSION['department']; ?></p></br>
                      <a href = "logout.php" class="logoutbtn"><button class="btn btn-primary"><b>Logout</b></button></a>
                      <button class="btn btn-outline-danger"><b>Delete Account</b></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                 
                 <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Shristi ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo "SRISHTI21".$_SESSION['login']; ?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $_SESSION['email']; ?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $_SESSION['mobile']; ?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">College</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo $_SESSION['cgname']; ?></div>
                  </div>
                  
                 </br>
                </div>
              </div>

            
            </div>
           
            <div class="col-md-8">
             <p class="text-muted font-size-sm">Registered events will be displayed below*</p>
              <div class="row gutters-sm">
                  
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Event</i></h6>
                      
                      <ul>
                        <?php   
                            $ev_arr = explode (", ", $_SESSION['events']);
                            $num = count($ev_arr);
                            for ($i=0 ; $i<$num-1 ; $i++){
                                echo '<li>'.$ev_arr[$i].'</li>';
                            }    
                        ?>
                        </ul>
                        </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Workshops</i></h6>
                      <ul>
                        <?php   
                            $ws_arr = explode (", ", $_SESSION['workshops']);
                            $num = count($ws_arr);
                            for ($i=0 ; $i<$num-1 ; $i++){
                                echo '<li>'.$ws_arr[$i].'</li>';
                            }    
                        ?>
                        </ul>
                        </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Paper Presentation</i></h6>
                      <ul>
                        <?php   
                            $ps_arr = explode (", ", $_SESSION['paperpres']);
                            $num = count($ps_arr);
                            for ($i=0 ; $i<$num-1 ; $i++){
                                echo '<li>'.$ps_arr[$i].'</li>';
                            }    
                        ?>
                        </ul>
                        </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Flagship</i></h6>
                      <ul>
                        <?php   
                            $fs_arr = explode (", ", $_SESSION['flagship']);
                            $num = count($fs_arr);
                            for ($i=0 ; $i<$num-1 ; $i++){
                                echo '<li>'.$fs_arr[$i].'</li>';
                            }    
                        ?>
                        </ul>
                      </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>

</body>


</html>

<?php

} else {
    header("location:login.php ");
}
?>