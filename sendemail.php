<?php

header('Content-type: application/json');
$status = array(
    'type' => 'success',
    'message' => 'Obrigado por entrar em contato conosco. Responderemos assim que possível!'
);

$headers = "MIME-VERSION: 1.1\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>";

$name = @trim(stripslashes($_POST['name']));
$email = @trim(stripslashes($_POST['email']));
$subject = @trim(stripslashes($_POST['subject']));
$message = @trim(stripslashes($_POST['message']));

$email_from = $email;
$email_to = 'pedro.henrique.programmer@gmail.com'; //with your email

$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

$success = @mail($email_to, $subject, $body, $headers);

echo json_encode($status);
die;
?>