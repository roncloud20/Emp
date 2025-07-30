<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = "mail.roncloud.com.ng";
    $mail->SMTPAuth = true;
    $mail->Username = "emp@roncloud.com.ng";
    $mail->Password = "Qwertyuiop@1.";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
} catch (\Exception $error) {
    echo "Mail failed: $error";
    echo "Mail not sent:{$mail->ErrorInfo}";
}