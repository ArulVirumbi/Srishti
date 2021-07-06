<?php
//Initialize Session
session_start();
$email = $_SESSION['email'];

if (isset($_SESSION['login'])) {

$mysqli = new mysqli('localhost', 'root', 'arulvirumbi', 'srishti');


//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT * FROM members WHERE email = '$email'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {

        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['events'] = $row['events'];
        $_SESSION['workshops'] = $row['workshops'];

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
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

  <link href="assets/css/profile.css" rel="stylesheet">


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


<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/fluent/48/000000/gender-neutral-user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h5 class="f-w-600"><?php echo $_SESSION['fname']; ?></h5>
                                <p><?php echo $_SESSION['email']; ?></p>
                                <p><?php echo $_SESSION['mobile']; ?></p> 
                            <div><a href = "logout.php" class="logoutbtn">
                            <button type="button" class="btn btn-outline-primary"><b>LOGOUT</b></button>
                             </a>
                            </div></div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h5 class="m-b-20 p-b-5 b-b-default f-w-600">Events Registered</h5>
                                <div class="row">
                                <?php echo $_SESSION['events']; ?>
                                </div>
                                <h5 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Workshops Registered</h5>
                                <div class="row">
                                <?php echo $_SESSION['workshops']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"   ></script>

</body>


</html>

<?php

} else {
    header("location:login.php ");
}
?>