<?php
require './MyEmailServer.php' ;
class EmailSender {
    private $emailServer;

    public function __construct(EmailServerInterface $emailServer) {
        $this->emailServer = $emailServer;
    }

    public function send($to, $subject, $message) {
        $this->emailServer->sendEmail($to, $subject, $message);
    }
}


if(isset($_POST["send"])){

    $emailServer = new MyEmailServer();
    $emailSender = new EmailSender($emailServer);
    $emailSender->send($_POST["email"],$_POST["subject"], $_POST["message"]);
   
}

