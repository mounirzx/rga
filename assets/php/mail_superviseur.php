<?php
$to = "test@bneder.dz, test@bneder.dz";
$subject = "Compte superviseur";

$message = "
<html>
<head>
<title>L'application de l'RGA</title>
</head>
<body>
<p>Compte superviseur:</p>
<span>Nom d'utilisateur: $username</span>
<span>Mot de passe: $password</span>
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
?>