<?php

session_start();

$evname = $_POST['evname'];
$email = $_SESSION['email'];

include_once 'includes/dbh.inc.php'; 

$query = "SELECT events FROM members WHERE email='$email'";
$result = mysqli_query($conn, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row = 1) {

    $_SESSION['events'] = $row['events'];
    $ev_arr = explode (", ", $_SESSION['events']); 
    
    if (in_array($evname, $ev_arr)){
        echo 'rem';
    }else {
        $query = "UPDATE members SET events=concat('$evname' , ', ' , events) WHERE email = '$email'" ;
        $sql = "UPDATE events SET `$evname`='yes' WHERE email = '$email'";
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