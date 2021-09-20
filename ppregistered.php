<?php

session_start();

$ppname = $_POST['ppname'];
$email = $_SESSION['email'];

include_once 'includes/dbh.inc.php'; 

$query = "SELECT paperpres FROM members WHERE email='$email'";
$result = mysqli_query($conn, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row = 1) {

    $_SESSION['paperpres'] = $row['paperpres'];
    $ev_arr = explode (", ", $_SESSION['paperpres']); 
    
    if (in_array($ppname, $ev_arr)){
        echo 'rem';
    }else {
        $query = "UPDATE members SET paperpres=concat('$ppname' , ', ' , paperpres) WHERE email = '$email'" ;
        $sql = "UPDATE paperpres SET `$ppname`='yes' WHERE email = '$email'";
        $update = mysqli_query($conn, $sql) or die(mysqli_error());
        $result = mysqli_query($conn, $query) or die(mysqli_error());
        if ($email){
            echo 'true';
        }else {
            echo 'false';
        }
        
    }

} else{
    echo 'false';
}

?>