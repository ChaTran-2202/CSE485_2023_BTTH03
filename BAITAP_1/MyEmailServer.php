<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
define('ROOT' , dirname( __FILE__ , 1));
require ROOT . '\PHPMailer\src\PHPMailer.php';
require ROOT . '\PHPMailer\src\Exception.php';
require ROOT . '\PHPMailer\src\SMTP.php';
require './EmailServerInterface.php';

class MyEmailServer implements EmailServerInterface {
    public function sendEmail($to, $subject, $message) {
   
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hieukd01yc@gmail.com';
            $mail->Password = 'esanenmidbyyakwc';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->CharSet = 'utf-8';
        
            $mail->setFrom('hieukd01yc@gmail.com');
        
            $mail->addAddress($to);
        
            $mail->isHTML(true);
        
            $mail->Subject = $subject;
            $mail->Body = $message;
        
            // //Attachments
            // $mail->addAttachment($_POST["image"]); 
        
            $mail->send();
        
            echo
            "
            <script>
            alert('Gửi thành công');
            document.location.href = 'index.php';
            </script>
            ";
        }
    
}