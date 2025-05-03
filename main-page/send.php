<?php
require __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: main.php');
  exit;
}

$first = trim($_POST['name']  ?? '');
$last  = trim($_POST['surname']     ?? '');
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

if (!$first || !$last || !$email) {
  echo "Please fill out all fields correctly.";
  exit;
}

$mail = new PHPMailer(true);
try {
  // 1) SMTP setup
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'durgutisylejman00@gmail.com';         // your Gmail
  $mail->Password   = 'huph lcpu swpb lyyq';     // the 16-char App Password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = 587;

  // 2) Message headers & body
  $mail->setFrom($email, "$first $last");
  $mail->addAddress('durgutisylejman00@gmail.com');          // where you want it sent
  $mail->Subject = "New contact from $first $last";
  $mail->Body    = "First Name: $first\n"
                  . "Surname:    $last\n"
                  . "Email:      $email\n";

  $mail->send();
  header("Location: main.php");
  exit;
  } catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
?>
