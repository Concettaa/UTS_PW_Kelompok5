<?php

include('../db.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/OAuth.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/POP3.php';
require '../PHPMailer/src/SMTP.php';

    // if(isset($_POST['register'])){
        

        $nama = $_POST['name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenisKelamin'];
        $tanggal_lahir = $_POST['birthdate'];
        $email = $_POST['email'];
        $code = md5($email.date('Y-m-d'));

        // $mail = new PHPMailer();
        $sql = "SELECT * FROM login where email='$email'";
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0){
            echo '<script>alert("Email sudah terdaftar"); window.location = "../page/registerPage.php" </script>';
        }else {
            $query = mysqli_query($con,
            "INSERT INTO login(nama, username, password, alamat, jenis_kelamin, tanggal_lahir, email, verification_code)
                VALUES
            ('$nama', '$username', '$password', '$alamat', '$jenis_kelamin', '$tanggal_lahir', '$email', '$code')")
                or die(mysqli_error($con));

            //Create a new PHPMailer instance
            $mail = new PHPMailer;
            
            $mail->isSMTP();

            //Enable SMTP debugging
            // SMTP::DEBUG_OFF = off (for production use)
            // SMTP::DEBUG_CLIENT = client messages
            // SMTP::DEBUG_SERVER = client and server messages
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPAuth = true;
            $mail->Username = 'jonathanks2005@gmail.com';
            $mail->Password = 'SimpingJean';
            $mail->setFrom('no-reply@yourwebsite.com', 'Your website service');
            //Set an alternative reply-to address
            //$mail->addReplyTo('replyto@example.com', 'First Last');

            $mail->addAddress($email, $nama);
            $mail->Subject = 'Verification Account - nama website';
            $body = "Hi, ".$nama."<br>Plase verif your email before access our website : <br> http://localhost:8080/Kelompok5_OnlineReaderPHP/process/confirmEmail.php?code=".$code;
            $mail->Body = $body;
            $mail->AltBody = 'Verification Account';

            if(!$mail->send()){
                '<script> alert("Register Failed"); </script>';
            }else{
                echo
                '<script> alert("Register Success"); window.location = "../welcomePage.php" </script>';
                // header("Location: email-verification.php?email=" . $email);
                // session_start();
                // $_SESSION['userRegis'] = $username;
                // echo
                // '<script>
                //     alert("Verif the Code!"); window.location = "../page/verifPage.php"
                // </script>';
                #if (save_mail($mail)) {
                #    echo "Message saved!";
                #}
            }
        }
?>