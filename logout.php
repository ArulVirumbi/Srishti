<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['fname']);
unset($_SESSION['mobile']);
unset($_SESSION['email']);
unset($_SESSION['department']);
unset($_SESSION['cgname']);
unset($_SESSION['events']);
unset($_SESSION['workshops']);

//unset($_SESSION['lname']);

header("location:index.php?logout=true");
?>
