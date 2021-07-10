<?php

        
        if (isset($_SESSION['login'])) {

        $fname = $_SESSION['fname'];

?>

        <li><a href="profile.php" class="nav-link scrollto"><i class="fas fa-user"></i> <span><?php echo $fname; ?></span></a></li>

<?php   } else {
?>
        <li><a href="login.php" class="nav-link scrollto"><i class="fas fa-user"></i> <span>Login</span></a></li>
                

        <?php } ?>