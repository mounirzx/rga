<?php
header("Access-Control-Allow-Origin: *");
//Import PHPMailer classes into the global namespace

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$email = "rga2024";
$Mdp = "rga2024";


$role = $_POST['role'];
$nonhashedPass = $_POST['nonhashedPass'];
$username = $_POST['username'];
$to_email = $_POST['email'];
$subject = 'RGA';
$body ="
<html>
<head>
<title>L'application de l'RGA</title>
</head>
<body>

<p>Bonjour,</p>
<p>Votre compte dans la plate-forme de saisie de l'RGA 2024 a été modifier avec succès. Vous trouverez ci-dessous les informations de connexion :</p>


<ul>

<li>
<strong>Le lien :</strong><a href='http://213.179.181.50/rga'>la plate-forme de saisie de l'RGA 2024</a></li>
<li>
<strong>Compte:</strong> $role</li>
    <li><strong>Nom d'utilisateur:</strong> $username</li>
    <li><strong>Mot de passe:</strong> $nonhashedPass</li>
</ul>
<p>Cordialement,</p>
<p>Votre équipe de support</p>
</body>
</html>
";




//smtp settings
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->SMTPAuth   = true;
$mail->SMTPSecure = 'tls';
$mail->Host       = 'localhost';
$mail->Port = 25;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Username   = $email;
$mail->Password   = $Mdp;

//email settings
$mail->isHTML();
$mail->setFrom($email . "@bneder.dz");
$mail->addAddress($to_email);
$mail->Subject = $subject;
$mail->Body =  $body;
$mail->send();
