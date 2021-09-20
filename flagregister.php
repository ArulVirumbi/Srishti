<?php

session_start();

$fsname = $_POST['fsname'];
$email = $_SESSION['email'];

include_once 'includes/dbh.inc.php'; 

$query = "SELECT flagship FROM members WHERE email='$email'";
$result = mysqli_query($conn, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row = 1) {

    $_SESSION['flagship'] = $row['flagship'];
    $ev_arr = explode (", ", $_SESSION['flagship']); 
    
    if (in_array($fsname, $ev_arr)){
        echo 'rem';
    }else {
        $query = "UPDATE members SET flagship=concat('$fsname' , ', ' , flagship) WHERE email = '$email'" ;
        $sql = "UPDATE events SET `$fsname`='yes' WHERE email = '$email'";
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