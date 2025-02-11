<?php
// Using a Namespace
namespace MyApp;

class User {
    public function greet() {
        echo "Hello from MyApp!";
    }
}

$u = new User();
$u->greet();

// Using Composer to Load a Library (Example: PHPMailer)
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer();
$mail->setFrom('your_email@example.com', 'Your Name');
$mail->addAddress('recipient@example.com');
$mail->Subject = 'Test Email';
$mail->Body = 'Hello, this is a test email.';
$mail->send();
?>
