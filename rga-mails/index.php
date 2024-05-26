<?php
// Load PHPMailer
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

// Use PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create a PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'mail.madr.gov.dz'; // SMTP server address
    $mail->Port = 587; // Port number for STARTTLS
    $mail->SMTPAuth = true;
    $mail->Username = 'rga2024@madr.gov.dz'; // SMTP username (email address)
    $mail->Password = 'RUQ#XyP7'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable STARTTLS encryption
 // Email content
 $role = $_POST['role'];
 $nonhashedPass = $_POST['nonhashedPass'];
 $username = $_POST['username'];
 $to_email = $_POST['email'];
 $rgaLink = $_POST['link'];
    // Email content
    $mail->CharSet = 'UTF-8'; // Set charset to UTF-8
    $mail->Encoding = 'base64'; // Use base64 encoding
    $mail->setFrom('rga2024@madr.gov.dz'); // Sender email address and name
    $mail->addAddress($to_email); // Recipient email address
    $mail->Subject = 'Affectation à un projet';
    $mail->isHTML(true);
    $body = "
    <html>
    <head>
    <title>L'application de l'RGA</title>
    </head>
    <body>
    <p>Bonjour,</p>
    <p>Votre compte dans la plate-forme de saisie du RGA 2024 a été créé avec succès. Vous trouverez ci-dessous les informations de connexion :</p>
    <ul>
    <li><strong>Le lien :</strong> <a href='$rgaLink'>la plate-forme de saisie de l'RGA 2024</a></li>
    <li><strong>Compte:</strong> $role</li>
    <li><strong>Nom d'utilisateur:</strong> $username</li>
    <li><strong>Mot de passe:</strong> $nonhashedPass</li>
    </ul>
    <p>Cordialement,</p>
    <p>Votre équipe de support</p>
    </body>
    </html>
    ";
    $mail->Body = $body;

    // Send email
    $mail->send();
    // echo 'Email has been sent';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
