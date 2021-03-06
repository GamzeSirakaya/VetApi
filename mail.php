<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail=new PHPMailer();
$mail->isSMTP();
$mail-> SMTPKeepAlive=true;
$mail-> SMTPAuth=true;
$mail-> SMTPSecure="TLS";
$mail-> Port= 587;
$mail-> Host=" furina.alastyr.com";
$mail-> Username="*******";
$mail-> Password="****";
$mail->setFrom("gamze@gamzesirakaya.com","Gamze");
$mail->isHTML(true);
$mail->addAddress("gamze.sirakaya@ogr.dpu.edu.tr");
$mail ->Subject="gmail örneği";
$mail->Body="<h1>Merhaba</h1>";
//
if($mail->send())
	echo "basarili";
else	echo "basarisiz";


?>