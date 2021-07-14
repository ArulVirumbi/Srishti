<?php

$selector = $_POST["selector"];
$validator = $_POST["validator"];
$password = $_POST["password"];
$passwordRepeat = $_POST["rpassword"];

if(empty($password) || empty($passwordRepeat)) {
    echo 'pass';
} else if ($password != $passwordRepeat){
    echo 'false';
}else {
    $currentDate = date("U");

    require 'dbh.inc.php';

    $sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result)) {
            echo 'resubmit';
        } else {
            
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            //$tokenBinHash =  password_hash($tokenBin, PASSWORD_BCRYPT, array('cost' => 12));

            if ($tokenCheck === false) {
                echo 'link';
            }else if($tokenCheck === true) {

                $tokenEmail = $row["pwdResetEmail"];

                $sql = "SELECT * FROM members WHERE email=?;";

                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "There was an error!1";
                } else {

                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);

                    $result = mysqli_stmt_get_result($stmt);
                    if(!$row = mysqli_fetch_assoc($result)) {
                        echo "Email not in system.";
                    } else {

                        $sql = "UPDATE members SET password=? WHERE email=?;";

                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            echo "Error when updating password.";
                        } else {
                            $newPwdHash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                            mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?;";

                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt, $sql)){
                                echo "There was an error!4";
                            } else {

                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);

                                $insert_row = $conn->query("INSERT INTO pwdrequest (email) VALUES ('$tokenEmail')");
                                echo 'true';
                            }
                        }
                    }
                }
            }
        }
    }
}