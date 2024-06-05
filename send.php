<?php 
use PHPMAiler\PHPMailer\PHPMailer;
use PHPMAiler\PHPMailer\Execption;
use PHPMAiler\PHPMailer\SMTP;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
echo
"<script>
alert('Check your mail')
document.location.href='index.php'
</script>";

if (isset($_POST["send"])){
    $mail= new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Username='wajih.said@ensi-uma.tn';
    $mail->Password='14012#132';
    $mail->SMTPSecure = 'ssl';
    $mail->Port=465;
    // $mail->setForm('ranim.manai@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject= "Subcription to mail";
    $mail->Body = "Thanks for subscribing to our newsletter!";
    $mail->send();
}