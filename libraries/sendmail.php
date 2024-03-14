<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function sendMailSignUp($to, $username, $password) {

    try {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();

        $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
        $mail->SMTPAuth = true;// Enable SMTP authentication
        $mail->Username = 'huymamicoi@gmail.com';// SMTP username
        $mail->Password = 'dnhf xhpa niox wmod'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // TCP port to connect to

        $mail->setFrom('xshop@gmail.com', "XSHOP");
        $mail->addAddress("$to");
        $mail->addReplyTo('not-reply@xshop.com', 'Information');

        $mail->isHTML(true);
        $subject = "Chào Mừng Bạn Đến Với XSHOP";
        $mail->Subject = mb_encode_mimeheader($subject, "UTF-8", "B");
        $mail->Body = "<h3>Đây là tài khoản và mật khẩu đăng nhập của bạn</h3> <br>
                        <span><h4>Tên đăng nhập: </h4></span><span>$username</span> <br>
                        <span><h4>Mật khẩu: </h4></span><span>$password</span> <br> <br>
                        <h2>Chúc bạn có một trải nhiệm thú vị !!!</h2>
                        ";
        $mail->AltBody = "Đây là tài khoản và mật khẩu đăng nhập của bạn: \n Tên đăng nhập: $username \n Mật khẩu: $password";
        $mail->send();
    }
    catch (Exception $e) {
        echo $e -> getMessage();
    }

}

function sendMailForgotPassword($to, $username, $password) {

    try {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();

        $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
        $mail->SMTPAuth = true;// Enable SMTP authentication
        $mail->Username = 'huymamicoi@gmail.com';// SMTP username
        $mail->Password = 'dnhf xhpa niox wmod'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // TCP port to connect to

        $mail->setFrom('xshop@gmail.com', "XSHOP");
        $mail->addAddress("$to");
        $mail->addReplyTo('not-reply@xshop.com', 'Information');

        $mail->isHTML(true);
        $subject = "XSHOP GỬI CHO BẠN MẬT KHẨU BẠN ĐÃ QUÊN";
        $mail->Subject = mb_encode_mimeheader($subject, "UTF-8", "B");
        $mail->Body = "<h3>Đây là tài khoản và mật khẩu đăng nhập của bạn</h3> <br>
                        <span><h4>Tên đăng nhập: </h4></span><span>$username</span> <br>
                        <span><h4>Mật khẩu: </h4></span><span>$password</span> <br> <br>
                        <h2>Chúc bạn sẽ vào được tài khoản của mình !!!</h2>
                        ";
        $mail->AltBody = "Đây là tài khoản và mật khẩu đăng nhập của bạn: \n Tên đăng nhập: $username \n Mật khẩu: $password";
        $mail->send();
    }
    catch (Exception $e) {
        echo $e -> getMessage();
    }

}



?>