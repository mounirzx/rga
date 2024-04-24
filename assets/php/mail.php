<?php
$to = "test@bneder.dz, test@bneder.dz";
$subject = "Compte superviseur";
$to = $email;
$subject = "Compte del'application RGA";

$message = "
<html>
<head>
<title>L'application de l'RGA</title>
</head>
<body>

<p>Bonjour,</p>
<p>Votre compte pour l'application de l'RGA a été créé avec succès. Vous trouverez ci-dessous les informations de connexion :</p>


<ul>
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

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);