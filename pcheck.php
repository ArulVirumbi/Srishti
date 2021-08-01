<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

include_once 'includes/dbh.inc.php'; 

$query = "SELECT * FROM members WHERE email = '$email'";
$result = mysqli_query($conn, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {

    if (password_verify($password, $row['password'])) {

        $_SESSION['login'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['email'] = $row['email'];
        //$_SESSION['lname'] = $row['lname'];
        echo 'true';
    }
    else {
        echo 'pass';
    }

} else {
    echo 'false';
}

?>