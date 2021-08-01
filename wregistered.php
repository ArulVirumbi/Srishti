<?php

session_start();

$wsname = $_POST['wsname'];
$email = $_SESSION['email'];

include_once 'includes/dbh.inc.php'; 

$query = "SELECT workshops FROM members WHERE email='$email'";
$result = mysqli_query($conn, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row = 1) {

    $_SESSION['workshops'] = $row['workshops'];
    $ev_arr = explode (", ", $_SESSION['workshops']); 
    
    if (in_array($wsname, $ev_arr)){
        echo 'rem';
    }else {
        $query = "UPDATE members SET workshops=concat('$wsname' , ', ' , workshops) WHERE email = '$email'" ;
        $sql = "UPDATE workshops SET `$wsname`='yes' WHERE email = '$email'";
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