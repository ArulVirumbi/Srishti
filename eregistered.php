<?php

session_start();

$evname = $_POST['evname'];
$email = $_SESSION['email'];

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', 'arulvirumbi', 'srishti');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT events FROM members WHERE email='$email'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row = 1) {

    $_SESSION['events'] = $row['events'];
    $ev_arr = explode (", ", $_SESSION['events']); 
    
    if (in_array($evname, $ev_arr)){
        echo 'rem';
    }else {
        $query = "UPDATE members SET events=concat('$evname' , ', ' , events) WHERE email = '$email'" ;
        $result = mysqli_query($mysqli, $query) or die(mysqli_error());
        echo 'true';
    }

} else{
    echo 'false';
}

?>