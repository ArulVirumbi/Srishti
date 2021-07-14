<?php

$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);
$userEmail = $_POST["email"];

//$url = "www.arulvirumbi.epizy.com/forgottenpwd/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
$url = "http://localhost/srishti/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
$expires = date("U") + 900;

require 'dbh.inc.php';

$query = "SELECT email FROM members WHERE email = '$userEmail'";
$select = mysqli_query($conn, $query) or die(mysqli_error());
if(!mysqli_num_rows($select)) {
    echo 'false';
} else {

    $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }
    
    $sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        
    } else {
        $hashToken = password_hash($token, PASSWORD_BCRYPT, array('cost' => 12));
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $to = $userEmail;
    $subject = 'Reset your password for srishti';

    $msg = '<p>We have received a password rest request. The link to reset your password is below, if you did not make this request you can ignore this email.</p>';

    $msg .= '<p>Here is your password reset link: </br>';
    $msg .= '<a href="' . $url . '">' . $url . '</a></p>';


    $headers = "From: srishti <srishti2k21@gmail.com>\r\n";
    $headers .= "Reply-To: arul.virumbi@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    //mail($to, $subject, $message, $headers);



    $email2 = "noreply@srishti.com";

    require '../phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testst427@gmail.com';                 // SMTP username
    $mail->Password = 'klfibkoxuvvlttrl';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

	
    $mail->From = $email2;
    $mail->FromName = 'Srishti';
    $mail->AddAddress($to);
    //$mail->addAddress('', 'Admin');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';
    }

}

?>