<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/Exception.php');
require ($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/PHPMailer.php');
require ($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/SMTP.php');

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'semarketingservices.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreply@semarketingservices.com';                     // SMTP username
    $mail->Password   = 'noreply$$$123';                               // SMTP password
    $mail->SMTPSecure = 'SSL';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreply@semarketingservices.com', 'Mailer');
    $mail->addAddress('sales@semarketingservices.com');
    $mail->addAddress('kannan2187@gmail.com', 'Kannan Perumal');     // Add a recipient
    $mail->addAddress('nareshkumar.konukati@gmail.com', 'Naresh Kumar');     // Add a recipient
    $mail->addAddress('rajkumardole@gmail.com', 'Raj Kumar');     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New inquiry from SEM';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>